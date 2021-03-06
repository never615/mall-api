<?php

namespace App\Transformers;

use App\Models\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['orderGoods', 'user', 'specifications', 'coupon'];

    public function transform(Order $order)
    {
        return [
            'id' => $order->id,
            'user_id' => $order->user_id,
            'order_number' => $order->order_number,
            'all_price' => $order->all_price,
            'goods_price' => $order->goods_price,
            'real_price' => $order->real_price,
            'member_discount_price' => $order->member_discount_price,
            'member_discount' => $order->member_discount,
            'coupon_price' => $order->coupon_price,
            'allow_coupon_price' => $order->allow_coupon_price,
            'user_coupon_id' => $order->user_coupon_id,
            'freight_price' => $order->freight_price,
            'freight_template_id' => $order->freight_template_id,
            'goods_count' => $order->goods_count,
            'goods_weight' => $order->goods_weight,
            'remarks' => $order->remarks,
            'status' => $order->status,
            'address_id' => $order->address_id,
            'created_at' => $order->created_at->toDatetimeString(),
            'payed_at' => $order->payed_at,
            'expressed_at' => $order->expressed_at,
            'confirmed_at' => $order->confirmed_at,
            'used_balance' => $order->used_balance,
            'real_cost' => $order->real_cost,
            'cancel_order_number' => $order->cancel_order_number,
            'cancel_reason' => $order->cancel_reason,
            'express_id' => $order->express_id,
            'express_number' => $order->express_number,
            'address' => $order->address_snapshot,
        ];
    }

    public function includeOrderGoods(Order $order)
    {
        return $this->collection($order->orderGoods, new OrderGoodsTransformer());
    }

    public function includeUser(Order $order)
    {
        return $this->item($order->user, new UserTransformer());
    }

    public function includeCoupon(Order $order)
    {
        if ($order->coupon) {
            return $this->item($order->coupon, new UserHasCouponTransformer());
        } else {
            return null;
        }
    }

}