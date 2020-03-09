<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $fillable = [
        'name', 'img_url', 'price', 'description',
        'size', 'color', 'guarantee_duration',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_product');
    }

    public function suppliers()
    {
        return $this->belongsToMany('App\Models\Supplier', 'supplier_product');
    }
}
