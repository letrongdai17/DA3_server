<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['quantity'];

    public function order()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function product() {
        return $this->hasOne('App\Models\Product');
    }
}
