@extends('master')
@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Đăng nhập</h2>
                    <form action="{{route('dangnhap')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class=" text-center">
                            @if(session('alert'))
                            <div class="alert alert-danger" rote="alert">
                                {{session('alert')}}<br>
                            </div>
                            @endif
                        </div>
                        <div class="group-input">
                            <label for="username">Nhập Email *</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <button type="submit" class="site-btn login-btn">Đăng nhập</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{route('dangki')}}" class="or-login">Đăng kí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection