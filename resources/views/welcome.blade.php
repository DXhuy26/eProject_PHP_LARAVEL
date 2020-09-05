<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <base href="{{asset('')}}">
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <style>
        /*form tim kiem*/
        .inner-header .advanced-search .input-group {
            max-width: 100%;
            height: 100%;
        }

        /*nut dang nhap dang ki*/
        .inner-header .login-panel {
            float: right;
            font-size: 15px;
            color: #252525;
            display: inline-block;
            padding-left: 20px;
            padding-top: 18px;
            padding-bottom: 15px;
        }

        .inner-header {
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 100%;
            margin: auto;
            height: 50%;
        }

        .pi-pic img {
            display: block;
            margin-bottom: 20px;
            line-height: 1.42857143;
            transition: box-shadow .25s;
        }

        .pi-pic:hover {
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
        }


        .pi-pic img {
            min-width: 100%;
            height: 350px;
            /*chinh khung hinh*/
            object-fit: cover;
            transition: all .25s ease;
        }

        .pi-text .section-title .product-price {
            font-size: 15px;
            font-weight: 200;
            color: black;
        }

        .pi-text .section-title .product-price-down {
            font-size: 15px;
            color: red;
        }

        .product-item .pi-pic ul li {
            list-style: none;
            display: inline-block;
            background: orange;
            width: 100%;
        }

        #change-item-cart table tbody tr td img {
            width: 70px;
        }

        .select-button-dg .view-sp {
            font-size: 20px;
            letter-spacing: 3px;
            display: block;
            text-align: center;
            background: #191919;
            color: #ffffff;
            padding: 15px 30px 12px;
            margin-bottom: 0px;
        }

        .select-button-dg {
            padding-top: 40px;
            margin-bottom: 50px;
        }

        /*css detail product*/
        .pi-pic-detail img {
            min-width: 50%;
            margin: auto;
            /*chinh khung hinh*/

        }

        .select-button-detail .view-card {
            font-size: 12px;
            letter-spacing: 2px;
            display: block;
            text-align: center;
            background: orange;
            color: black;
            padding: 15px 30px 12px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        /*dropdown menu */
        .xt-ct-menu {
            position: relative;
            display: inline-block;
        }

        .xtlab-ctmenu-item {
            padding: auto;
            font-size: 13px;
            border: none;
            cursor: pointer;
            font-weight: bold;

            color: #eb0000;
            display: inline-block;
            padding-left: 5px;
            padding-top: 21px;
            padding-bottom: 15px;

        }

        .xtlab-ctmenu-item:hover,
        .xtlab-ctmenu-item:focus {
            color: orange;
        }

        .col-md-2 a:hover,
        .col-md-2 a:focus {
            color: orange;
        }

        .xtlab-ctmenu-sub {
            display: none;
            position: absolute;
            background-color: rgba(27, 25, 25, 0.651);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .xtlab-ctmenu-sub a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .xtlab-ctmenu-sub a:hover {
            background-color: orange;
            border: none;

        }

        .login-form .group-input input{
            font-size: 15px;
        }
    </style>


</head>

<body>
    <!-- Header Section Begin -->

    @include('header')
    <!-- Header End -->


    <!-- Product Shop Section Begin -->
    @yield('content')
    <!-- Product Shop Section End -->

    <!-- Footer Section Begin -->
    @include('footer')
    <!-- Footer Section End -->

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

    <!--Ajax gio hang su dung jquery-->
    <script>
        function AddCart(id) {
            $.ajax({
                url: 'Add-Cart/' + id,
                type: 'GET',
            }).done(function(ketqua) {
                // console.log(ketqua);
                RenderCart(ketqua);
                alertify.success('Thêm thành công');
            });
        }
        $("#change-item-cart").on("click", ".si-close i", function() {
            //console.log($(this).data("id"));
            $.ajax({
                url: 'Delete-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function(ketqua) {
                //console.log(ketqua);
                RenderCart(ketqua);
                alertify.message('Xóa thành công');
            });
        });

        function RenderCart(ketqua) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(ketqua);
            $("#total-quanty-show").text($("#total-quanty-cart").val());
            //console.log($("#total-quanty-cart").val());
        }

        jQuery.fn.extend({
            setMenu: function() {
                return this.each(function() {
                    var containermenu = $(this);

                    var itemmenu = containermenu.find('.xtlab-ctmenu-item');
                    itemmenu.click(function() {
                        var submenuitem = containermenu.find('.xtlab-ctmenu-sub');
                        submenuitem.slideToggle(500);

                    });

                    $(document).click(function(e) {
                        if (!containermenu.is(e.target) &&
                            containermenu.has(e.target).length === 0) {
                            var isopened =
                                containermenu.find('.xtlab-ctmenu-sub').css("display");

                            if (isopened == 'block') {
                                containermenu.find('.xtlab-ctmenu-sub').slideToggle(500);
                            }
                        }
                    });



                });
            },

        });


        $('.xt-ct-menu').setMenu();
    </script>
</body>

</html>