<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SriwijayaWisata | Claim Voucher</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/self.css">
	
	<link rel="shortcut icon" href="images/logo2.png">
		
	<!-- Font Awesome  -->
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<div id="colorlib-logo">
								<div class="row">
									<img src="images/logo2.png"/>
									<!--<a href="index.html">SriwijayaWisata</a>-->
								</div>	
							</div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li><a href="index.html">Beranda</a></li>
								<li><a href="companyProfile.html">Profil</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="testimonial.html">Testimoni</a></li>
								<li><a href="faq.html">FAQ</a></li>									
								<li><a href="https://play.google.com/store/apps/details?id=id.co.paytren.user&hl=in">PPOB</a></li>
								<li class="has-dropdown">
									<a href="javascript:;">Voucher</a>
									<ul class="dropdown">
										<li><a href="klaim.php">Claim Voucher</a></li>
										<li><a href="cekvoucher.php">Cek Voucher</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/klaimm.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Cek Voucher</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<form action="prosesCek.php" method="POST" id="formCek">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="userid">User ID</label>
									<input type="text" name="userid" class="form-control" placeholder="Masukkan UserID Anda">
								</div>
							</div>
							<div class="form-group text-center">
								<input type="button" value="Cek Sekarang" class="btn btn-info" id="cek">
							</div>
						</form>		
					</div>				
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box text-center" id="hasil">
												
					</div>
				
				</div>
			</div>
		</div>
		<!--<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>-->
		
<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 colorlib-widget">
						<h4>Tentang Kami</h4>
						<p> SriwijayaWisata adalah bisnis kemitraan perjalanan wisata yang melayani pengurusan dokumen dan kebutuhan akomodasi, transportasi, serta semua kebutuhan anda. </p>

					</div>
					<div class="col-md-4 colorlib-widget">
						<h4>Pilihan Menu</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.html">Beranda</a></li>
								<li><a href="companyProfile.html">Profil</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="testimonial.html">Testimoni</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=id.co.paytren.user&hl=in">PPOB</a></li>								
								<li><a href="klaim.php">Claim Voucher</a></li>
								<li><a href="cekvoucher.php">Cek Voucher</a></li>
								<!--
								<li><a href="preRegister.html">PreRegister</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="silverLogin.html">Regular Login</a></li>
								<li><a href="platinumLogin.html">Platinum Login</a></li>
								-->
							</ul>
						</p>
					</div>

					<div class="col-md-4 col-md-push-1">
						<h4>Kontak Kami</h4>
						<ul class="colorlib-footer-links">
							<li><i class="fa fa-fw fa-building"></i> Virtual Office<br/>Wisma Monex Building<br/>9th Floor, Jl Asia Afrika No. 133-137, Bandung 40112</li>
							<li><i class="fa fa-fw fa-phone"></i> 022 - 87321141</li>
							<li><i class="fa fa-fw fa-building-o"></i>Marketing Office<br/>The Suite Metro Tower E / GF No. 2<br/>Jln. Soekarno Hatta Bandung.</li>
							<li><i class="fa fa-fw fa-phone"></i> 022 - 61141686</li>
							<li><i class="fa fa-fw fa-envelope"></i> info@sriwijayawisata.com</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SriwijayaWisata.com</span>
							
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="contact.html" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/ajax.js"></script>
	</body>
</html>

