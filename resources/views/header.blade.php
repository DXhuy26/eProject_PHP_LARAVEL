<header class="header-section">
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <a href="#">
                        <img src="public/frontend/img/6.png" alt="logo" height="55px">
                    </a>
                </div>
                <!-- from tim kiem -->
                <div class="col-lg-4 col-md-4">
                    <div class="advanced-search">
                        <form action="{{route('timkiem')}}" method="get" class="input-group">
                            <input type="text" name="key" id="s" placeholder="Nhập từ khóa">
                            <button type="submit" id="searchsubmit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>

                <!--xử lí session đăng nhâp thay thế ô đăng nhập bằng ô đăng xuất-->
                <div class="col-lg-2 col-md-2">
                    @if(Session::has('khach_hang_dn'))
                    <a class="login-panel" href="{{URL::to('/xem-don-hang/'.$Ctmid = Session::get('khach_hang_dn')->id)}}">
                        <i class="glyphicon glyphicon-th-large"></i>
                        Xem đơn hàng
                    </a>
                    @else
                    <!--xử lí ô thông tin khách hàng -->
                    <a href="{{route('dangnhap')}}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                    @endif
                </div>

                <!--xử lí ô đăng kí-->
                @if(Session::has('khach_hang_dn') == null)
                <div class="col-lg-3 col-md-3">

                    <a href="{{route('dangki')}}" class="login-panel"><i class="fa fa-user"></i>Đăng kí</a>
                </div>
                @else
                <!--hiện thị tên khách hàng-->
                <div class="col-lg-3 col-md-3">
                    <div class="menu1 xt-ct-menu">
                        <div class="xtlab-ctmenu-item"><i class="glyphicon glyphicon-user"></i> {{(Session::get('khach_hang_dn')->name)}} <i class="glyphicon glyphicon-chevron-down"></i></div>
                        <div class="xtlab-ctmenu-sub">
                            <a href="{{URL::to('show_info/'.$Ctmid = Session::get('khach_hang_dn')->id)}}"><i class="fa fa-user"></i> Thông tin cá nhân</a>
                            <a href="{{route('dangxuat')}}"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a>
                        </div>
                    </div>
                </div>

                <!--thêm ô đơn hàng-->
                <!-- <a href="" class="login-panel"><i class=""></i>đơn hàng</a> -->

                @endif





                <!--Gio hang-->
                <div class="col-lg-1 text-right col-md-1">
                    <ul class="nav-right">
                        <li class="cart-icon"><a href="{{url('/List-Cart')}}">
                                <i class="icon_bag_alt"></i>
                                @if(Session::has('Cart') != null)
                                <span id="total-quanty-show">{{Session::get('Cart')->totalQuanty}}</span>
                                @else
                                <span id="total-quanty-show">0</span>
                                @endif
                            </a>

                            <!--Gio hang-->
                            <div class="cart-hover">
                                <div id="change-item-cart">
                                    @if(Session::has("Cart") != null)
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach(Session::get("Cart")->products as $item)
                                                <tr>
                                                    <td class="si-pic"><img src="public/imgsp/{{$item['productInfo']->images}}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            @if($item['productInfo']->giagiam == 0)
                                                            <p>{{number_format( $item['productInfo']->giagoc)}}₫ x {{$item['quanty']}}</p>
                                                            @else
                                                            <p>{{number_format( $item['productInfo']->giagiam)}}₫ x {{$item['quanty']}}</p>
                                                            @endif
                                                            <h6>{{\Illuminate\Support\Str::limit(strtolower($item['productInfo']->name), 15,' ...') }}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close" data-id="{{($item['productInfo']->id)}}"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>{{number_format( Session::get("Cart")->totalPrice)}}₫</h5>
                                        <input hidden id="total-quanty-cart" type="number" value="{{(Session::get('Cart')->totalQuanty)}}">
                                    </div>
                                    @endif
                                    <div class="select-button">
                                        @if(Session::has('Cart') != null)
                                        <a href="{{ url('/List-Cart') }}" class="primary-btn view-card">Xem giỏ hàng</a>
                                        @else
                                        <a href="#" class="primary-btn checkout-btn">Chưa có sản phẩm trong giỏ hàng</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- End Gio hang-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-item">


        <div class="container">

            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <a href="{{route('sanpham')}}" style="color:aliceblue"><span>Sản phẩm</span></a>
                    <ul class="depart-hover">
                        @foreach($loai_sp as $loai)
                        <li><a href="{{route('loai_sp',$loai->id)}}">{{$loai->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="{{route('home')}}">Trang Chủ</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="{{URL::to('/gioi-thieu')}}">Giới thiệu</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>

    </div>
    </div>


</header>