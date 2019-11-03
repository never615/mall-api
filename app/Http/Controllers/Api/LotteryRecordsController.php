<?php
/**
 * Created by PhpStorm.
 * User: klinson <klinson@163.com>
 * Date: 2019/8/18
 * Time: 00:48
 */

namespace App\Http\Controllers\Api;

use App\Models\LotteryRecord;
use App\Transformers\AddressTransformer;
use App\Transformers\LotteryRecordTransformer;
use DB;
use Illuminate\Http\Request;

class LotteryRecordsController extends Controller
{

    public function index(Request $request)
    {
        $list = LotteryRecord::isOwner()->recent()->paginate($request->per_page);
        return $this->response->paginator($list, new LotteryRecordTransformer());
    }

    public function setAddress(Request $request, LotteryRecord $record)
    {
        $this->authorize('is-mine', $record);
        if (empty($request->address_id) || ! $address = $this->user->addresses()->where('id', $request->address_id)->first()) {
            return $this->response->errorBadRequest('请选择配送地址');
        }
        if ($record->address_id) {
            return $this->response->errorBadRequest('此订单已经设置了发货地址');
        }
        $record->address_id = $request->address_id;
        $record->address_snapshot = (new AddressTransformer())->transform($address);
        $record->save();
        return $this->response->item($record, new LotteryRecordTransformer());
    }

    public function show(LotteryRecord $record)
    {
        $this->authorize('is-mine', $record);
        return $this->response->item($record, new LotteryRecordTransformer());
    }

    public function logistics(LotteryRecord $record)
    {
        if ($record->status == 1) {
            return $this->response->errorBadRequest('该中奖尚未发货');
        }

        try {
            $res = $record->getLogistics();
            return $this->response->array($res);
        } catch (\Exception $exception) {
            return $this->response->errorBadRequest($exception->getMessage());
        }
    }

}