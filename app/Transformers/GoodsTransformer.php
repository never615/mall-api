<?php

namespace App\Transformers;

use App\Models\Goods as Model;
use App\Models\MemberLevel;
use League\Fractal\TransformerAbstract;

class GoodsTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['category', 'soldSpecifications'];

    protected $type;
    protected $discount = 100;

    public function __construct($type = 'list')
    {
        $this->type = $type;
        if (\Auth::check()) {
            $this->discount = \Auth::user()->getBestMemberDiscount();
        } else {
            $this->discount = MemberLevel::getMaxDiscount();
        }
    }

    public function transform(Model $model)
    {
        if ($this->type === 'show') {
            return [
                'id' => $model->id,
                'category_id' => $model->category_id,
                'title' => $model->title,
                'thumbnail_url' => $model->thumbnail_url,
                'max_price' => $model->max_price,
                'min_price' => $model->min_price,
                'discount_max_price' => $this->discount < 100 ? ceil(strval($model->max_price * $this->discount * 0.01)) : $model->max_price,
                'discount_min_price' => $this->discount < 100 ? ceil(strval($model->min_price * $this->discount * 0.01)) : $model->min_price,
                'has_recommended' => $model->has_recommended,
                'created_at' => $model->created_at->toDateTimeString(),
                'images' => $model->images_url,
                'detail' => $model->detail,
            ];
        } else {
            return [
                'id' => $model->id,
                'category_id' => $model->category_id,
                'title' => $model->title,
                'thumbnail_url' => $model->thumbnail_url,
                'max_price' => $model->max_price,
                'min_price' => $model->min_price,
                'discount_max_price' => $this->discount < 100 ? ceil(strval($model->max_price * $this->discount * 0.01)) : $model->max_price,
                'discount_min_price' => $this->discount < 100 ? ceil(strval($model->min_price * $this->discount * 0.01)) : $model->min_price,
                'has_recommended' => $model->has_recommended,
                'created_at' => $model->created_at->toDateTimeString(),
            ];
        }
    }

    public function includeCategory(Model $model)
    {
        return $this->item($model->category, new CategoryTransformer());
    }

    public function includeSoldSpecifications(Model $model)
    {
        return $this->collection($model->soldSpecifications, new GoodsSpecificationTransformer());
    }
}