@extends('master')
@section('content')
<!-- Page Content -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Thông tin khách hàng</h2>
                    <form action="{{route('dangnhap')}}" method="post">
                        <div class="group-input">
                            <label for="username">Tên đăng nhập</label>
                            <input class="input" type="text" readonly value="{{$info_customer -> name}}">
                        </div>
                        <div class="group-input">
                            <label for="pass">Email</label>
                            <input class="input" type="email" readonly value="{{$info_customer -> email}} ">
                        </div>
                        <div class="group-input">
                            <label for="username">Địa chỉ</label>
                            <input class="input" type="text" readonly value="{{$info_customer -> address}}">
                        </div>
                        <div class="group-input">
                            <label for="username">Số điện thoại</label>
                            <input class="input" type="tel" readonly value="{{$info_customer -> phone_number}}">
                        </div>
                        <button type="submit" class="site-btn login-btn"><a href="{{URL::to('thongtin/update/'.$Ctmid = Session::get('khach_hang_dn')->id)}}">Cập nhật thôn tin</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection