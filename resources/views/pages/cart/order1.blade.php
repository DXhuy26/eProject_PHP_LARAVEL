@extends('master')
@section('content')
@if(Session::has('khach_hang_dn'))
<div class="container">
    <div class="col-xs-12 col-sm-6 col-md-5">
        <h3>Đặt hàng</h3>
        <br>
        <form action="{{url('/storeOrder')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Mã khách hàng:</label>
                <input type="text" class="form-control" name="customerID" id="customerID" aria-describedby="helpId" value="{{Session::get('khach_hang_dn')->id}}" readonly>
            </div>


            <div class="form-group">
                <label for="">Tên khách hàng:</label>
                <input type="text" class="form-control" name="name" id="cname" aria-describedby="helpId" value="" placeholder="Nhập tên người nhận hàng" required>
            </div>

            <div class="form-group">
                <label for="">Địa chỉ nhận hàng:</label>
                <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" value="" placeholder="Nhập địa chỉ giao hàng" required>
                <!--<small id="helpId" class="form-text text-muted">input reciever address</small>-->
            </div>


            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" value="" placeholder="Nhập số điện thoại người nhận" required>
            </div>


            <div class="form-group">
                <label for="">Tổng số tiền cần thanh toán:</label>
                <input type="text" class="form-control" name="amount2" id="amount2" aria-describedby="helpId" value="{{number_format( Session::get('Cart')->totalPrice)}}₫" readonly>
            </div>

            @php
            date_default_timezone_set ("Asia/Saigon");
            $mytime = date('Y-m-d H:i:s');
            $disable = session('Cart') ? "" :"disabled" ;
            @endphp


            <button type="submit" class="btn btn-warning" {{$disable}}>Thanh toán</button>

            <input type="hidden" name="orderDate" id="orderDate" value="{{ $mytime}}">
            <input type="hidden" name="amount" id="amount" value="{{Session::get('Cart')->totalPrice}}">

        </form>
    </div>
</div>
@endif
@endsection