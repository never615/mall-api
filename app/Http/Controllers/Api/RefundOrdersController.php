<?php
/**
 * Created by PhpStorm.
 * User: klinson <klinson@163.com>
 * Date: 2019/10/15
 * Time: 00:56
 */

namespace App\Http\Controllers\Api;


use App\Models\Express;
use App\Models\Order;
use App\Models\OrderGoods;
use App\Models\RefundOrder;
use App\Transformers\RefundOrderTransformer;
use Illuminate\Http\Request;

class RefundOrdersController extends Controller
{
    public function index(Request $request)
    {
        $query = RefundOrder::query();
        if ($request->status) {
            $query->where('status', $request->status);
        }
        if ($request->order_number) {
            $query->where('order_number', "like", "%{$request->order_number}%");
        }

        $list = $query->isOwner()->recent()->paginate($request->per_page);
        return $this->response->paginator($list, new RefundOrderTransformer());
    }

    // 发起退款，仅支持确认到货7天内的未申请(1)或已经撤销申请(0)情况
    public function store(Order $order, OrderGoods $orderGoods, Request $request)
    {
        $this->authorize('is-mine', $order);

        if (! in_array($order->status, [3, 4])) {
            return $this->response->errorBadRequest('订单状态异常，请确认订单状态');
        }

        if ($order->confirm_at && strtotime($order->confirm_at) + 7*24*60*60 < time()) {
            return $this->response->errorBadRequest('订单确定到货已经超过7天，不可申请退款');
        }

        if ($orderGoods->order_id !== $order->id) {
            return $this->response->errorBadRequest('请选择退款商品');
        }

        if ($orderGoods->refund_status && $orderGoods->refund_status !== 7) {
            return $this->response->errorBadRequest('该商品已经申请过退款');
        }

        $this->validate($request, [
            'quantity' => 'required|numeric',
            'reason_text' => 'required|max:250',
            'reason_images' => 'required'
        ], [], [
            'quantity' => '退款数量',
            'reason_text' => '退款原因',
            'reason_images' => '说明图片'
        ]);

        if ($orderGoods->quantity < $request->quantity) {
            return $this->response->errorBadRequest('退款数量不合法');
        }
        // 按购买数量和退款数量比例退
        $real_price = intval(strval($orderGoods->real_price * (floatval($request->quantity) / $orderGoods->quantity)));

        // 验证是否需要退优惠券
        // 活动商品直接照价退， 没用优惠券照价退
        // 不是活动商品，并且是用了优惠券需要扣除优惠券折扣部分
        if (empty($orderGoods->marketing_id) && $order->coupon_price) {
            // 算大不算小，就可以少退点，避免超退
            $refund_in_coupon = ceil(floatval(strval($real_price * (floatval($order->coupon_price) / $order->allow_coupon_price))));
            $real_price -= $refund_in_coupon;
        }

        $data = [
            'order_number' => RefundOrder::generateOrderNumber(),
            'user_id' => $this->user->id,
            'goods_id' => $orderGoods->goods_id,
            'order_goods_id' => $orderGoods->id,
            'goods_specification_id' => $orderGoods->goods_specification_id,
            'reason_text' => $request->reason_text,
            'reason_images' => $request->reason_images,
            'quantity' => $request->quantity,
            'price' => $orderGoods->price,
            // 优惠需按比例扣除
            'real_price' => $real_price,
            'status' => 1,
        ];
        if ($order->used_balance) {
            $data['real_refund_balance'] = $data['real_price'];
        } else {
            $data['real_refund_cost'] = $data['real_price'];
        }
        $refund_order = $order->refunds()->create($data);

        return $this->response->item($refund_order, new RefundOrderTransformer());
    }

    // 用户发货
    public function express(RefundOrder $order, Request $request)
    {
        $this->authorize('is-mine', $order);

        if ($order->status !== 2) {
            return $this->response->errorBadRequest('订单状态异常，请确认订单状态');
        }

        $this->validate($request, [
            'freight_price' => 'required',
            'express_id' => 'required',
            'express_number' => 'required'
        ], [], [
            'freight_price' => '快递费',
            'express_id' => '快递公司',
            'express_number' => '快递单号'
        ]);

        $order->fill($request->only(['freight_price', 'express_number', 'express_id']));
        $order->expressed_at = date('Y-m-d H:i:s');
        $order->status = 3;
        $order->save();

        return $this->response->item($order, new RefundOrderTransformer());
    }

    public function show(RefundOrder $order)
    {
        $this->authorize('is-mine', $order);

        return $this->response->item($order, new RefundOrderTransformer());
    }

    // 撤销申请,已发货(3)，已退款(4)和已拒绝退款(5),已撤销（7）是不可撤销的
    public function repeal(RefundOrder $order)
    {
        $this->authorize('is-mine', $order);

        if (in_array($order->status, [3, 4, 5, 7])) {
            return $this->response->errorBadRequest('售后订单已发货或已完成，不可撤销');
        }

        $order->status = 7;
        $order->save();

        return $this->response->item($order, new RefundOrderTransformer());
    }

    // 更新，仅支持确认到货7天内的未审批(1)和已驳回申请(6)的状态下可以更新
    public function update(RefundOrder $order, Request $request)
    {
        $this->authorize('is-mine', $order);

        if (! in_array($order->status, [1, 6])) {
            return $this->response->errorBadRequest('售后订单状态不可编辑');
        }

        $this->validate($request, [
            'quantity' => 'required|numeric',
            'reason_text' => 'required|max:250',
            'reason_images' => 'required'
        ], [], [
            'quantity' => '退款数量',
            'reason_text' => '退款原因',
            'reason_images' => '说明图片'
        ]);

        $data = $request->only(['quantity', 'reason_text', 'reason_images']);

        $data['real_price'] = $request->quantity * $order->orderGoods->price;
        $data['status'] = 1;

        if ($order->used_balance) {
            $data['real_refund_balance'] = $data['real_price'];
        } else {
            $data['real_refund_cost'] = $data['real_price'];
        }

        $order->fill($data);
        $order->save();

        return $this->response->item($order, new RefundOrderTransformer());
    }

    // 获取物流信息，仅支持3已发货待卖家确认到货，4已退款，5确认到货拒绝退款
    public function logistics(RefundOrder $order)
    {
        $this->authorize('is-mine', $order);

        if (! in_array($order->status, [3, 4, 5])) {
            return $this->response->errorBadRequest('未发货，无法查询');
        }

        try {
            $res = $order->getLogistics();

            if (isset($res['status']) && $res['status'] == 200) {
                $res['com_name'] = Express::getNameByCode($res['com']);
                return $this->response->array($res);
            } else if (isset($res['result']) && $res['result'] == false) {
                return $this->response->errorBadRequest($res['message']);
            } else {
                return $this->response->errorBadRequest('获取物流失败');
            }
        } catch (\Exception $exception) {
            return $this->response->errorBadRequest('获取物流失败');
        }
    }
}