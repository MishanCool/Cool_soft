<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'phone_num','city','country','order',
    ];
}
