@extends('master')
@section('content')
@if(Session::has('khach_hang_dn'))
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="{{url('/storeOrder')}}" method="post" class="checkout-form">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h4>Chi tiết đơn hàng</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="cun-name">Mã khách hàng</label>
                            <input type="text" name="customerID" id="customerID" aria-describedby="helpId" value="{{Session::get('khach_hang_dn')->id}}" readonly>
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Tên khách hàng<span>*</span></label>
                            <input type="text" name="name" id="cname" aria-describedby="helpId" value="" placeholder="Nhập tên người nhận hàng" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Địa chỉ<span>*</span></label>
                            <input type="text" name="address" id="address" aria-describedby="helpId" value="" placeholder="Nhập địa chỉ giao hàng" required class="street-first">
                        </div>
                        <div class="col-lg-12">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" name="phone" id="phone" aria-describedby="helpId" value="" placeholder="Nhập số điện thoại người nhận" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Tạo tài khoản?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Sản phẩm <span>Đơn giá</span></li>
                                @if(Session::has("Cart") != null)
                                @foreach(Session::get("Cart")->products as $item)
                                <li class="fw-normal">{{$item['productInfo']->name}} x {{$item['quanty']}}
                                    <span> @if($item['productInfo']->giagiam == 0)
                                        <p>{{number_format( $item['productInfo']->giagoc)}}₫ x {{$item['quanty']}}</p>
                                        @else
                                        <p>{{number_format( $item['productInfo']->giagiam)}}₫ x {{$item['quanty']}}</p>
                                        @endif
                                    </span>
                                </li>
                                @endforeach
                                @endif
                                <li class="fw-normal" name="amount2" id="amount2" aria-describedby="helpId">Tổng tiền <span>{{number_format( Session::get('Cart')->totalPrice)}}₫</span></li>
                                <li class="total-price">Thành tiền <span>{{number_format( Session::get('Cart')->totalPrice)}}₫</span></li>
                            </ul>
                          
                            @php
                            date_default_timezone_set ("Asia/Saigon");
                            $mytime = date('Y-m-d H:i:s');
                            $disable = session('Cart') ? "" :"disabled" ;
                            @endphp

                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn" {{$disable}}>ĐẶT HÀNG</button>
                            </div>

                            <input type="hidden" name="orderDate" id="orderDate" value="{{ $mytime}}">
                            <input type="hidden" name="amount" id="amount" value="{{Session::get('Cart')->totalPrice}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endif
@endsection