@extends('master')
@section('content')

<div class="inner-header">
    <div class="nav-item" style="background-color: thistle;">
        <div class="container">
            <div class="pull-left">
                <p>tim kiếm</p>
            </div>
            <div class="pull-right">

                <div class="beta-breadcrumb font-large">
                    <a href="">Home</a> / <span>tim kiem</span>
                </div>
            </div>
        </div>
    </div>
    <div>
        @if(count($sanphamtk)!=0)
        <p class="" style="text-align: center;">tìm thấy {{count($sanphamtk)}} sản phẩm</p>
        @else
        <p class="" style="text-align: center;">không tìm thấy sản phẩm phù hợp</p>
        @endif
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
                            @foreach($sanphamtk as $sp)
                            <div class="col-sm-3">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        @if($sp->giagiam!=0)
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">
                                                Sale
                                            </div>
                                        </div>
                                        @endif
                                        <img src="public/imgsp/{{$sp->images}}" alt="" height="">
                                        <ul>
                                            <li class="quick-view"><a href="#">+ Add Cart</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <a href="#">
                                            <h5>{{$sp->name}}</h5>
                                        </a>
                                        <div class="section-title">
                                            @if($sp->giagiam==0)
                                            <span class="product-price">{{number_format($sp->giagoc)}}₫</span>
                                            @else
                                            <span class="product-price-down" style="text-decoration:line-through"> {{number_format($sp->giagoc)}}₫</span>
                                            <span class="product-price"> {{number_format($sp->giagiam)}}₫</span>
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
@endsection