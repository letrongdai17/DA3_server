<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['quantity'];

    public function cart() {
        return $this->belongsTo('App\Models\Cart');
    }

    public function product() {
        return $this->hasOne('App\Model\Product');
    }
}
