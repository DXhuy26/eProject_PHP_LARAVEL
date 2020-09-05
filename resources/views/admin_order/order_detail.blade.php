@extends('admin_layout')
@section('admin_product')
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="public/imgsp/ac1.jpg" alt="" />
            <h3>ZOOM</h3>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="public/imgsp/ac1.jpg" class="newarrival" alt="" />
            <h2>Tên đàn</h2>
            <img src="public/imgsp/ac1.jpg" alt="" />

            <form action="{{URL::to('/save-cart')}}" method="POST">
                @csrf
                <!-- <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}"> -->

                <span>
                    <span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>

                    <label>Số lượng:</label>
                    <input name="qty" type="number" min="1" class="" value="1" />
                    <input name="productid_hidden" type="hidden" value="" />
                </span>
                <input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart" data-id_product="" name="add-to-cart">
            </form>

            <p><b>Tình trạng:</b> Còn hàng</p>
            <p><b>Điều kiện:</b> Mơi 100%</p>
            <p><b>Thương hiệu:</b> </p>
            <p><b>Danh mục:</b> </p>
            <a href=""><img src="" class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
    @endsection