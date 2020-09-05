<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // khai báo table ứng với model
    protected $table = "products";
    // khai báo trường khóa chính
    protected $primaryKey = 'id';
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = false; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = ['id', 'name', 'id_type', 'thuonghieu','new' ,'images', 'giagoc', 'giagiam','uudiem', 'mota'];

    public function phanloai()
    {
        return $this->belongsTo('App\phanloai' ,'id_type', 'id');
    }
}
