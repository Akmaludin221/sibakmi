<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Sistem Informasi Bank Sampah</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="icon" href="<?= base_url('assets/img/logo_MPTI2_multi-color_icon.png')?>" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-transparent">
		<div class="container-fluid">

			<div class="row justify-content-center">
				<div class="col-xl-11 d-flex align-items-center">
					<h1 class="logo mr-auto"><a href="index.html">SIBAKMI</a></h1>
					<!-- Uncomment below if you prefer to use an image logo -->
					<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

					<nav class="nav-menu d-none d-lg-block">
						<ul>
							<li class="active"><a href="<?=base_url()?>">Home</a></li>
							<li><a href="#about">About Us</a></li>
							<li><a href="#services">Services</a></li>

						</ul>
					</nav><!-- .nav-menu -->
				</div>
			</div>

		</div>
	</header><!-- End Header -->

	<!-- ======= Intro Section ======= -->
	<section id="intro">
		<div class="intro-container">
			<div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

				<ol class="carousel-indicators"></ol>

				<div class="carousel-inner" role="listbox">

					<div class="carousel-item active" style="background-image: url(<?= base_url() ?>/assets/img/intro-carousel/re1.jpg)">
						<div class="carousel-container">
							<div class="container">
								<h2 class="animate__animated animate__fadeInDown">Welcome To SIBAKMI</h2>
								<p class="animate__animated animate__fadeInUp">Bergabunglah bersama kami untuk dunia menjadi lebih baik!</p>
								<a href="<?= base_url('login') ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">LOGIN</a>
							</div>
						</div>
					</div>

					<div class="carousel-item" style="background-image: url(<?= base_url() ?>/assets/img/intro-carousel/2.jpeg)">
						<div class="carousel-container">
							<div class="container">
								<h2 class="animate__animated animate__fadeInDown">Yuk setor sampahmu!</h2>
								<p class="animate__animated animate__fadeInUp">Karena menyelamatkan bumi ini adalah Menyelamatkan diri kita sendiri.</p>
								<a href="<?= base_url('login') ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">LOGIN</a>
							</div>
						</div>
					</div>

					<div class="carousel-item" style="background-image: url(<?= base_url() ?>/assets/img/intro-carousel/3.jpeg)">
						<div class="carousel-container">
							<div class="container">
								<h2 class="animate__animated animate__fadeInDown">Bersih itu Indah</h2>
								<p class="animate__animated animate__fadeInUp"> Remaja keren itu suka lingkungan yang bersih, mari bersama bebaskan indonesia dari sampah </p>
								<a href="<?= base_url('login') ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">LOGIN</a>
							</div>
						</div>
					</div>

				</div>

				<a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>
		</div>
	</section><!-- End Intro Section -->

	<main id="main">

		<!-- ======= Featured Services Section Section ======= -->

		</div>
		</div>
		</section><!-- End Featured Services Section -->

		<!-- ======= About Us Section ======= -->
		<section id="about">
			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h3>SIBAKMI</h3>
					<p>Menyadari ada banyak sampah yang tidak terselesaikan dengan baik, maka masyarakat perlu mengurangi volume sampah yang jumlahnya kian meningkat dari tahun ke tahun.
						Bank sampah bisa menjadi salah satu solusi terutama untuk sampah-sampah yang berasal dari rumah tangga.
						strategi ini untuk membangun kepedulian masyarakat agar dapat ‘berkawan’ dengan sampah untuk mendapatkan manfaat ekonomi langsung dari sampah.

					</p>
				</header>

				<div class="row about-cols">

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>/assets/img/m.jpeg" alt="" class="img-fluid">
								<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Mission</a></h2>
							<p>
								Sebagai solusi untuk mencapai pemukiman yang bersih dan nyaman bagi warganya dan menjadi salah satu alternatif untuk memecahkan masalah sampah dan ikut berpartisipasi melestarikan lingkungan.
							</p>
						</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>/assets/img/p.jpeg" alt="" class="img-fluid">
								<div class="icon"><i class="ion-ios-list-outline"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Plan</a></h2>
							<p>
								meningkatkan kesadaran masyarakat akan arti pentingnya lingkungan hidup bersih dan dapat mereduksi sampah yang masuk ke Tempat Penampungan Akhir (TPA).
							</p>
						</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>/assets/img/v.jpeg" alt="" class="img-fluid">
								<div class="icon"><i class="ion-ios-eye-outline"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Vision</a></h2>
							<p>
								“ TERWUJUDNYA LINGKUNGAN YANG MANDIRI, BERSIH DAN BERNILAI EKONOMI “
							</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services">
			<div class="container" data-aos="fade-up">

				<header class="section-header wow fadeInUp">
					<h3>Services</h3>
					<p>Apa sih keuntungan bergabung di Bank Sampah?
						Dengan bergabung bersama bank sampah kita secara tidak langsung telah ikut menyelamatkan bumi dari ancaman bahaya sampah yang kian hari kian menumpuk dan juga dapat membantu masyarakat dalam mengelola sampah rumah tangganya juga dapat mendapatkan tambahan pemasukan dari sampah-sampah yang mereka kumpulkan. Jika anda bergabung di bank sampah maka sampah yang anda setorkan dapat dikelola dengan baik atau didaur ulang. Sangat menarik bukan? Ayo bergabung bersama SIBAKMI dan setorkan sampah mu sekarang!
					</p>
				</header>

				<center>
					<h4 class="title"><a href="">Bagaimana sih penyetoran di SIBAKMI? Yuk simak caranya dibawah ini.</a></h4>
					<img src="<?= base_url() ?>/assets/img/ser.jpeg" alt="image" height="240" width="360">
					<p class="description">1. Pemilihan sampah</p>
					<p class="description">2. Penyetoran kepada admin SIBAKMI (minimal 1 Kg)</p>
					<p class="description">3. Sampah mu akan ditimbang</p>
					<p class="description">4. Pencatatan sampah</p>
					<p class="description">5. Hasil sampah dilaporkan ke dalam buku tabungan</p>
				</center>

			</div>
		</section><!-- End Services Section -->



		<!-- ======= Footer ======= -->
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-6 footer-info">
							<h4>MOJULISDIAK</h4>
							<p>sekumpulan manusia gabut yang mendiskusikan apa yang akan di kerjakan hari esok dan kedepannya.</p>
						</div>


						<div class="col-lg-3 col-md-6 footer-contact">
							<h4>Contact Us</h4>
							<p>
								Citamiang <br>
								Sukabumi, Jawa Barat<br>
								Indonesia <br>
								<strong>Phone:</strong> +62 1123 4421 6133<br>
								<strong>Email:</strong> Sibakmi_12@gmail.com<br>
							</p>

							<div class="social-links">
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
							</div>

						</div>

					</div>
				</div>
			</div>

			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong>@dmstyi</strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
					Designed by <a href="https://bootstrapmade.com/">CBCOM.Tech-OFFICIAL</a>
				</div>
			</div>
		</footer><!-- End Footer -->

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<!-- Uncomment below i you want to use a preloader -->
		<!-- <div id="preloader"></div> -->

		<!-- Vendor JS Files -->
		<script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/counterup/counterup.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>

</body>

</html>