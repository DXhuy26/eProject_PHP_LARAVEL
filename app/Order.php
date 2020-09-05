<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['id','customerID','name', 'address', 'phone', 'amount', 'orderDate', 'status','note'];

}
