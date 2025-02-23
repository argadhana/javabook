<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Java Book</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="JavaBook shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/plugins/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <link href="{{asset('')}}frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/styles/responsive.css">
	@yield('css')
</head>

<body>

	<div class="super_container">
		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('')}}frontend/images/phone.png" alt=""></div>+62 855 7467 0577</div>
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('')}}frontend/images/mail.png" alt=""></div><a href="mailto:javabook@gmail.com">javabook@gmail.com</a></div>
							<div class="top_bar_content ml-auto">
								{{-- <div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">
										<li>
											<a href="#">English<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">Italian</a></li>
												<li><a href="#">Spanish</a></li>
												<li><a href="#">Japanese</a></li>
											</ul>
										</li>
										<li>
											<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">EUR Euro</a></li>
												<li><a href="#">GBP British Pound</a></li>
												<li><a href="#">JPY Japanese Yen</a></li>
											</ul>
										</li>
									</ul>
								</div> --}}
								<div class="top_bar_user">
									<div class="user_icon"><img src="{{asset('')}}frontend/images/user.svg" alt=""></div>
									<div><a href="#">Register</a></div>
									<div><a href="#">Sign in</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="#">JavaBook</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Cari Buku...">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">Kategori</span>
													<i class="fas fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="#">Penulis</a></li>
														<li><a class="clc" href="#">Buku</a></li>
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('')}}frontend/images/search.png" alt=""></button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_icon"><img src="{{asset('')}}frontend/images/heart.png" alt=""></div>
									<div class="wishlist_content">
										<div class="wishlist_text"><a href="#">Wishlist</a></div>
										<div class="wishlist_count">115</div>
									</div>
								</div>

								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="{{asset('')}}frontend/images/cart.png" alt="">
											<div class="cart_count"><span>10</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="#">Cart</a></div>
											<div class="cart_price">Rp.90.000</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->

								<div class="cat_menu_container">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">categories</div>
									</div>

									<ul class="cat_menu">
										<li><a href="#">Ensiklopedi <i class="fas fa-chevron-right ml-auto"></i></a></li>
										<li><a href="#">Cergam<i class="fas fa-chevron-right"></i></a></li>
										<li class="hassubs">
											<a href="#">Novel<i class="fas fa-chevron-right"></i></a>
											<ul>
												<li class="hassubs">
													<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Antologi<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Ilmiah<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Teks<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Panduan<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Kamus<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Tafsir<i class="fas fa-chevron-right"></i></a></li>
									</ul>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
										<li class="hassubs">
											<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Brands<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Rekomendasi<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="shop.html">Biografi<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="product.html">Komik<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="blog.html">Text<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="blog_single.html">Novel<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="regular.html">Lainnya<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li><a href="blog.html">Populer<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Kontak<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div>

								<!-- Menu Trigger -->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</nav>

			<!-- Menu -->

			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="page_menu_content">

								<div class="page_menu_search">
									<form action="#">
										<input type="search" required="required" class="page_menu_search_input" placeholder="Cari Produk...">
									</form>
								</div>
								<ul class="page_menu_nav">
									{{-- <li class="page_menu_item has-children">
										<a href="#">Language<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Currency<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li> --}}
									<li class="page_menu_item">
										<a href="#">Home<i class="fa fa-angle-down"></i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
											<li class="page_menu_item has-children">
												<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
												<ul class="page_menu_selection">
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Brand<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Brand<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Populer<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item"><a href="blog.html">Rekomendasi<i class="fa fa-angle-down"></i></a></li>
									<li class="page_menu_item"><a href="contact.html">Kontak<i class="fa fa-angle-down"></i></a></li>
								</ul>

								<div class="menu_contact">
									<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('')}}frontend/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
									<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('')}}frontend/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>
		@yield('main')
		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="#">BookStrore</a></div>
							</div>
							<div class="footer_title">Got Question? Call Us 24/7</div>
							<div class="footer_phone">+62 855 7467 0577</div>
							<div class="footer_contact_text">
								<p>Jl. Kebon Subur Raya, Karangrawa, Kebonbatur, Mranggen, Kabupaten Demak, Jawa Tengah 59567</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-2">
						<div class="footer_column">
							<div class="footer_title">Find it Fast</div>
							<ul class="footer_list">
								<li><a href="#">Computers & Novel</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
							</ul>
							<div class="footer_subtitle">Gadgets</div>
							<ul class="footer_list">
								<li><a href="#">Car Electronics</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<ul class="footer_list footer_list_2">
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Computers & Novel</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">Customer Care</div>
							<ul class="footer_list">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Order Tracking</a></li>
								<li><a href="#">Wish List</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Returns / Exchange</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Product Support</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="copyright_content">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> <a href="https://northjavatech.com" target="_blank">NJT</a>. All rights reserved
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="{{asset('')}}frontend/images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('')}}frontend/images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('')}}frontend/images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('')}}frontend/images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset('')}}frontend/js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/bootstrap-4.2.1-dist/js/popper.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/greensock/TweenMax.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/greensock/TimelineMax.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/greensock/animation.gsap.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="{{asset('')}}frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="{{asset('')}}frontend/plugins/slick-1.8.0/slick.js"></script>
	<script src="{{asset('')}}frontend/js/custom.js"></script>
	@yield('js')
</body>

</html>
