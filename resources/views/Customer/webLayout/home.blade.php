﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="shortcut icon" type="image/x-icon" href="images/time-logo.png">

  	<link href="{{ asset('webasset/fonts/fontawesome-free-5.10.1-web/css/all.css')}}" rel="stylesheet">
  	<link href="{{ asset('webasset/css/bootstrap.css')}}" rel="stylesheet" />
  	<link href="{{ asset('webasset/css/all.css')}}" rel="stylesheet" />
  	
    <link rel="stylesheet" href="{{ asset('webasset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('webasset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('webasset/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('webasset/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('webasset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('webasset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/style.css')}}">

  	<!-- Start Slider -->
  	<link rel="stylesheet" type="text/css" href="{{ asset('webasset/engine1/style.css')}}" />
  	<script type="text/javascript" src="{{ asset('webasset/engine1/jquery.js')}}"></script>
  	<!-- End Slider -->
	

  	<!-- Gallery section -->
  	<link rel="stylesheet" href="{{ asset('webasset/css/gallery-demo.css')}}">
  	<link rel="stylesheet" href="{{ asset('webasset/css/gallery-jquery.flipster.min.css')}}">
  	<link href="{{ asset('webasset/css/gallery-jquery.flipster.min.css')}}" rel="stylesheet" />
  	<link href="{{ asset('webasset/css/gallery-demo.css" rel="stylesheet')}}" />
	<!-- End Gallery section -->
  	
    <!--Start Category Menu-->
  	<style>
		  .catg{
			  background-color: #82ae46;
			  margin-bottom:0px;
		  }
		  .cat-menu{
			  position:absolute;
			  left:0px;
			  top:20%;
			  z-index:inherit;
		  }
		  .menu-container {
			  width: 100%;
			  margin: 0 auto;
			  padding: 20px 0;
		  }

		  .menu {
			  width: 80px;
			  font-family: Verdana, Geneva, sans-serif;
			  font-weight: 400;
			  font-size: 15px;
			  line-height: 15px;
			  position: relative;
			  padding: 0 0 0 0px;
			  margin: 0;
			  
		  }

			  .menu a, .menu a:link, .menu a:visited, .menu a:focus, span {
				  color: #fff;
				  text-decoration: none;
			  }

				  .menu a:hover {
					  color: #82ae46;
					  text-decoration: none;
				  }

			  .menu > li {
				  display: block;
				  text-align: center;
				  margin-left: -4px;
				  border-left: 1px solid rgba(255, 255, 255, 0.11);
				  box-shadow: -1px 0 0 rgba(0, 0, 0, 0.1);
			  }

				  .menu > li > a {
					  padding: 20px 18px;
					  display: block;
				  }

				  .menu > li:hover > a {
					  color: #82ae46;
				  }

				  .menu > li:hover {
					  background-color: #fff;
				  }
				  /* Megadrop width dropdown */
				  .menu > li > .megadrop {
					  opacity: 0;
					  visibility: hidden;
					  position: absolute;
					  list-style: none;
					  top: 0px;
					  left: 80px;
					  width: 400px;
					  min-height: 100%;
					  text-align: left;
					  margin-top: 30px;
					  padding: 0;
					  z-index: 99;
					  border-bottom-left-radius: 5px;
					  border-bottom-right-radius: 5px;
					  overflow: hidden;
					  background-color:white;
				  }

				  .menu > li:hover .megadrop {
					  opacity: .8;
					  visibility: visible;
					  margin-top: 0px;
				  }

			  .menu ul li:hover:after {
				  color: #28a745;
			  }

			  .menu .col {
				  width: 30%;
				  float: left;
				  color: white;
				  margin: 0 0 0 2.2%;
			  }

				  .menu .col ul {
					  padding: 0;
					  margin: 0;
				  }

					  .menu .col ul li {
						  padding: 0;
						  list-style: none;
						  font-size: 11px;
					  }

				  .menu .col h3 {
					  font-size: 16px;
					  padding: 10px 0;
					  font-weight: bold;
					  margin: 5px 0 5px 0;
					  color: #82ae46;
				  }

				  .menu .col ul li a {
					  display: block;
					  padding: 0 0 15px 0;
					  color: #82ae46;
				  }

					  .menu .col ul li a:hover {
						  color: #111;
						  text-decoration: underline;
					  }

			  .menu > li > ul li ul, .menu li > ul li, .menu > li > .megadrop, .menu > li > ul, .menu > li {
				  transition: all 0.2s ease-in-out;
				  -moz-transition: all 0.2s ease-in-out;
				  -webkit-transition: all 0.2s ease-in-out;
				  -ms-transition: all 0.2s ease-in-out;
				  -o-transition: all 0.2s ease-in-outs;
			  }
  	</style>
  	<!--End Category Menu-->

  </head>

<body class="goto-here" style="padding:0px">

	<!-- Start Header -->
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-8 d-flex topper align-items-center">							
							<span class="text"style="font-family:Consolas;font-size:15px"><i class="fas fa-bullhorn"></i> Whatever you've got in mind .. we've got inside</span>														
						</div>
						
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text"><a><i class="fab fa-app-store-ios"></i> App Store</a></span>
							<span class="text"><a><i class="fab fa-google-play"></i> Google Play</a></span>
							<span class="text"><a><i class="fas fa-globe-americas"></i> Language</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header -->

	<!-- Start nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
		<a href="#" class="" style="margin:0px 3% 0px 3%"><img src="images/time-logo.png" style="max-width:100px" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbar5">
			<form class="mx-2 my-auto d-inline w-50">
				<div class="input-group">
					<input type="text" class="form-control border border-right-0" placeholder="Search...">
					<span class="input-group-append">
						<button class="btn btn-outline-secondary border border-left-0" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			<ul class="navbar-nav">
				<li class="nav-item ">
					<a class="nav-link" href="#" ><i class="fas fa-user" style="font-size:15px"></i> Sign In</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-envelope" style="font-size:15px"></i> Messages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-ambulance" style="font-size:15px"></i> Orders</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fas fa-cart-plus" style="font-size:15px"></i> Cart [0]</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- END nav -->

	<!-- Start Slider section --> 
	<div id="wowslider-container1">

		<div class="ws_images">
			<ul>
				<li><a href="www.google.com" target="_blank"><img src="data1/images/architectureblurbuildingbusiness449559.jpg" alt="Zaraa - Cairo Mall - Floor 1 - D 3" title="Zaraa - Cairo Mall - Floor 1 - D 3" id="wows1_0" /></a></li>
				<li><a href="www.google.com" target="_blank"><img src="data1/images/crowngroupmodernmotion374894.jpg" alt="H & M - Cairo Mall - Floor 3 - A 5" title="H & M - Cairo Mall - Floor 3 - A 5" id="wows1_1" /></a></li>
				<li><a href="www.google.com" target="_blank"><img src="data1/images/peopleinsidebuilding2610756.jpg" alt="Brand - Cairo Mall - Floor 3 - B 7" title="Brand - Cairo Mall - Floor 3 - B 7" id="wows1_2" /></a></li>
				<li><a href="www.google.com" target="_blank"><img src="data1/images/peoplewalkinginsidebuilding2861656.jpg" alt="Takber - Cairo Mall - Floor 1 - E 8" title="Takber - Cairo Mall - Floor 1 - E 8" id="wows1_3" /></a></li>
				<li><a href="www.google.com" target="_blank"><img src="data1/images/photoofshoppingmall2861655.jpg" alt="Kataket - Cairo Mall - Floor 3 - A 4" title="Kataket - Cairo Mall - Floor 3 - A 4" id="wows1_4" /></a></li>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<a href="#" title="Zaraa - Cairo Mall - Floor 1 - D 3"><span><img src="data1/tooltips/architectureblurbuildingbusiness449559.jpg" alt="Zaraa - Cairo Mall - Floor 1 - D 3" />1</span></a>
				<a href="#" title="H & M - Cairo Mall - Floor 3 - A 5"><span><img src="data1/tooltips/crowngroupmodernmotion374894.jpg" alt="H & M - Cairo Mall - Floor 3 - A 5" />2</span></a>
				<a href="#" title="Brand - Cairo Mall - Floor 3 - B 7"><span><img src="data1/tooltips/peopleinsidebuilding2610756.jpg" alt="Brand - Cairo Mall - Floor 3 - B 7" />3</span></a>
				<a href="#" title="Takber - Cairo Mall - Floor 1 - E 8"><span><img src="data1/tooltips/peoplewalkinginsidebuilding2861656.jpg" alt="Takber - Cairo Mall - Floor 1 - E 8" />4</span></a>
				<a href="#" title="Kataket - Cairo Mall - Floor 3 - A 4"><span><img src="data1/tooltips/photoofshoppingmall2861655.jpg" alt="Kataket - Cairo Mall - Floor 3 - A 4" />5</span></a>
			</div>
		</div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v9.0</div>
		<div class="ws_shadow"></div>
		<!-- Start V Menu section -->
		<div class="cat-menu">
			<ul class="menu">
				<li class="catg">
					<a href="#"><i class="fas fa-store-alt"></i> Home</a>
					<div class="megadrop">
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="catg">
					<a href="#"><i class="fas fa-tshirt"></i> Clothes</a>

					<div class="megadrop">
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
					</div>

				</li>
				<li class="catg">
					<a href="#"><i class="fas fa-socks"></i> Shoes</a>

					<div class="megadrop">
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
					</div>

				</li>
				<li class="catg">
					<a href="#"><i class="fas fa-gift" style="font-size:15px"></i> Gifts</a>

					<div class="megadrop">
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h3>Title</h3>
							<ul>
								<li>
									<a href="#">Sub-menu 1</a>
								</li>
								<li>
									<a href="#">Sub-menu 2</a>
								</li>
								<li>
									<a href="#">Sub-menu 3</a>
								</li>
								<li>
									<a href="#">Sub-menu 4</a>
								</li>
								<li>
									<a href="#">Sub-menu 5</a>
								</li>
								<li>
									<a href="#">Sub-menu 6</a>
								</li>
								<li>
									<a href="#">Sub-menu 7</a>
								</li>
							</ul>
						</div>
					</div>

				</li>
			</ul>
		</div>
		<!-- End V Menu section -->
	</div>
	<!-- End Slider section -->

	<!-- Start Ads section -->
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 ftco-animate">
					<img src="images/shop/offer-1.jpg" class="img-fluid" alt="Colorlib Template">
				</div>
				<div class="col-lg-4 mb-5 ftco-animate">
					<div style="margin-bottom:20px">
						<img src="images/shop/offer-2.jpg" class="img-fluid" alt="Colorlib Template">
					</div>
					<div style="margin-top:20px">
						<img src="images/shop/offer-3.jpg" class="img-fluid" alt="Colorlib Template">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Ads section -->

	<!-- Start Gallary section -->
	<section class="ftco-section"style="background-color:#F8F8FF">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Mall Shops</span>
					<h2 class="mb-4">Visit US Now</h2>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since</p>
				</div>
			</div>
		</div>
		<div id="Gallery-area" class="our_feature_area">
			<div class="container" >
				<div id="demo-default" class="demo s_black_title"style="padding-top:0px">
					<div id="coverflow">
						<ul class="flip-items">
							<li data-flip-title="Red">
								<img src="images/gl1.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Razzmatazz" data-flip-category="Purples">
								<img src="images/gl2.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Deep Lilac" data-flip-category="Purples">
								<img src="images/gl3.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Daisy Bush" data-flip-category="Purples">
								<img src="images/gl4.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Cerulean Blue" data-flip-category="Blues">
								<img src="images/gl5.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Dodger Blue" data-flip-category="Blues">
								<img src="images/gl6.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Cyan" data-flip-category="Blues">
								<img src="images/gl7.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Robin's Egg" data-flip-category="Blues">
								<img src="images/gl8.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Deep Sea" data-flip-category="Greens">
								<img src="images/gl9.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Apple" data-flip-category="Greens">
								<img src="images/gl10.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Red">
								<img src="images/gl11.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Razzmatazz" data-flip-category="Purples">
								<img src="images/gl12.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Deep Lilac" data-flip-category="Purples">
								<img src="images/gl13.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Daisy Bush" data-flip-category="Purples">
								<img src="images/gl14.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Cerulean Blue" data-flip-category="Blues">
								<img src="images/gl15.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Dodger Blue" data-flip-category="Blues">
								<img src="images/gl16.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Cyan" data-flip-category="Blues">
								<img src="images/gl17.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Robin's Egg" data-flip-category="Blues">
								<img src="images/gl18.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Deep Sea" data-flip-category="Greens">
								<img src="images/gl19.jpg" style="width:350px ; height:350px">
							</li>
							<li data-flip-title="Apple" data-flip-category="Greens">
								<img src="images/gl20.jpg" style="width:350px ; height:350px">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
	<!-- End Gallary section -->
	
	<!-- Start Product section -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Products</span>
					<h2 class="mb-4">New Arrival</h2>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Strawberry</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Strawberry</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Green Beans</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Purple Cabbage</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Strawberry</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Brocolli</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Carrots</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Fruit Juice</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-9.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Strawberry</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-10.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Apple</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-11.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Garlic</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod">
							<img class="img-fluid" src="images/product-12.jpg" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Chilli</a></h3><br />
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span style="color:black !important">Egp 120.00</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-share"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Product section -->
	
	<!-- Start Deal of the day Section -->
     <section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
									<span class="subheading">Best Price For You</span>
									<h2 class="mb-4">Deal of the day</h2>
									<p>Lorem Ipsum has been the industry's standard dummy text ever since</p>
									<h3><a href="#">Buy Now</a></h3>
									<span class="price">Egp 10 <a href="#">now Egp 5 only</a></span>
									<div id="timer" class="d-flex mt-5">
										<div class="time" id="days"></div>
										<div class="time pl-3" id="hours"></div>
										<div class="time pl-3" id="minutes"></div>
										<div class="time pl-3" id="seconds"></div>
									</div>
								</div>
							</div>
						</div>
					</section>
	<!-- End Deal of the day Section -->

	<!-- Start Best Offers Section -->
	 <section class="ftco-section" style="padding-bottom:0px !important">
						<div class="container">
							<div class="row justify-content-center mb-3 pb-3">
								<div class="col-md-12 heading-section text-center ftco-animate">
									<span class="subheading">Offers</span>
									<h2 class="mb-4">Best Offers</h2>
									<p>Lorem Ipsum has been the industry's standard dummy text ever since</p>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-9.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-10.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-11.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 ftco-animate">
									<div class="product">
										<a href="#" class="img-prod">
											<img class="img-fluid" src="images/product-12.jpg" alt="Colorlib Template">
											<span class="status">30%</span>
											<div class="overlay"></div>
										</a>
										<div class="text py-3 pb-4 px-3 text-center">
											<h3><a href="#">Bell Pepper</a></h3><br />
											<div class="d-flex">
												<div class="pricing">
													<p class="price"><span class="mr-2 price-dc">Egp 120.00</span><span class="price-sale">Egp 80.00</span></p>
												</div>
											</div>
											<div class="bottom-area d-flex px-3">
												<div class="m-auto d-flex">
													<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
														<span><i class="ion-ios-share"></i></span>
													</a>
													<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i></span>
													</a>
													<a href="#" class="heart d-flex justify-content-center align-items-center ">
														<span><i class="ion-ios-heart"></i></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
	<!-- End Best Offers Section -->

	<!-- Start Ads section -->
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 ftco-animate">
					<img src="images/shop/offer-1.jpg" class="img-fluid" alt="Colorlib Template">
				</div>
				<div class="col-lg-4 mb-5 ftco-animate">
					<div style="margin-bottom:20px">
						<img src="images/shop/offer-2.jpg" class="img-fluid" alt="Colorlib Template">
					</div>
					<div style="margin-top:20px">
						<img src="images/shop/offer-3.jpg" class="img-fluid" alt="Colorlib Template">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Ads section -->

	<!-- Start Coming soon Section -->
	<section class="ftco-section ftco-degree-bg" >
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">New Products</span>
					<h2 class="mb-4">Coming Soon</h2>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ftco-animate">
					<div class="row">
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon1.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 5</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon2.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 6</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon3.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 4</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon4.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 2</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon5.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 3</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex product">
								<a href="#" class="block-20" style="background-image: url('images/soon6.jpg');min-height:100%">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3"><br />
										<div><a href="#">Jan 20, 2020</a></div>
										<div><a href="#">Available</a></div>
										<div><a href="#" class="meta-chat"><span class="icon-chat"style="color:dimgray"></span> 5</a></div>
									</div>
									<h3 class="heading"><a href="#">Lorem Ipsum</a></h3>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
									<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Book Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div> 

			</div>
		</div>
	</section>
	<!-- End Coming soon Section -->

	<!-- Start Reviews Section -->
	<section class="ftco-section testimony-section"style="padding-top:0px">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3" style="padding-bottom:0px !important;margin-bottom:0px !important">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Reviews</span>
					<h2 class="mb-4">Our satisfied customer says</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and industry lorem Ipsum standard</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/p1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
									<p class="name">Aya Ahmed</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/p2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
									<p class="name">Muhammad Ali</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/p3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Mustafa Hassan</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/p4.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
									<p class="name">Dalia Mahdy</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/p5.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
									<p class="name">Rania Ramy</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Reviews Section -->

	<!-- Start Services Section -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-shipped"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Free Shipping</h3>
							<span>On order over 10,000 EGP</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-diet"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Always Fresh</h3>
							<span>Product well package</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Superior Quality</h3>
							<span>Quality Products</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Support</h3>
							<span>24/7 Support</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Start Subcribe Section --->
	 <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light " style="background-color:#D3D3D3 !important">
						<div class="container py-4">
							<div class="row d-flex justify-content-center py-5">
								<div class="col-md-6">
									<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
									<span style="color:black">Get e-mail updates about our latest shops and special offers</span>
								</div>
								<div class="col-md-6 d-flex align-items-center">
									<form action="#" class="subscribe-form">
										<div class="form-group d-flex">
											<input type="text" class="form-control" placeholder="Enter email address">
											<input type="submit" value="Subscribe" class="submit px-3">
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
	<!-- End Subcribe Section -->
	
	
	<!-- Start Contact Section -->
	<section class="ftco-section contact-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Contact Us</span><br />
					<span class="subheading">We would love to hear from you!</span>
				</div>
			</div>
			<div class="row block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-white p-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>

				</div>
				<div class="col-md-6 d-flex">
					<div id="map" class="bg-white">
						<div class="mapouter"><div class="gmap_canvas" style="width:100%"><iframe style="width:100%;height:100%" id="gmap_canvas" src="https://maps.google.com/maps?q=senior%20consulting&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div>
						<style>
							.mapouter {
								position: relative;
								text-align: right;
								
							}

							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								height:600px;
							}
						</style></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Section -->

	<!-- Start Footer Section -->
	 <footer class="ftco-footer ftco-section" style="background-image: url('images/bg_4.jpg');background-repeat:no-repeat;background-position: center center">
						<div class="container">
							<div class="row">
								<div class="mouse">
									<a href="#" class="mouse-icon">
										<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
									</a>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-md">
									<div class="ftco-footer-widget mb-4">
										<h2 class="ftco-heading-2" style="color:#82ae46;font-size:20px">Mall</h2>
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
											<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
											<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
											<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-md">
									<div class="ftco-footer-widget mb-4 ml-md-5">
										<h2 class="ftco-heading-2" style="color:#82ae46;font-size:20px">Menu</h2>
										<ul class="list-unstyled">
											<li><a href="#" class="py-2 d-block">Shop</a></li>
											<li><a href="#" class="py-2 d-block">About</a></li>
											<li><a href="#" class="py-2 d-block">Journal</a></li>
											<li><a href="#" class="py-2 d-block">Contact Us</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="ftco-footer-widget mb-4">
										<h2 class="ftco-heading-2" style="color:#82ae46;font-size:20px">Help</h2>
										<div class="d-flex">
											<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
												<li><a href="#" class="py-2 d-block">Shipping Information</a></li>
												<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
												<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
												<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
											</ul>
											<ul class="list-unstyled">
												<li><a href="#" class="py-2 d-block">FAQs</a></li>
												<li><a href="#" class="py-2 d-block">Contact</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="ftco-footer-widget mb-4">
										<h2 class="ftco-heading-2" style="color:#82ae46;font-size:20px">Have a Questions?</h2>
										<div class="block-23 mb-3">
											<ul>
												<li><a class="icon icon-map-marker"></a><a class="text">Location Contrary to popular belief, Lorem Ipsum is not simply random text.  literature from 45 BC</a></li>
												<li><a href="#"><span class="icon icon-phone"style="color:black"></span><span class="text" style="color:black">+2 123 456 789</span></a></li>
												<li><a href="#"><span class="icon icon-envelope"style="color:black"></span><span class="text" style="color:black">info@mall.com</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
	</footer>
	<!-- End Footer Section -->


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
	<!-------------------------------------------------------->
	<!-- Start Slider section -->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End Slider section -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>

	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>


	<!--Start Gallery section -->
	<script src="js/gallery-jquery.min.js"></script>
	<script src="js/gallery-jquery.flipster.min.js"></script>
	<script>
            var coverflow = $("#coverflow").flipster();
	</script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- End Gallery section -->



</body>
</html>