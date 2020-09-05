@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
                <a href="" style="font-size: 25px;"><i class="fa fa-star"></i>Đơn hàng hàng của bạn</a>
            </div>
            <br><br>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Mã hóa đơn</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Tên người nhận</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody >

                            @foreach($xemdonhang as $xem)
                            <tr style="font-size: 1.5em;">
                                <td>{{$xem->id}}</td>
                                <td>{{$xem->orderDate}}</td>
                                <td>{{$xem->amount}}</td>
                                <td style="text-align: left">{{$xem->name}}</td>
                                <td>{{$xem->phone}}</td>
                                <td>{{$xem->address}}</td>
                                <td>{{$xem->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection