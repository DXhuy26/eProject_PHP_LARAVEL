@extends('welcome')
@section('content')
<!--slide-->
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="public/frontend/img/slide-8.jpg" alt="" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="public/frontend/img/slide-3.png" alt="" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="public/frontend/img/slide-4.jpg" alt="" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="public/frontend/img/slide-5.jpg" alt="" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="public/frontend/img/slide-6.jpg" alt="" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- body-->
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>

            <div class="row">
                <div class="col-sm-12">
                    <!-- .beta-products-list -->
                </div>
                <!-- Breadcrumb Section Begin -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text product-more">
                                <a href="{{route('home')}}" style="font-size: 25px;"><i class="fa fa-star"></i> Sản phẩm mới</a>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb Section Begin -->

                <div class="row">
                    @foreach($new_product as $new)
                    <div class="col-sm-3">
                        <div class="product-item">
                            <div class="pi-pic">
                                @if($new->giagiam!=0)
                                <div class="ribbon-wrapper">
                                    <div class="sale pp-sale">
                                        Sale
                                    </div>
                                </div>
                                @endif
                                <a href="{{route('chitiet',$new->id)}}"><img src="public/imgsp/{{$new->images}}" alt="" height=""></a>

                                <ul>
                                    <li class="quick-view"><a onclick="AddCart('{{$new->id}}')" href="javascript:">+ Thêm vào giỏ hàng</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="{{route('chitiet',$new->id)}}">
                                    <h5>{{$new->name}}</h5>
                                </a>
                                <div class="section-title">
                                    @if($new->giagiam==0)
                                    <span class="product-price">{{number_format($new->giagoc)}}₫</span>
                                    @else
                                    <span class="product-price-down" style="text-decoration:line-through"> {{number_format($new->giagoc)}}₫</span>
                                    <span class="product-price"> {{number_format($new->giagiam)}}₫</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div>
                <!-- Breadcrumb Section Begin -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text product-more">
                                <a href="{{route('home')}}" style="font-size: 25px;"><i class="fa fa-star"></i> Sản phẩm khuyến mãi</a>
                            </div>
                            <br> <br>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb Section Begin -->
                <div class="row">
                    @foreach($sanpham_km as $spkm)
                    <div class="col-sm-3">
                        <div class="product-item">
                            <div class="pi-pic">
                                @if($spkm->giagiam!=0)
                                <div class="ribbon-wrapper">
                                    <div class="sale pp-sale">
                                        Sale
                                    </div>

                                </div>
                                @endif
                                <a href="{{route('chitiet',$spkm->id)}}"><img src="public/imgsp/{{$spkm->images}}" alt="" height=""></a>

                                <ul>
                                    <li class="quick-view"><a onclick="AddCart('{{$spkm->id}}')" href="javascript:">+ Thêm vào giỏ hàng</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="{{route('chitiet',$spkm->id)}}">
                                    <h5>{{$spkm->name}}</h5>
                                </a>
                                <div class="section-title">
                                    @if($spkm->giagiam==0)
                                    <span class="product-price">{{number_format($spkm->giagoc)}}₫</span>
                                    @else
                                    <span class="product-price-down" style="text-decoration:line-through"> {{number_format($spkm->giagoc)}}₫</span>
                                    <span class="product-price"> {{number_format($spkm->giagiam)}}₫</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>

            <!-- .beta-products-list -->
        </div>

    </div>
</div>




<!-- end section with sidebar and main content -->


</div> <!-- .main-content -->
</div> <!-- #content -->
</div>

@endsection