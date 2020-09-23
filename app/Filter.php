<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filter extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'product_type_id', 'name', 'slug',
    ];

    public function product_type()
    {
        return $this->belongsTo('App\ProductType');
    }

    public function filter_options()
    {
        return $this->hasMany('App\FilterOption');
    }
}
