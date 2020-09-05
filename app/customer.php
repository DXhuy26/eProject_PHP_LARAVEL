<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = "customer";
    protected $fillable = ['id', 'name', 'email', 'password', 'address', 'phone_number'];
}
