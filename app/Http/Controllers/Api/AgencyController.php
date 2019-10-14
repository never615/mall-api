<?php
/**
 * Created by PhpStorm.
 * User: klinson <klinson@163.com>
 * Date: 2019/8/18
 * Time: 00:48
 */

namespace App\Http\Controllers\Api;

use App\Models\AgencyConfig;
use App\Models\RechargeThresholdOrder;
use App\Transformers\AgencyConfigTransformer;
use App\Transformers\RechargeThresholdOrderTransformer;
use Illuminate\Http\Request;
use Auth;
use DB;
use Exception;

class AgencyController extends Controller
{
    public function agencyConfigs()
    {
        $configs = AgencyConfig::all();
        return $this->response->collection($configs, new AgencyConfigTransformer());
    }

    public function recharge(AgencyConfig $agencyConfig)
    {
        if ($this->user->agency_id) {
            if ($this->user->agency_id >= $agencyConfig->id) {
                return $this->response->errorBadRequest('您的当前代理等级已经超过这个级别');
            }
        }

        $order = RechargeThresholdOrder::generateOrder($this->user, $agencyConfig);

        if (app()->isLocal()) {
            $order->setSuccess();
            return $this->response->item($order, new RechargeThresholdOrderTransformer());
        } else {
            try {
                $config = $order->generatePayConfig();
                return $this->response->array($config);
            } catch (Exception $exception) {
                return $this->response->errorBadRequest($exception->getMessage());
            }
        }
    }

    // 门槛金充值订单记录
    public function rechargeThresholdOrders(Request $request)
    {
        $query = RechargeThresholdOrder::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }
        if ($request->order_number) {
            $query->where('order_number', "like", "%{$request->order_number}%");
        }

        $list = $query->isOwner()->recent()->paginate($request->per_page);
        return $this->response->paginator($list, new RechargeThresholdOrderTransformer());
    }

    // 门槛金充值订单记录
    public function rechargeThresholdOrder(RechargeThresholdOrder $order)
    {
        $this->authorize('is-mine', $order);

        return $this->response->item($order, new RechargeThresholdOrderTransformer());
    }
}