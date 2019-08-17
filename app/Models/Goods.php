<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model
{
    use SoftDeletes;

    protected $casts = [
        'images' => 'array'
    ];

    const THUMBNAIL_TEMPLATE = 'images/template.jpg';

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return get_admin_file_url($this->thumbnail);
        } else {
            return asset(Category::THUMBNAIL_TEMPLATE);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function specifications()
    {
        return $this->hasMany(GoodsSpecification::class, 'goods_id')->orderBy('sort');
    }

    public function getImagesUrlAttribute()
    {
        if (! empty($this->images)) {
            return get_admin_file_urls($this->images);
        } else {
            return [];
        }
    }

    public function autoUpdate()
    {
        $specifications = $this->specifications;
        $this->max_price = $specifications->max('price');
        $this->min_price = $specifications->min('price');
        $this->save();
    }
}
