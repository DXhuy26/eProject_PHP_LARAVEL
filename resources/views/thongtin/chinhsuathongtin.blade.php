@extends('master')
@section('content')
<!-- Page Content -->
<div class="invoice-box">
    <div class="row">
        <div class="col-md-5">

        <form role="form" action="{{ url('thongtin/updateProcess/{$customer_info ->id}')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="card-body">
                <H4 style="color:blue;">Chỉnh sửa thông tin</H4>
                <div >
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control" style="margin-bottom:1vw;" value="{{ $customer_info -> name }}" reaonly>
                    </div>


                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" style="margin-bottom:1vw;" value="{{ $customer_info -> password}}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" style="margin-bottom:1vw;" value="{{ $customer_info -> email }}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control" style="margin-bottom:1vw;" value="{{ $customer_info -> phone_number }}">
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" id="address" class="form-control" style="margin-bottom:1vw;" value="{{ $customer_info -> address }}">
                    </div>


                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Cập nhật thông tin
                </button>
            </div>

        </form>
        </div>

    </div>
</div>
@endsection