@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->

<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href=""><i class="fa fa-home"></i>Trang chủ</a>



                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <img class="product-big-img" src="public/imgsp/{{$sanpham->images}}" width="70%" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>iGuitar</span>
                                <h3>{{$sanpham->name}}</h3>

                            </div>
                            <div class="pd-desc">
                                <p>Thường giao hàng trong 4-8 ngày làm việc.</p>
                                <h4>
                                    @if($sanpham->giagiam==0)
                                    {{number_format($sanpham->giagoc)}}₫
                                    @else
                                    {{number_format($sanpham->giagiam)}}₫
                                    <span>{{number_format($sanpham->giagoc)}}₫</span>
                                    @endif
                                </h4>
                            </div>
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                                <a href="#" class="primary-btn pd-cart">Thêm vào giỏ hàng</a>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Loại đàn</span>: {{$sanpham->phanloai->name}}</li>
                                <li><span>Thương hiệu</span>: {{$sanpham->thuonghieu}}</li>
                                <li><span>Ưu điểm</span>: {{$sanpham->uudiem}} </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">Mô tả sản phẩm</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">Thông tin chi tiết</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab">Phản hồi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Giới thiệu</h5>
                                            <p>{{$sanpham->mota}} </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="img/product-single/tab-desc.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Tên sản phẩm</td>
                                            <td>
                                                <div class="cart-add">{{$sanpham->name}} </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Loại đàn</td>
                                            <td>
                                                <div class="cart-add">???</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Thương hiệu</td>
                                            <td>
                                                <div class="p-stock">{{$sanpham->thuonghieu}} </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Gia gốc</td>
                                            <td>
                                                <div class="p-price">{{number_format($sanpham->giagoc)}}₫</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Giá giảm</td>
                                            <td>
                                                <div class="p-price">{{number_format($sanpham->giagiam)}}₫</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Ưu điểm</td>
                                            <td>
                                                <div class="p-stock">{{$sanpham->uudiem}} </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comments</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-2.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Your Ratind</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="#" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->



@endsection