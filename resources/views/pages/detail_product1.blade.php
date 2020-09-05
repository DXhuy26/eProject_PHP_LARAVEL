@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href=""><i class="fa fa-home"></i>Trang chủ</a>
                    <a href="">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-4">
            <div class="pi-pic-detail">
                <img src="public/imgsp/{{$sanpham->images}}" style="width:100%" alt="1i.jpg">
            </div>
        </div>
        <div class="col-md-8">
            <div class="col-md-6" style="text-align: left;">
                <div class="text-muted">
                    <h5>{{$sanpham->name}}</h5>
                </div>
                <br>
                <div>
                    @if($sanpham->giagiam==0)
                    <span style="color:orange; font-size: 17px;">{{number_format($sanpham->giagoc)}}₫</span>
                    @else
                    <span style="text-decoration:line-through; font-size: 15px;" style="color: black;"> {{number_format($sanpham->giagoc) }}₫</span>
                    <span style="color: orange; font-size: 17px;"> {{number_format($sanpham->giagiam)}}₫</span>
                    @endif
                    <hr>
                </div>
                <h6 class="text-muted" style="font-size: 12px;">Thường giao hàng trong 4-8 ngày làm việc.</h6>
                <br>
                <div class="select-button-detail">
                    <a onclick="AddCart('{{$sanpham->id}}')" href="javascript:" class="primary-btn view-card">+ Thêm vào giỏ hàng</a>
                </div>

                <br>
                <div>
                    <h5 style="font-weight: bold;">THÔNG TIN CHI TIẾT SẢN PHẨM</h5>
                    <hr>
                    <h6>Loại đàn: <span class="text-muted">Acoustic</span> </h6>
                    <h6>Thương hiệu: <span class="text-muted">{{$sanpham->thuonghieu}}</span></h6>
                    <h6>Ưu điểm: </h6>
                    <h6 class="text-muted">
                        {{$sanpham->uudiem}}
                    </h6>

                </div>
            </div>
            <div class="col-md-6">
                <div class="text-muted">
                    <h5><u>MÔ TẢ SẢN PHẨM</u></h5>
                    <br>
                    <p>{{$sanpham->mota}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h5 style="text-align: center;">BÌNH LUẬN</h5>
    <hr>
</div>


@endsection