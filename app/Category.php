<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'parent_id', 'product_type_id', 'name', 'slug'
    ];

    public function product_type()
    {
        return $this->belongsTo('App\ProductType');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
