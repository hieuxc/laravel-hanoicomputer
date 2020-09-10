<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    public function specifications()
    {
        return $this->hasMany('App\Specification');
    }

    public function filters()
    {
        return $this->hasMany('App\Filter');
    }
}
