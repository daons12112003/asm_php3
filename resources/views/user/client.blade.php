<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


<!-- Mirrored from htmldemo.net/bstore/bstore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 12:20:34 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bstore - Fashion Modern HTML5 eCommerce Website Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">


	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- CSS
	============================================ -->

	<!-- Icon Font CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/css/jquery-ui-slider.css">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/nivo-slider.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/ie.css">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->

	<!-- HEADER AREA START -->
	<header class="hedaer-area">

		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-md-6">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>Bstore</span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>USD</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>English</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->

					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-md-6">
						<div class="header-right-menu ">
							<nav>
								<ul class="list-inline">
									@if(session('user')) 
									<span  class="list-inline-item" style="color: white; " >Xin chào :</span>
									<li class="list-inline-item"><a href="my-account.html">{{session('user')->name}}</a></li>
									{{-- <li class="active"><a href="my-account.html">{{session('user')->name}}</a>
										<ul class="home-menu">
											<li><a href="index.html">Thông tin cá nhân</a></li>
											<li><a href="{{route('logout')}}">Đăng xuất</a></li>
										</ul>									
									</li> --}}
									{{-- <li>
										<a href="my-account.html">{{session('user')->name}}</a>
										<ul class="home-menu">
											<li><a href="{{route('logout')}}">Đăng xuất</a></li>

										</ul>
									</li> --}}
									<li class="list-inline-item"><a href="cart.html">My Cart</a></li>
								
										<li  class="list-inline-item"><a href="{{route('logout')}}">Logout</a></li>
									@else
									<li class="list-inline-item"><a href="/login">Sign in</a></li>
									@endif

									
								</ul>
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->

		<!-- HEADER-MIDDLE START -->
		<div class="header-middle d-none d-lg-block">
			<div class="container">
				<div class="header-middle-wraper">

					<!-- LOGO START -->
					<div class="logo">
						<a href="{{route('home')}}"><img src="assets/images/logo.webp" alt="bstore logo" /></a>
					</div>
					<!-- LOGO END -->

					<!-- CATEGORYS-PRODUCT-SEARCH START -->
					<div class="categorys-product-search">
						<form action="#" method="get" class="search-form-cat">
							<div class="search-product form-group">
								<select name="catsearch" class="cat-search">
									<option value="">Categories</option>
									<option value="2">--Women</option>
									<option value="3">---T-Shirts</option>
									<option value="4">--Men</option>
									<option value="5">----Shoose</option>
									<option value="6">--Dress</option>
									<option value="7">----Tops</option>
									<option value="8">---Casual</option>
									<option value="9">--Evening</option>
									<option value="10">--Summer</option>
									<option value="11">---sports</option>
									<option value="12">--day</option>
									<option value="13">--evening</option>
									<option value="14">-----Blouse</option>
									<option value="15">--handba</option>
									<option value="16">--phone</option>
									<option value="17">-house</option>
									<option value="18">--Beauty</option>
									<option value="19">--health</option>
									<option value="20">---clothing</option>
									<option value="21">---kids</option>
									<option value="22">--Dresse</option>
									<option value="22">---Casual</option>
									<option value="23">--day</option>
									<option value="24">--evening</option>
									<option value="24">---Blouse</option>
									<option value="25">-handb</option>
									<option value="66">--phone</option>
									<option value="27">---house</option>
								</select>
								<input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
								<button class="search-button" value="Search" name="s" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>
					<!-- CATEGORYS-PRODUCT-SEARCH END -->

					<!-- HEADER-RIGHT-CALLUS START -->
					<div class="header-right-callus">
						<h3>call us free</h3>
						<span>0123-456-789</span>
					</div>
					<!-- HEADER-RIGHT-CALLUS END -->

				</div>
			</div>
		</div>
		<!-- HEADER-MIDDLE END -->

		<!-- MAIN-MENU-AREA START -->
		<div class="main-menu-area d-none d-lg-block">
			<div class="container">
				<div class="row">

					<!-- MAINMENU START -->
					<div class="col-lg-9">
						<div class="mainmenu">
							<nav>
								<ul>
									<li class="active"><a href="{{route('home')}}">Home</a>
									</li>
									
									<li>
										<a href="">Danh mục</a>
										<ul class="home-menu">
											@foreach($categorys as $ct)
											<li><a href="{{route('home',['category_id' => $ct->id])}}">{{$ct->name}}</a></li>
											@endforeach
										</ul>
									</li>
									{{-- <li>
										<a href="shop-gird.html">clothing</a>
										<ul class="mega-menu row">
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">new product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Watch</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="shop-gird.html">Tops</a>
										<ul class="mega-menu row">
											<li class="col-4">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-4">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-4">
												<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">popular product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="shop-gird.html">T-shirts</a>
										<ul class="mega-menu row">
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">new product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Watch</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
											<li class="col-6">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</li>
										</ul>
									</li> --}}
									<li>
										<a href="#">Page</a>
										<ul class="home-menu">
											<li><a href="404.html">Error 404</a></li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout-signin.html">Checkout Sign in</a></li>
											<li><a href="checkout-address.html">Checkout Address</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="registration.html">Registration</a></li>
											<li><a href="shop-gird.html">Shop Grid</a></li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li><a href="single-product.html">Single Product</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
										</ul>
									</li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->

					<!-- SHOPPING-CART START -->
					<div class="col-lg-3">
						<div class="shopping-cart-out d-flex justify-content-end">
							<div class="shopping-cart">
								<a class="shop-link" href="{{route('cart_index')}}" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>My Cart</b>
									<span class="ajax-cart-quantity">>></span>
								</a>

								
							</div>
						</div>
					</div>
					<!-- SHOPPING-CART END -->

				</div>
			</div>
		</div>
		<!-- MAIN-MENU-AREA END -->

		<!-- Mobile Header START -->
		<div class="mobile-header d-lg-none">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-4">
						<div class="header-toggle">
							<button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
					<div class="col-4">
						<div class="logo">
							<a href="index.html"><img src="assets/images/logo.webp" alt="bstore logo" /></a>
						</div>
					</div>
					<div class="col-4">
						<div class="mobile-shopping-cart">
							<a class="shop-link" href="cart.html" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>
								<span class="cart-quantity">2</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Header END -->

	</header>
	<!-- HEADER AREA End -->

	<!-- Offcanvas START -->
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">
		<div class="offcanvas-header">
			<div class="offcanvas-logo">
				<a href="#"><img src="assets/images/logo.webp" alt=""></a>
			</div>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		</div>
		<div class="offcanvas-body">
			<nav class="canvas-menu">
				<ul>
					<li class="active"><a href="index.html">Home</a>
						<ul class="home-menu">
							<li><a href="index.html">Home variation 1</a></li>
							<li><a href="index-2.html">Home variation 2</a></li>
						</ul>
					</li>
					<li>
						<a href="shop-gird.html">Women</a>
						<ul class="mega-menu">
							<li>
								<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Watch</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="shop-gird.html">Men</a>
						<ul class="home-menu">
							<li><a href="shop-gird.html">T-shirts</a></li>
							<li><a href="shop-gird.html">clothing</a></li>
							<li><a href="shop-gird.html">Delivery</a></li>
						</ul>
					</li>
					<li>
						<a href="shop-gird.html">clothing</a>
						<ul class="mega-menu">
							<li>
								<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">new product</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Watch</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="shop-gird.html">Tops</a>
						<ul class="mega-menu">
							<li>
								<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">popular product</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="shop-gird.html">T-shirts</a>
						<ul class="mega-menu">
							<li>
								<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">new product</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Watch</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
							<li>
								<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
								<ul class="home-menu">
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">Delivery</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Page</a>
						<ul class="home-menu">
							<li><a href="404.html">Error 404</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="cart.html">Cart</a></li>
							<li><a href="checkout-signin.html">Checkout Sign in</a></li>
							<li><a href="checkout-address.html">Checkout Address</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
							<li><a href="my-account.html">My Account</a></li>
							<li><a href="registration.html">Registration</a></li>
							<li><a href="shop-gird.html">Shop Grid</a></li>
							<li><a href="shop-list.html">Shop List</a></li>
							<li><a href="single-product.html">Single Product</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
						</ul>
					</li>
					<li><a href="about-us.html">About us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- Offcanvas End -->

	<!-- MAIN-CONTENT-SECTION START -->
	@include('admin.errors')
	@yield('content')
	<!-- BRAND-CLIENT-AREA START -->
<section class="brand-client-area">
	<div class="container">
		<!-- BRAND-CLIENT-ROW START -->
		<div class="brand-client-row">
			<div class="center-title-area">
				<h2 class="center-title">BRAND & CLIENTS</h2>
			</div>
			<div class="carousel-wrap">
				<!-- CLIENT-CAROUSEL START -->
				<div class="client-carousel owl-carousel">

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/1.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/2.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/3.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/4.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/5.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/1.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/3.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/2.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

					<!-- CLIENT-SINGLE START -->
					<div class="single-client">
						<a href="#">
							<img src="assets/images/brand/3.webp" alt="brand-client" />
						</a>
					</div>
					<!-- CLIENT-SINGLE END -->

				</div>
				<!-- CLIENT-CAROUSEL END -->
			</div>
		</div>
		<!-- BRAND-CLIENT-ROW END -->
	</div>
</section>
<!-- BRAND-CLIENT-AREA END -->

<!-- COMPANY-FACALITY START -->
<section class="company-facality">
	<div class="container">
		<div class="row g-4">
			<!-- SINGLE-FACALITY START -->
			<div class="col-lg-3 col-sm-6">
				<div class="single-facality">
					<div class="facality-icon">
						<i class="fa fa-rocket"></i>
					</div>
					<div class="facality-text">
						<h3 class="facality-heading-text">FREE SHIPPING</h3>
						<span>on order over $100</span>
					</div>
				</div>
			</div>
			<!-- SINGLE-FACALITY END -->
			<!-- SINGLE-FACALITY START -->
			<div class="col-lg-3 col-sm-6">
				<div class="single-facality">
					<div class="facality-icon">
						<i class="fa fa-umbrella"></i>
					</div>
					<div class="facality-text">
						<h3 class="facality-heading-text">24/7 SUPPORT</h3>
						<span>online consultations</span>
					</div>
				</div>
			</div>
			<!-- SINGLE-FACALITY END -->
			<!-- SINGLE-FACALITY START -->
			<div class="col-lg-3 col-sm-6">
				<div class="single-facality">
					<div class="facality-icon">
						<i class="fa fa-calendar"></i>
					</div>
					<div class="facality-text">
						<h3 class="facality-heading-text">DAILY UPDATES</h3>
						<span>Check out store for latest</span>
					</div>
				</div>
			</div>
			<!-- SINGLE-FACALITY END -->
			<!-- SINGLE-FACALITY START -->
			<div class="col-lg-3 col-sm-6">
				<div class="single-facality">
					<div class="facality-icon">
						<i class="fa fa-refresh"></i>
					</div>
					<div class="facality-text">
						<h3 class="facality-heading-text">30-DAY RETURNS</h3>
						<span>moneyback guarantee</span>
					</div>
				</div>
			</div>
			<!-- SINGLE-FACALITY END -->
		</div>
	</div>
</section>
<!-- COMPANY-FACALITY END -->
	<!-- FOOTER-TOP-AREA START -->
	<section class="footer-top-area">
		<div class="container">
			<div class="footer-top-container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<!-- FOOTER-TOP-LEFT START -->
						<div class="footer-top-left">
							<!-- NEWSLETTER-AREA START -->
							<div class="newsletter-area">
								<h2>Newsletter</h2>
								<p>Subscribe to our mailing list to receive updates on new arrivals, special offers and
									other discount information.</p>
								<form action="#">
									<div class="form-group newsletter-form-group">
										<input type="text" class="form-control newsletter-form" placeholder="Enter your e-mail">
										<input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
									</div>
								</form>
							</div>
							<!-- NEWSLETTER-AREA END -->
							<!-- ABOUT-US-AREA START -->
							<div class="about-us-area">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
									euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div>
							<!-- ABOUT-US-AREA END -->
							<!-- FLLOW-US-AREA START -->
							<div class="fllow-us-area">
								<h2>Follow us</h2>
								<ul class="flow-us-link">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
							<!-- FLLOW-US-AREA END -->
						</div>
						<!-- FOOTER-TOP-LEFT END -->
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<!-- FOOTER-TOP-RIGHT-1 START -->
						<div class="footer-top-right-1">
							<div class="row">
								<div class="col-lg-4">
									<!-- STATICBLOCK START -->
									<div class="staticblock">
										<h2>static block</h2>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industrys standard dummy text ever since the
											1500s<br />when an unknown printer took a galley of type and scrambled it to
											make a type specimen book. It has survived not only five centuries, but also
											the leap into electronic typesetting, remaining essentially unchanged.</p>
									</div>
									<!-- STATICBLOCK END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- STORE-INFORMATION START -->
									<div class="Store-Information">
										<h2>Store Information</h2>
										<ul>
											<li>
												<div class="info-lefticon">
													<i class="fa fa-map-marker"></i>
												</div>
												<div class="info-text">
													<p>Your address goes here.</p>
												</div>
											</li>
											<li>
												<div class="info-lefticon">
													<i class="fa fa-phone"></i>
												</div>
												<div class="info-text call-lh">
													<p>Call us now : 0123-456-789</p>
												</div>
											</li>
											<li>
												<div class="info-lefticon">
													<i class="fa fa-envelope-o"></i>
												</div>
												<div class="info-text">
													<p>Email : <a href="mailto:demo@example.com"><i class="fa fa-angle-double-right"></i>
															demo@example.com</a></p>
												</div>
											</li>
										</ul>
									</div>
									<!-- STORE-INFORMATION END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- GOOGLE-MAP-AREA START -->
									<div class="google-map-area">
										<div class="google-map">
											<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.693667617067!2d144.946279515845!3d-37.82064364221098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4cee0cec83%3A0xd019c5f69915a4a0!2sCollins%20St%2C%20West%20Melbourne%20VIC%203003%2C%20Australia!5e0!3m2!1sen!2sbd!4v1607512676761!5m2!1sen!2sbd">
											</iframe>
										</div>
									</div>
									<!-- GOOGLE-MAP-AREA END -->
								</div>
							</div>
						</div>
						<!-- FOOTER-TOP-RIGHT-1 END -->
						<div class="footer-top-right-2">
							<div class="row">
								<div class="col-md-4">
									<!-- FOTTER-MENU-WIDGET START -->
									<div class="fotter-menu-widget">
										<div class="single-f-widget">
											<h2>Categories</h2>
											<ul>
												<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
												<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
												<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
												<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
											</ul>
										</div>
									</div>
									<!-- FOTTER-MENU-WIDGET END -->
								</div>
								<div class="col-md-4">
									<!-- FOTTER-MENU-WIDGET START -->
									<div class="fotter-menu-widget">
										<div class="single-f-widget">
											<h2>Information</h2>
											<ul>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>Specials</a>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>New products</a>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>Best sellers</a>
												</li>
												<li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
											</ul>
										</div>
									</div>
									<!-- FOTTER-MENU-WIDGET END -->
								</div>
								<div class="col-md-4">
									<!-- FOTTER-MENU-WIDGET START -->
									<div class="fotter-menu-widget">
										<div class="single-f-widget">
											<h2>My account</h2>
											<ul>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>My orders</a>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>My credit
														slips</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>My addresses</a>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>My personal
														info</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right"></i>Sign out</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- FOTTER-MENU-WIDGET END -->
								</div>
								<div class="col-12">
									<!-- PAYMENT-METHOD START -->
									<div class="payment-method">
										<img class="img-responsive pull-right" src="assets/images/payment.webp" alt="payment-method" />
									</div>
									<!-- PAYMENT-METHOD END -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FOOTER-TOP-AREA END -->

	<!-- COPYRIGHT-AREA START -->
	<footer class="copyright-area">
		<div class="container">
			<div class="copy-right">
				<address>&copy; 2022 <span> Bstore </span> Made with <i class="fa fa-heart"></i> by <a href="https://hasthemes.com/">HasThemes</a></address>
			</div>
			<div class="scroll-to-top">
				<a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
			</div>
		</div>
	</footer>
	<!-- COPYRIGHT-AREA END -->





	<!-- JS
    ============================================ -->

	<!-- Modernizer & jQuery JS -->
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins JS -->
	<script src="assets/js/jquery.fancybox.js"></script>
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<script src="assets/js/jquery.meanmenu.js"></script>
	<script src="assets/js/jquery.nivo.slider.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jqueryui.js"></script>
	<script src="assets/js/wow.js"></script>

	<!-- Main JS -->
	<script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/bstore/bstore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 12:20:53 GMT -->

</html>