<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanloai extends Model
{
    protected $table = "type_products";
    protected $fillable = ['id', 'name', 'imgBanner'];
    public function sanpham()
    {
        return $this->hasMany('App\Product', 'id_type', 'id');
    }
}
