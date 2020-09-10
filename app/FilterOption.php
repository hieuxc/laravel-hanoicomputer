<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilterOption extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'filter_id', 'name', 'slug',
    ];

    public function filter(){
        return $this->belongTo('App\Filter');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'filter_option_products');
    }
}
