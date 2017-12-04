<?php

    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Lembaga Adat Melayu Kepulauan Riau | Laman Utama</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<header id="header">
				<div class="container">
					<div class="row primary-header">
					<a class="col-md-4 brand centered"></a>
						<a href="<?php echo SITE_URL; ?>"<?php if($page=="" || $page=="Home") echo 'class="current"'; ?> class="col-md-4 brand centered" title="Selamat Datang di Profil LAM Kepri"><img src="assets/img/RIAU.png" alt="Charity"></a>
						
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav>
							<ul class="nav navbar-nav">
							<li class ="active">
									<a href="<?php echo SITE_URL; ?>" <?php if($page=="" || $page=="home") echo 'class="current"'; ?>>Laman Utama</a>
								</li>
								
								<li>
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Tentang LAM Kepri <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
	
								<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=AnggaranDasar" <?php if($page=="AnggaranDasar") echo 'class="current"'; ?>>Anggaran Dasar</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=AnggaranRumahTangga" <?php if($page=="AnggaranRumahTangga") echo 'class="current"'; ?>>Anggaran Rumah Tangga</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=ProgramKerja" <?php if($page=="ProgramKerja") echo 'class="current"'; ?>>Program Kerja</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=Perda" <?php if($page=="Perda") echo 'class="current"'; ?>>Perda No.1 Tahun 2014</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Kelembagaan LAM Kepri <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=Bidang" <?php if($page=="Bidang") echo 'class="current"'; ?>>Bidang-bidang</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=StrukturLembaga" <?php if($page=="StrukturLembaga") echo 'class="current"'; ?>>Struktur Lembaga</a>
											</li>
										</ul>
									</div>
									<!-- end  -->

								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Kegiatan LAM Kepri <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
										<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=GaleriPengurus" <?php if($page=="GaleriPengurus") echo 'class="current"'; ?>>Gallery Pengurus LAM</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=VideoLam" <?php if($page=="VideoLam") echo 'class="current"'; ?>>Video Produksi LAM Kepri</a>
											</li>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=BukuLam" <?php if($page=="BukuLam") echo 'class="current"'; ?>>Buku Produksi LAM Kepri</a>
											</li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Identitas LAM Kepri <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="<?php echo SITE_URL; ?>?page=Identitas" <?php if($page=="Identitas") echo 'class="current"'; ?>>Lambang dan Tanda Kebesaran</a>
											</li>
											
									</div>
								</li>
								

							</ul>
							</nav>
							
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>

			</header>
			<!-- Header Section End Here -->
			
				<!-- Site Content -->
			<div id="main"><?php

				if($page == "" || $page == "home") {
			?>
				<!-- banner slider Start Here -->
				<section class="rev_slider_wrapper banner-section">
					<div class="rev_slider banner-slider">
						<ul>
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo PATH; ?>assets/img/banner.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								class="tp-caption sft">
									<span class="btn btn-bg">DESKRIPSI</span>
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								class="tp-caption sft third-style banner-heading banner-title">
									<h2><strong>Judul</strong>
									
									Deskripsi Foto Raise Fund For African Children and Their Education
</h2>
								</div>
<!-- 
								<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="304"
								data-x="152"
								class="tp-caption sft third-style banner-summary banner-description">
									<p>
										The world's best fundraising website works outstandingly for African children by raising money for ideal cause, including medical bills, education, help and awesome donation causes.
									</p>
								</div>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="416"
								data-x="152"
								class="tp-caption sft">
									<a data-toggle="modal" href="external.html" data-target=".donate-form" class="btn btn-default">Donate NOW</a>
								</div>-->
							</li>
							<!-- SLIDE  -->
								<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo PATH; ?>assets/img/banner-2.jpg" alt="banner" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="303"
								data-x="152"
								class="tp-caption sft">
									<span class="btn btn-bg">DESKRIPSI</span>
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="350"
								data-x="152"
								class="tp-caption sft third-style banner-heading banner-title">
									<h2><strong>Judul</strong>
									
									Deskripsi Foto Raise Fund For African Children and Their Education
</h2>
								</div>

							</li>
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-3">
								<!-- MAIN IMAGE -->
								<img src="<?php echo PATH; ?>assets/img/slide-banner-1.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								class="tp-caption sft banner-feaure">
									<span class="btn btn-bg">Deskripsi</span>
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								class="tp-caption sft third-style banner-heading banner-title">
									<h2><strong>Judul</strong>
									
									Deskripsi Foto Support African Children In Making Their Career</h2>
								</div>
								<!--<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="244"
								data-x="152"
								class="tp-caption sft third-style banner-summary banner-description">
									<p>
										Become volunteer and start donating for those, who are unable to get education that they deserve. Give your full support to make their career.
									</p>
								</div>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="354"
								data-x="152"
								class="tp-caption sft banner-btn">
									<a data-toggle="modal" href="external.html" data-target=".donate-form" class="btn btn-default">Donate NOW</a>
								</div-->
							</li>
						</ul>
					</div>
				</section>
				<!-- banner slider End Here -->
	<!-- Our Causes Section Start Here-->
				<section class="our-causes">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header section-header clearfix">
									<h2><strong>Selamat Datang di Lembaga Adat Melayu Kepulauan Riau</strong></h2>
								</div>
								<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-7">
									<iframe width="640" height="360" src="https://www.youtube.com/embed/hfLtAkJlfUQ" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="col-md-5">
										<h3>Warkah Petuah Adat Melayu Oleh Dato Teja Al-Habd </h3>
										<p>Dato Teja Al-Habd menyampaikan Warkah Petuah Adat Melayu dalam pelantikan dan penganugrahan gelar kepada Dr. Marsetio Oleh Lembaga Adat Melayu Kepuluan Riau.</p>
									</div>
									
									
								</div>
								
							</div>
							
						</div>
								
							</div>
						</div>
					</div>
				</section>
	<!-- Our Causes Section End Here-->
	<?php } ?>
			<?php
                $view = new View($viewName);
                $view->bind('data', $data);
                $view->forceRender();
            ?>

	
		

			</div>
			
	<!--Content End Here -->
	<!--Footer Section Start Here -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8">
							<div class="footer-logo">
								<a href="index.html" title="Selamat Datang di Lembaga Adat Melayu Kepulauan Riau"><img src="assets/img/RIAU.png" alt="Charity"></a>
							</div>
							<p>
							LAM KEPRI adalah Lembaga Adat Melayu Provinsi Kepulauan Riau. Website ini mendeskripsikan tentang LAM KEPRI dan apa saja kegiatan yang dilaksanakan. 
							<br><br><span> <i class="fa fa-home"></i> Jl.xxxxxx, Kepulauan Riau, 000000, Indonesia </span><br>
								<span> <i class="fa fa-phone-square"></i> <span> +6282129000000</span> </span><br>
								<span> <i class="fa fa-envelope"></i> <a href="mailto:lembagaadatmelayu@gmail.com"> lembagaadatmelayu@gmail.com</a></span>
							</p>
								
							

						</div>
						
						<div class="col-xs-12 col-sm-4">
							<h6>Newsletter Signup</h6>
							<p>
								
Sign up your account to check our newsletter that will undoubtedly help you acquainted with current scenario.
							</p>
							<form role="form" class="sign-up">

								<div class="input-group">
									<input class="form-control" type="email" placeholder="Email">
									<div class="input-group-addon">
										<input type="submit" class="btn btn-theme" value="Submit">
									</div>
								</div>

							</form>

							<h6>Follow us</h6>
							<ul class="social-icons">
								<li>
									<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://dribble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
								</li>
								<li>
									<a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
								</li>
								<li>
									<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<span> &copy; Copyright 2017, All Rights Reserved by Lembaga Adat Melayu Kepulauan Riau.
									</span>
							</div>
						</div>
					</div>
				</div>
			</footer>
	<!--Footer Section End Here -->

		</div>
		

	
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style Js -->
		<script src="assets/js/style-switcher/assets/js/style.switcher.js"></script>
		<script src="assets/js/jquery.cookie.js"></script>
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider End Js-->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>