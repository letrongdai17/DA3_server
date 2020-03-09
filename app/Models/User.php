<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'firstname', 'lastname', 'firstname_kana', 'lastname_kana',
        'email', 'password', 'birthday', 'gendar', 'tel',
        'zipcode', 'prefectures', 'city', 'street', 'building', 'room',
        'memo', 'status', 'push_notification', 'regist_manager_id', 'update_manager_id',
        'last_login', 'os', 'device_token', 'inflow',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function suppliers() {
        return $this->belongsToMany('App\Models\Supplier', 'favorite_suppliers');
    }
}
