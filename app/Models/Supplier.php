<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'address', 'phone_number', 'email',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'supplier_product');
    }
}
