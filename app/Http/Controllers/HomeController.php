<?php

namespace App\Http\Controllers;

use App\customer;
use App\Product;
use App\phanloai;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $new_product = Product::where('new', 1)->paginate(8);
        $sanpham_km = Product::where('giagiam', '<>', 0)->paginate(8);
        return view('pages.home', compact('new_product', 'sanpham_km'));
    }
    public function getindex(){
        $new_product= Product::where('new',1)->paginate(8);
        $sanpham_km = Product::where('giagiam','<>',0)->paginate(12);
        return view('pages.home',compact('new_product','sanpham_km'));
    }
    public function getsanpham(){
        $allsp = product::paginate(12);
        $loai_sp = phanloai::all();
        return view('pages.sanpham',compact('allsp','loai_sp'));
    }
    public function getloai_sp($type){
        $sp_loai= product::where('id_type',$type)->get();
        $loaisp=phanloai::all();
        return view('pages.loaisp',compact('sp_loai','loaisp'));
    }
    public function getchitiet($id){
        $sanpham = product::where('id',$id)->first();
        //$sanphamtt = product::where('id_type',$sanpham->id_type)->paginate(4);
        //$n_product = product::where('new',1)->paginate(4);
         return view('pages.detail_product',compact('sanpham'));
     }

    public function gettimkiem(Request $tim){
        $sanphamtk= Product::where('name','like','%'.$tim->key.'%')->get();
        return view('pages.timkiem',compact('sanphamtk'));
    }

    public function getdangki(){
        return view('pages.dangki');
    }
    public function postdangki(Request $req){
        $this->validate($req,
            [
            'name'=>'required',
            'email'=>'required|email|unique:customer,email',
            'password'=>'required|min:6|max:20',           
            'repassword'=>'required|same:password'

        ],

        [
            'email.required'=>'vui long nhap email',
            'email.email'=>'khong dung dinh dang email',
            'email.unique'=>'email da co nguoi su dung',
            'password.required'=>'vui long nhap mat khau',
            'password.min'=>'vui long nhap pass co 6 den 20 ki tu',
            'password.max'=>'vui long nhap pass co 6 den 20 ki tu',
            'repassword.same'=>'vui long nhap pass vs pass cf phai giong nhau'
        ]);
        $customer = new customer();
        $customer ->name = $req->name;
        $customer ->email= $req->email;
        $customer ->password = $req->password;
        $customer ->address= $req->address;
        $customer ->phone_number= $req->phone;
        $customer ->save();
        return redirect()->back()->with('thanhcong','Bạn đã tạo tài khoản thành công');

    }

    //show gioi thieu
    public function gioi_thieu(){
        return view('pages.gioithieu');
    }

}
