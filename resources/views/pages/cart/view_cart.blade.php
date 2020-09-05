<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <style>
        .cart-table table tr td.close-td-reload {
            font-size: 20px;
            color: #252525;
            width: 8%;
        }

        .cart-table table tr td img {
            width: 120px;
        }

        .container .select-button .view-card {
            font-size: 12px;
            letter-spacing: 2px;
            display: block;
            text-align: center;
            background: #191919;
            color: #ffffff;
            padding: 15px 30px 12px;
            margin-bottom: 10px;
        }

        .container .select-button .view-card a:hover {
            background: #ff0000;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="" style="font-size: 25px;"><i class="fa fa-star"></i> Giỏ hàng</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="btn btn-warning">
            <a href="{{url('/')}}" style="color: black;">Quay lại trang mua hàng</a>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th style="width: 100px;">Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has("Cart") != null)
                                @foreach(Session::get("Cart")->products as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="public/imgsp/{{$item['productInfo']->images}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h6>{{$item['productInfo']->name}}</h6>
                                    </td>
                                    @if($item['productInfo']->giagiam == 0)
                                    <td class="p-price first-row">{{number_format($item['productInfo']->giagoc)}}₫</td>
                                    @else
                                    <td class="p-price first-row">{{number_format($item['productInfo']->giagiam)}}₫</td>
                                    @endif
                                    <!-- <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input id="quanty-item" type="number" value="{{$item['quanty']}}">
                                            </div>
                                        </div>
                                    </td> -->
                                    <td class="first-row">
                                        <input id="quanty-item" type="number" value="{{ $item['quanty'] }}" class="form-control" min="1" max="10" />
                                    </td>
                                    @if($item['pricedown'] == 0)
                                    <td class="total-price first-row">{{number_format( $item['price'])}}₫</td>
                                    @else
                                    <td class="total-price first-row">{{number_format( $item['pricedown'])}}₫</td>
                                    @endif
                                    <td class="close-td-reload first-row"><i class="ti-reload btn btn-outline-warning" data-id="{{($item['productInfo']->id)}}"></i></td>
                                    <td class="close-td first-row"><i class="ti-close btn btn-outline-danger" data-id="{{($item['productInfo']->id)}}"></i></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                @if(Session::has("Cart") != null)
                                <ul>
                                    <li class="subtotal">Tổng số lượng <span>{{number_format(Session::get("Cart")->totalQuanty)}}</span></li>

                                    <li class="cart-total">Thành tiền <span>{{number_format( Session::get("Cart")->totalPrice)}}₫</span></li>
                                </ul>

                                @if(Session::has("khach_hang_dn"))
                                <a href="{{URL::to('/thanh-toan')}}" class="proceed-btn">Mua hàng</a>
                                @else
                                <a href="{{route('dangnhap')}}" class="proceed-btn">Đăng nhập để mua hàng</a>
                                @endif

                                @endif
                            </div>
                        </div>
                    </div>
                    @if(Session::has("Cart") == null)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="select-button">
                                <a href="" class="primary-btn view-card">Giỏ hàng trống</a>
                            </div>
                        </div>

                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->



    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--alert-->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


    <script>
        $("#list-cart").on("click", ".close-td i", function() {
            console.log($(this).data("id"));
            $.ajax({
                url: 'Delete-List-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function(ketqua) {
                //console.log(ketqua);
                $("#list-cart").empty();
                $("#list-cart").html(ketqua);
                alertify.success('Xóa thành công');
            });
        });

        $("#list-cart").on("click", ".close-td-reload i", function(e) {

            e.preventDefault();

            var ele = $(this);

            $.ajax({

                url: "{{url('Update-List-Item-Cart') }}",
                method: "get",
                data: {
                    id: ele.data("id"),
                    quanty: ele.parents("tr").find("#quanty-item").val()
                },
                success: function(response) {
                    $("#list-cart").empty();
                    $("#list-cart").html(response);
                    //window.location.reload();
                }
            });
        });
    </script>
</body>

</html>