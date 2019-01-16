<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "vi">
    <!-- BEGIN head -->

    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
        <meta name="generator" content="enzi.co.jp">
        <meta property="fb:app_id" content="<?php echo e((!empty($contact)?$contact->fb_app_id:"")); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
        <meta property="og:image" content="<?php echo $__env->yieldContent('seo_image'); ?>" >
        <meta property="og:description" content="<?php echo $__env->yieldContent('seo_description'); ?>" >
        <meta property="og:url" content="<?php echo $__env->yieldContent('seo_url'); ?>" />
        <meta property="og:site_name" content="<?php echo e((!empty($contact)?$contact->seo_title:"")); ?>" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo e(url('public/home/images/favicon.ico')); ?>" />

        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/reset.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/font-awesome.min.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/weather-icons.min.css')); ?>" />
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/bootstrap.min.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/dat-menu.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/main-stylesheet.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/ot-lightbox.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/shortcodes.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/responsive.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/mystyle.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/demo-settings.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/style.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(url('public/home/css/lienhe.css')); ?>" />

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
<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
<![endif]-->
        <!-- END head -->
    </head>

    <!-- BEGIN body -->
    <!-- <body> -->
    <body class="ot-menu-will-follow">

        <!-- BEGIN .header -->
        <header class="header">
            <!-- BEGIN .top-menu -->
            <div class="top-menu">
                <div class="boxed active">
                    <div class="wrapper">
                        <nav class="top-menu-soc right">
                            <ul class="top-menu-lists">
                                <!-- <li><a href="#" target="_blank" class="hover-color-facebook"><i class="fa fa-facebook"></i></a></li> -->
                                <!-- <li><a href="<?php echo e(url('/login')); ?>" target="_blank" class="hover-color-twitter">Login</a></li> -->
                                <li class="search-block-wrapper">
                                    <div class="header-main-search">
                                        <div class="search-block">
                                            <form action="<?php echo e(url('/search')); ?>">
                                                <input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm.." />
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <!--                                    ドロップダウンテスト用-->

                                <li id="home_login" class="btn-myaccount dropdown hover"><a class="myaccount" href="">Hi <?php echo e(Session::get('logined_cusfullname')); ?></a>
                                    <ul id="home_logout" class="dropdown-menu">
                                        <li><a href="<?php echo e(url('my-profile')); ?>">My profile setting</a></li>
                                        <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>
                                        <li><a href="">test</a></li>
                                    </ul>
                                </li>

                                <?php if(Session::get('logined_cus') == 1): ?>
                                <li id="home_login" class="btn-account dropdown hover"><a class="myaccount" href="">Hi <?php echo e(Session::get('logined_cusfullname')); ?></a>
                                    <ul id="home_logout" class="dropdown-menu">
                                        <li><a href="<?php echo e(url('my-profile')); ?>">My profile setting</a></li>
                                        <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>
                                    </ul>
                                </li>
                                <?php else: ?>
                                <li class="btn-login"><a class="myaccount" href="<?php echo e(url('login')); ?>">Login</a></li>
                                <li class="btn-register"><a href="<?php echo e(url('/register')); ?>" target="_blank" class="hover-color-google-plus">Register</a></li>
                                <?php endif; ?>
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
                            <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('/public/logo2.png')); ?>" alt="ENZI human resources" /></a>
                        </h1>
                    </div>
                </div>
                <!-- END .header-logo -->
            </div>

<!--
            <?php if(Session::get('logined_cus') != 1): ?>
            <div class="no-information">
                <p class="noinfo-text">
                    <span class="nowrap">Bạn nên đăng ký thông tin cá nhân để chúng tôi có</span> <span class="nowrap">thể chọn ra công việc tốt nhất phù hợp với bạn.</span> <span class="nowrap">Chưa có tài khoản, đăng ký tại</span><span class="btn-noinfo nowrap"><a href="<?php echo e(url('/register')); ?>" style="color: #81F7F3">ĐÂY</a></span>
                </p>
            </div>
            <?php endif; ?>
-->

            <!-- BEGIN .global-nav -->
            <div class="global-nav">
                <div class="global-nav-inner">
                    <div class="boxed active">
                        <div class="wrapper">
                            <nav class="nav">
                                <ul class="nav-lists load-responsive" rel="DANH MỤC TIN">
                                    <li><a href="<?php echo e(url('')); ?>">TRANG CHỦ</a></li>
                                    <li><a href="<?php echo e(url('')); ?>"><span>Giới thiệu</span></a>
                                        <ul class="sub-nav-lists">
                                            <li><a href="<?php echo e(url('gioi-thieu')); ?>">Giới thiệu chung</a></li>
                                            <li><a href="<?php echo e(url('hinh-thanh')); ?>">Hình thành và phát triển</a></li>
                                            <li><a href="<?php echo e(url('linh-vuc')); ?>">Lĩnh vực hoạt động</a></li>
                                        </ul>
                                    </li>
                                    <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $itemmod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('loai-tin').'/'.$itemmod->slug); ?>"><span><?php echo e($itemmod->modname); ?></span></a>
                                        <ul class="sub-nav-lists">
                                            <?php $__currentLoopData = $itemmod->listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(url('loai-tin').'/'.$itemlist->slug); ?>"><?php echo e($itemlist->listname); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('lien-he')); ?>">Liên hệ</a>
                                        <ul class="sub-nav-lists"></ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END .global-nav -->
            </div>
            <!-- END .header -->
        </header>



        <!-- BEGIN .content -->
        <section class="content">
            <div class="boxed active">
                <div class="wrapper">

                    <?php echo $__env->yieldContent('content'); ?>

                </div>
            </div>
        <!-- END .content -->
        </section>

        <!-- BEGIN .footer -->
        <footer class="footer">
            <div class="boxed active">
                <div class="wrapper">
                    <!-- BEGIN .footer-copyright -->
                    <div class="footer-copyright">
                        <p><?php echo $contact->slogan_intro; ?></p>
                        <p>&copy; Copyright <strong><?php echo e($contact->nameco); ?></strong> <?php echo date("Y"); ?>, <strong><a href="https://nt7solution.com/" target="_blank"><?php echo e($contact->website); ?></a></strong></p>
                    <!-- END .footer-copyright -->
                    </div>
                </div>
            </div>
        <!-- END .footer -->
        </footer>

        <div class="back_top" style="display: none;">
            <a href="#top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div class="popup_menu visible-xs">
            <a href="#dat-menu" class="btn-popup" title="menu">
                <i class="fa fa-bars"></i>
                <span class="popup-text-menu">MENU</span>
            </a>
        </div>


        <!-- END .boxed -->
        <!--        </div>-->

        <!-- Scripts -->
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/jquery-latest.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/modernizr.custom.50878.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/iscroll.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/dat-menu.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/theme-scripts.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/home/jscript/ot-lightbox.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('public/js/jquery.sticky-kit.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/home/customer.js')); ?>"></script>
        <script async src="<?php echo e(asset('public/js/home/boxchat.js')); ?>"></script>
        <!-- END body -->
        <script>
            if ($(window).width() >700) {
                $(".sticky_column").stick_in_parent();
            }
        </script>
        
    </body>
    <!-- END html -->
</html>
