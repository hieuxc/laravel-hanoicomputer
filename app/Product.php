<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $casts = [
        'specifications' => 'array',
    ];

    public function admin()
    {
        return $this->belongTo('App\Admin');
    }

    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function product_type()
    {
        return $this->belongTo('App\ProductType');
    }

    public function product_images()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function filter_options()
    {
        return $this->belongsToMany('App\FilterOption', 'filter_option_products');
    }
}
