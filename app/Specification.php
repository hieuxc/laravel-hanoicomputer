<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specification extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'product_type_id', 'name',
    ];

    public function product_type()
    {
        return $this->belongsTo('App\ProductType');
    }
}
