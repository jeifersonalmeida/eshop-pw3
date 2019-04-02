<?php session_start(); ?>

<!-- HEADER -->
<header>
	<!-- top Header -->
	<div id="top-header">
		<div class="container">
			<div class="pull-left">
				<span>Welcome to E-shop!</span>
			</div>
			<div class="pull-right">
				<ul class="header-top-links">
					<li><a href="#">Store</a></li>
					<li><a href="#">Newsletter</a></li>
					<li><a href="#">FAQ</a></li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a href="#">English (ENG)</a></li>
							<li><a href="#">Russian (Ru)</a></li>
							<li><a href="#">French (FR)</a></li>
							<li><a href="#">Spanish (Es)</a></li>
						</ul>
					</li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
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
						<img src="./img/logo.png" alt="">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Search -->
				<div class="header-search">
					<form>
						<input class="input search-input" type="text" placeholder="Enter your keyword">
						<select class="input search-categories">
							<option value="0">All Categories</option>
							<option value="1">Category 01</option>
							<option value="1">Category 02</option>
						</select>
						<button class="search-btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->
			</div>
			<div class="pull-right">
				<ul class="header-btns">
					<!-- Account -->
					<li class="header-account dropdown default-dropdown">
						<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
							<div class="header-btns-icon">
								<i class="fa fa-user-o"></i>
							</div>
							<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
						</div>
						<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
						<ul class="custom-menu">
							<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
							<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
							<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
							<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
							<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
							<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
						</ul>
					</li>
					<!-- /Account -->

					<?php 
						include "cart.php";
					?>

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

<!-- NAVIGATION -->
<div id="navigation">
	<!-- container -->
	<div class="container">
		<div id="responsive-nav">
			<!-- category nav -->
			<div class="category-nav show-on-click">
				<span class="category-header">Categories <i class="fa fa-list"></i></span>
				<ul class="category-list">
					<li class="dropdown side-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
						<div class="custom-menu">
							<div class="row">
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
							</div>
							<div class="row hidden-sm hidden-xs">
								<div class="col-md-12">
									<hr>
									<a class="banner banner-1" href="#">
										<img src="./img/banner05.jpg" alt="">
										<div class="banner-caption text-center">
											<h2 class="white-color">NEW COLLECTION</h2>
											<h3 class="white-color font-weak">HOT DEAL</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Men’s Clothing</a></li>
					<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
						<div class="custom-menu">
							<div class="row">
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
								<div class="col-md-4 hidden-sm hidden-xs">
									<a class="banner banner-2" href="#">
										<img src="./img/banner04.jpg" alt="">
										<div class="banner-caption">
											<h3 class="white-color">NEW<br>COLLECTION</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Computer & Office</a></li>
					<li><a href="#">Consumer Electronics</a></li>
					<li class="dropdown side-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
						<div class="custom-menu">
							<div class="row">
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Bags & Shoes</a></li>
					<li><a href="#">View All</a></li>
				</ul>
			</div>
			<!-- /category nav -->

			<!-- menu nav -->
			<div class="menu-nav">
				<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
				<ul class="menu-list">
					<li><a href="./products.php">Shop</a></li>
					<li><a href="./products.php?param=ram&">RAM</a></li>
					<li><a href="./products.php?param=vga&">VGA</a></li>
				</ul>
			</div>
			<!-- menu nav -->
		</div>
	</div>
	<!-- /container -->
</div>
<!-- /NAVIGATION -->