<!DOCTYPE HTML>
<html lang = "vi">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <meta name="generator" content="enzi.co.jp">
        <meta name="format-detection" content="telephone=no">
        <meta property="fb:app_id" content="{{ (!empty($contact)?$contact->fb_app_id:"") }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:image" content="@yield('seo_image')" >
        <meta property="og:description" content="@yield('seo_description')" >
        <meta property="og:url" content="@yield('seo_url')">
        <meta property="og:site_name" content="{{ (!empty($contact)?$contact->seo_title:"") }}">
        <link rel="shortcut icon" href="{{url('public/home/images/favicon.ico')}}">

        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/font-awesome.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/weather-icons.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/dat-menu.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/main-stylesheet.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/ot-lightbox.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/shortcodes.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/responsive.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/mystyle.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/demo-settings.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/home/css/lienhe.css')}}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
        <script src="https://apis.google.com/js/platform.js" async defer>  {lang: 'vi'}</script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <!--[if lte IE 8]>
<link type="text/css" rel="stylesheet" href="css/ie-ancient.css">
<![endif]-->
        <!-- END head -->
    </head>

    <body class="ot-menu-will-follow">

        <!-- BEGIN .header -->
        <header class="header">
            <!-- BEGIN .top-menu -->
            <div class="top-menu">
                <div class="boxed active">
                    <div class="wrapper">
                        <nav class="top-menu-soc right">
                            <ul class="top-menu-lists">
                                <li class="search-block-wrapper">
                                    <div class="header-main-search">
                                        <div class="search-block">
                                            <form action="{{ url('/search') }}">
                                                <input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm..">
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <!--                                    ドロップダウンテスト用-->

<!--
                                <li id="home_login" class="btn-myaccount dropdown hover"><a class="myaccount" href="">Hi {{Session::get('logined_cusfullname')}}</a>
                                    <ul id="home_logout" class="dropdown-menu">
                                        <li><a href="{{ url('my-profile') }}">My profile setting</a></li>
                                        <li><a href="{{ url('logout') }}">Logout</a></li>
                                        <li><a href="">test</a></li>
                                    </ul>
                                </li>
-->

                                @if (Session::get('logined_cus') == 1)
                                <li id="home_login" class="btn-account dropdown hover"><a class="myaccount" href="">Hi {{Session::get('logined_cusfullname')}}</a>
                                    <ul id="home_logout" class="dropdown-menu">
                                        <li><a href="{{ url('my-profile') }}">My profile setting</a></li>
                                        <li><a href="{{ url('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                <li class="btn-login"><a class="myaccount" href="{{ url('login') }}">Login</a></li>
                                <li class="btn-register"><a href="{{ url('/register') }}" target="_blank" class="hover-color-google-plus">Register</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- END .top-menu -->
            </div>
            <!-- BEGIN .header-logo -->
            <div class="header-logo">
                <div class="boxed active">
                    <div class="wrapper">
                        <h1 class="logo">
                            <a href="{{url('')}}"><img src="{{ url('/public/home/images/logo2.png')}}" alt="{{$contact->nameco}}"></a>
                        </h1>
                    </div>
                </div>
                <!-- END .header-logo -->
            </div>

            <!-- BEGIN .global-nav -->
            <div class="global-nav">
                <div class="global-nav-inner">
                    <div class="boxed active">
                        <div class="wrapper">
                            <nav class="nav">
                                <ul class="nav-lists load-responsive" rel="DANH MỤC TIN">
                                    <li><a href="{{url('')}}">TRANG CHỦ</a></li>
                                    <li><a href="{{url('')}}"><span>Giới thiệu</span></a>
                                        <ul class="sub-nav-lists">
                                            <li><a href="{{url('gioi-thieu')}}">Giới thiệu chung</a></li>
                                            <li><a href="{{url('hinh-thanh')}}">Hình thành và phát triển</a></li>
                                            <li><a href="{{url('linh-vuc')}}">Lĩnh vực hoạt động</a></li>
                                        </ul>
                                    </li>
                                    @foreach($modnews as $key => $itemmod)
                                    <li><a href="{{ url('loai-tin').'/'.$itemmod->slug }}"><span>{{$itemmod->modname}}</span></a>
                                        <ul class="sub-nav-lists">
                                            @foreach($itemmod->listnews as $itemlist)
                                            <li><a href="{{ url('loai-tin').'/'.$itemlist->slug }}">{{$itemlist->listname}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                    <li><a href="{{url('lien-he')}}">Liên hệ</a>
                                        <ul class="sub-nav-lists"></ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            @if (Session::get('logined_cus') != 1)
            <div class="no-information">
                <div class="boxed active">
                    <div class="wrapper">
                        <p class="noinfo-text">
                            <span class="nowrap">Bạn nên đăng ký thông tin cá</span> <span class="nowrap">nhân để chúng tôi có</span> <span class="nowrap">thể chọn ra công việc</span> <span class="nowrap">tốt nhất phù hợp với bạn.</span> <span class="nowrap">Chưa có tài khoản, đăng ký tại</span><span class="btn-noinfo nowrap"><a href="{{ url('/register') }}" style="color: #81F7F3">ĐÂY</a></span>
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </header>

        <!-- BEGIN .content -->
        <section class="content">
            @yield('content')
        </section>

        <!-- BEGIN .footer -->
        <footer class="footer">
            <div class="boxed active">
                <div class="wrapper">
                    <!-- BEGIN .footer-content -->
                    <div class="footer-contents">
                        <div class="company-message">
                            {!! $contact->slogan_intro !!}
<!--
                            <div class="share-items">
                                <div class="fb-share-button share-item-button"
                                     data-href="{{url()->current()}}"
                                     data-mobile_iframe="true"
                                     data-layout="button">
                                </div>
                                <div class="g-plus share-item-button" data-action="share" data-annotation="bubble" data-height="24" data-href="{{url()->current()}}"></div>
                            </div>
-->
                        </div>
                        <div class="company-info">
                            <a href="{{url('')}}" class="footer-logo"><img src="{{ url('/public/home/images/logo2.png')}}" alt="{{$contact->nameco}}"></a>
                            <p class="company-text">
                                Cơ sở 1: Đà Nẵng<br>
                                Điện thoại: 375 458 698 555<br>
                                E-mail: info@enzi.co.jp
                            </p>
                            <div class="share-items">
                                <div class="fb-share-button share-item-button"
                                     data-href="{{url()->current()}}"
                                     data-mobile_iframe="true"
                                     data-layout="button">
                                </div>
                                <div class="g-plus share-item-button" data-action="share" data-annotation="bubble" data-height="24" data-href="{{url()->current()}}"></div>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <p>&copy; <?php echo date("Y"); ?> <a href="{{url('')}}">{{$contact->nameco}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- BEGIN .back_top -->
        <div class="back_top" style="display: none;">
            <a href="#top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- BEGIN .popup_menu -->
        <div class="popup_menu visible-xs">
            <a href="#dat-menu" class="btn-popup" title="menu">
                <i class="fa fa-bars"></i>
                <span class="popup-text-menu">MENU</span>
            </a>
        </div>

        <!-- Scripts -->
        <script type="text/javascript" src="{{url('public/home/jscript/jquery-latest.min.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/modernizr.custom.50878.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/iscroll.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/dat-menu.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/theme-scripts.js')}}"></script>
        <script type="text/javascript" src="{{url('public/home/jscript/ot-lightbox.js')}}"></script>
        <script type="text/javascript" src="{{url('public/js/jquery.sticky-kit.min.js')}}"></script>
        <script src="{{ asset('public/js/home/customer.js') }}"></script>
        <script async src="{{ asset('public/js/home/boxchat.js') }}"></script>
<!--
        <script>
            if ($(window).width() > 1050) {
                $(".sticky_column").stick_in_parent();
            }
        </script>
-->
    </body>
</html>
