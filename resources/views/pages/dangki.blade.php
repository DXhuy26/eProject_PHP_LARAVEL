@extends('master')
@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Đăng kí</h2>
                    <form action="{{route('dangki')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-sm-12" style="color: red;">
                                @if(count($errors)>0)
                                <div class="alert alert-danger" style="font-size: 1.5em;">
                                    @foreach($errors->all() as $err)
                                    {{$err}}
                                    @endforeach
                                </div>
                                @endif
                                @if(Session::has('thanhcong'))
                                <div style="font-size: 2em;" class="alert alert-sub">{{Session::get('thanhcong')}} </div>
                                @endif
                            </div>
                        </div>
                        <div class="group-input">
                            <label for="username">Nhập Tên *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Địa chỉ *</label>
                            <input type="text" id="adress" name="address" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Số điện thoại *</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="group-input">
                            <label for="pass">Nhập lại mật khẩu *</label>
                            <input type="password" id="repassword" name="repassword" required>
                        </div>

                        <button type="submit" class="site-btn login-btn">ĐĂNG KÍ</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{route('dangnhap')}}" class="or-login">Or ĐĂNG NHẬP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection