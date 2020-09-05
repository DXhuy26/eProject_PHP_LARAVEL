<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;








class dangnhapController extends Controller
{
    public function getdangnhap()
    {
        return view('pages.dangnhap');
    }
    public function postdangnhap(Request $request)
    {

        $email = $request->email;
        $pass = $request->password;
        $kh = customer::where('email', $email)->where('password', $pass)->first();
        if ($kh) {
            $request->session()->put('khach_hang_dn', $kh);
            return redirect('/index');
        }
        return redirect('login/dangnhap')->with('alert', 'Đăng nhập không thành công');
    }
    public function getdangxuat(Request $request)
    {
        $request->session()->Flush();
        $cookie = \Cookie::forget('khach_hang_dn');
        return redirect('/index')->withCookie($cookie);
    }

    public function show_info($Customerid)
    {
        $info_customer = DB::table('customer')
            ->where('id', $Customerid)
            ->first();

        $management_customer = view('thongtin.thongtin')->with('info_customer', $info_customer);
        return view('master')->with('thongtin.thongtin', $management_customer);
    }

    public function update($Customername)
    {
        $customer_info = DB::table('customer')
            ->where('id', $Customername)
            ->first();
        return view('thongtin/chinhsuathongtin', ['customer_info' => $customer_info]);
    }

    public function updateProcess(Request $request, $customer)
    {
        $Name = $request->input('name');
        $Email = $request->input('email');
        $Pass = $request->input('password');
        $Address = $request->input('address');
        $Phone = $request->input('phone_number');
        $customer_info = DB::table('customer')
            ->where('id', $customer)
            ->update(['name' => $Name, 'email' => $Email, 'password' => $Pass, 'address' => $Address, 'phone_number' => $Phone]);
        return redirect()->back()->with('thanhcong', 'Bạn đã cập nhật tài khoản thành công');
    }
}
