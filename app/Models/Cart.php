<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['amount'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
