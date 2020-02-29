<!-- HEADER -->
<header>
		<!-- top Header -->
		<div id="top-header" style="background-color:#82ae46">
			<div class="container">
				<div class="pull-left">
					<span style="color:white;text-transform:uppercase"><i class="fas fa-bullhorn"></i> Whatever you've got in mind .. we've got inside</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a style="color:white !important"><i class="fab fa-app-store-ios"></i> App Store</a></li>
						<li><a style="color:white !important"><i class="fab fa-google-play"></i> Google Play</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="color:white !important">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="color:white !important">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->
		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="{{ asset('webasset/images/time-logo.jpeg')}}" style="max-width:100px;max-height:50px" />
						</a>
					</div>
					<!-- /Logo -->
					<!-- Search -->
					<div class="header-search">
						<form class="form-control-lg">
							<input class="input search-input" type="text" placeholder="Enter your keyword...">
							<select class="input search-categories">
								<option value="0">Product</option>
								<option value="1">Supplier</option>
								<option value="1">All</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
								
			
				<div id="pull-right" class="pull-right">
			
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->
						<!-- Cart -->
			
						<li class="header-cart dropdown default-dropdown">
						<?php
						$countNum=0;
						?>
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">{{$countNum}}</span>
								</div>
								<strong class="text-uppercase">My Cart</strong>
								<br>
								<span>35.20 EGP</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="{{ asset('webasset/images/thumb-product01.jpg')}}" alt="" />
											</div>
											<div class="product-body">
												<h3 class="product-price">32.50 EGP<span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="{{ asset('webasset/images/thumb-product02.jpg')}}" alt="" />
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<?php
									$id=2;
									?>
									<div class="shopping-cart-btns">
									<a href="{{route('cartShowing',$id)}}" class="main-btn">View Cart</a>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->
						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->