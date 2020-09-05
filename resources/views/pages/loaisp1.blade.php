@extends('master')
@section('content')
<div class="inner-header">
    <div class="nav-item" style="background-color: thistle;">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    @foreach($loaisp as $l)
                    <li><a  href="{{route('loai_sp',$l->id)}}">{{$l->name}}</a></li>
                    @endforeach


                </ul>
            </nav>

            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="">Home</a> / <span>Sản phẩm</span>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- .beta-products-list -->
                    <div>
                        <div class="row">
                            @foreach($sp_loai as $new)
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
                   <!-- .beta-products-list -->
                </div>
            </div>
            <!-- end section with sidebar and main content -->
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
<!-- .container -->
@endsection