@extends('master')
@section('content')
<!-- Page Content -->
<div class="invoice-box">
    <div class="row">
        <div class="col-md-5" class="card-body">
            <div class="pull-letf">
                <h3 class="title">Thông tin khách hàng</h3>
            </div>
            

            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input  class="form-control" style="margin-bottom:1vw;" class="input" type="text" readonly value="{{$info_customer -> name}}">
            </div>

            <div class="form-group">
                <label>Email.</label>
                <input  class="form-control" style="margin-bottom:1vw;" class="input" type="email" readonly value="{{$info_customer -> email}}">
            </div>

            <div class="form-group">
                <label>Địa chỉ</label>
                <input  class="form-control" style="margin-bottom:1vw;" class="input" type="text" readonly value="{{$info_customer -> address}}">
            </div>

            <div class="form-group">
                <label>Số điện thoại</label>
                <input  class="form-control" style="margin-bottom:1vw;" class="input" type="tel" readonly value="{{$info_customer -> phone_number}}">
            </div>
        </div>
    </div>
    <div>
        <button type="submit" class="">
            <a href="{{URL::to('thongtin/update/'.$Ctmid = Session::get('khach_hang_dn')->id)}}">Cập nhật thông tin</a>
        </button>
    </div>
</div>
@endsection