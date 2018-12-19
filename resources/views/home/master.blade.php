<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "vi">
	<!-- BEGIN head -->
	<head>
		<title>@yield('title')</title> 
		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
		<meta name="generator" content="nt7solution.com">
	    <meta property="fb:app_id" content="{{ (!empty($contact)?$contact->fb_app_id:"") }}" /> 
	    <meta property="og:type" content="article" /> 
	    <meta property="og:title" content="@yield('title')" />
	    <meta property="og:image" content="@yield('seo_image')" >
	    <meta property="og:description" content="@yield('seo_description')" >
	    <meta property="og:url" content="@yield('seo_url')" />
	    <meta property="og:site_name" content="{{ (!empty($contact)?$contact->seo_title:"") }}" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url('public/home/images/favicon.png')}}" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/reset.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/font-awesome.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/weather-icons.min.css')}}" />
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/dat-menu.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/main-stylesheet.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/ot-lightbox.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/shortcodes.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/responsive.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/mystyle.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/demo-settings.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/style.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/lienhe.css')}}" />
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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1717807391847359";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- BEGIN .boxed -->
		<div class="boxed active ">
			
			<!-- BEGIN .header -->
			<header class="header">	
				<!-- BEGIN .top-menu -->
				<div class="top-menu">
				
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<nav class="top-menu-soc right">
							<ul>
								<!-- <li><a href="#" target="_blank" class="hover-color-facebook"><i class="fa fa-facebook"></i></a></li> -->
								<!-- <li><a href="{{ url('/login') }}" target="_blank" class="hover-color-twitter">Login</a></li> -->
								@if (Session::get('logined_cus') == 1)
                                <li id="home_login" class="dropdown hover"><a class="myaccount" href="">Hi {{Session::get('logined_cusfullname')}}</a>
                                    <ul id="home_logout" class="dropdown-menu">
                                    	<li><a href="{{ url('my-profile') }}">My profile setting</a></li>
                                        <li><a href="{{ url('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a class="myaccount" href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}" target="_blank" class="hover-color-google-plus">Register</a></li>
                                @endif
							</ul>
						</nav>
						<nav class="top-menu-list">
							<ul class="load-responsive" rel="Top Menu">
								<li><a href="{{url('')}}"><img src="{{url('public/home/'.$contact->logo)}}" alt="No logo" style="height: 25px"></a></li>
								<li>
									<div class="header-main-search">
										<div class="search-block">
											<form action="{{ url('/search') }}">
												<input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm.." />
											</form>
										</div>
									</div>
								</li>
							</ul>
						</nav>

					<!-- END .wrapper -->
					</div>

				<!-- END .top-menu -->
				</div>		
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<!-- BEGIN .header-main -->
					<div class="header-main">
						<style type="text/css" media="screen">
							#top_text {
       								color: #00918e;
								    text-shadow: 1px 1px #00918e, 2px 2px #FF8040, 3px 3px #FF8040;
								    font: Bold 30px Sketch_Block;
								    -webkit-transition: all 0.12s ease-out;/*chrome & safari*/
								    -moz-transition:all 0.12s ease-out;/*firefox 3.7*/
								    -o-tramsition:all 0.12s ease-out /*Opera*/
								    }
 
									#top_text:hover {
									    position:relative; top:-3px; left:-3px;
									    text-shadow:1px 1px #FF8040, 2px 2px #FF8040, 3px 3px #FF8040, 4px 4px #FF8040, 5px 5px #FF8040, 6px 6px #FF8040 
									}
						</style>
						<div class="header-main-logo">
							<a href="{{url('')}}"><img src="{{ url('/public/sky.jpg')}}" style="width: 25%;height: 10%" alt="No logo" /></a>
						</div>

						<div class="header-main-weather">
							<div class="weather-block">
								<a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
							</div>
						</div>

					<!-- END .header-main -->
					</div>
					@if (Session::get('logined_cus') != 1)
						<div class="noInformation">
						  	Bạn nên đăng ký thông tin cá nhân để chúng tôi có thể chọn ra công việc tốt nhất phù hợp với bạn. Chưa có tài khoản, đăng ký tại <a href="{{ url('/register') }}" style="color: #81F7F3">ĐÂY</a>
						</div>
					@endif
					<nav class="main-menu">
						<a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i>MENU</a>
						<div class="main-menu-placeholder">
							<div class="main-menu-wrapper">
								<ul class="top-main-menu load-responsive" rel="DANH MỤC TIN">
									<li style="padding-top: 2px;"><a href="{{url('')}}">TRANG CHỦ</a></li>
									<li><a href="{{url('')}}"><span>Giới thiệu</span></a>
										<ul class="sub-menu">
											<li><a href="{{url('gioi-thieu')}}">Giới thiệu chung</a></li>
											<li><a href="{{url('hinh-thanh')}}">Hình thành và phát triển</a></li>
											<li><a href="{{url('linh-vuc')}}">Lĩnh vực hoạt động</a></li>
										</ul>
									</li>
								@foreach($modnews as $key => $itemmod) 
									<li><a href="{{ url('loai-tin').'/'.$itemmod->slug }}"><span>{{$itemmod->modname}}</span></a>
										<ul class="sub-menu">
										@foreach($itemmod->listnews as $itemlist) 
											<li><a href="{{ url('loai-tin').'/'.$itemlist->slug }}">{{$itemlist->listname}}</a></li>
										@endforeach
										</ul>
									</li>
								@endforeach	
									<li style="padding-top: 2px;"><a href="{{url('lien-he')}}">Liên hệ</a>
										<ul class="sub-menu"></ul>
									</li>						
								</ul>
							</div>
						</div>
					</nav>
				<!-- END .wrapper -->
				</div>
				
			<!-- END .header -->
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
			@yield('content')				
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
			<footer class="footer">	
				<!-- BEGIN .footer-copyright -->
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p>{!! $contact->slogan_intro !!}</p>					
						<p>&copy; Copyright <strong>{{$contact->nameco}}</strong> <?php echo date("Y"); ?>, <strong><a href="https://nt7solution.com/" target="_blank">{{$contact->website}}</a></strong></p>
					
					<!-- END .wrapper -->
					</div>
				<!-- END .footer-copyright -->
				</div>
				
			<!-- END .footer -->
			</footer>
			<div class="back_top" style="display: none;">
				<a href="#top" class="right" style="color: #fff;"><i class="fa fa-chevron-up"></i><strong></strong></a>
			</div>
			<div class="popup_menu visible-xs">
				<a href="#dat-menu"  title="Danh mục tin"><i class="fa fa-bars"></i></a>
			</div>
			
		<!-- END .boxed -->
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
	<!-- END body -->
	<script>
		if ($(window).width() >700) {
        	$(".sticky_column").stick_in_parent();  
    	}
	</script>
	</body>
<!-- END html -->
</html>