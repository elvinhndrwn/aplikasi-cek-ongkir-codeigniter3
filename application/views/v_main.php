<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title>Cek Ongkir</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/fontawesome-all.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/swiper.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/magnific-popup.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
	<link rel="icon" href="<?= base_url('assets/') ?>images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

		<!-- Image Logo -->
		<a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url('assets/') ?>images/logo.svg" alt="alternative"></a>

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#services">Cek Ongkir</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#ekspedisi">Ekspedisi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#about">About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link page-scroll" href="#contact">Contact</a>
				</li>
			</ul>
			<span class="nav-item social-icons">
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x facebook"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>
				</span>
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x twitter"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>
				</span>
			</span>
		</div>
	</nav> <!-- end of navbar -->
	<!-- end of navigation -->


	<!-- Header -->
	<header id="header" class="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h1><span class="turquoise">Cara Cepat</span> Cek Ongkir!</h1>
							<p class="p-large">Use Evolo free landing page template to promote your business startup and generate leads for the offered services</p>
							<a class="btn-solid-lg page-scroll" href="#services">CEK ONGKIR!</a>
						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
					<div class="col-lg-6">
						<div class="image-container">
							<img class="img-fluid" src="<?= base_url('assets/') ?>img/moto2.png" alt="alternative" style="width: 420px">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of header-content -->
	</header> <!-- end of header -->
	<!-- end of header -->


	<!-- Services -->
	<div id="services" class="cards-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Cek Ongkos Kirim</h2>
					<p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 justify-content-center">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<select class="form-control-select province" name="province" id="rselect" required>
									<option class="select-option" value="" disabled selected>Provinsi Asal</option>
									<?php 
									for ($i=0; $i < count($prov['rajaongkir']['results']); $i++) { ?>

										<option class="select-option" value="<?php echo $prov['rajaongkir']['results'][$i]['province_id'] ?>"><?php echo $prov['rajaongkir']['results'][$i]['province'] ?></option>

									<?php } ?>
								</select>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<select class="form-control-select city" name="city" id="rselect" required>
									<option class="select-option" value="" disabled selected>Kota/Kabupaten Asal</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<select class="form-control-select kurir" name="kurir" id="rselect" required>
									<option class="select-option" value="" disabled selected>Kurir</option>
									<option class="select-option" value="jne" >JNE</option>
									<option class="select-option" value="tiki" >TIKI</option>
									<option class="select-option" value="pos" >POS</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col">
							<div class="form-group">
								<select class="form-control-select province_to" name="province_to" id="rselect" required>
									<option class="select-option" value="" disabled selected>Provinsi Tujuan</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<select class="form-control-select city_to" name="city_to" id="rselect" required>
									<option class="select-option" value="" disabled selected>Kota/Kabupaten Tujuan</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<input type="text" class="form-control-input berat" id="rname" name="berat" required>
								<label class="label-control" for="rname">Berat(gram)</label>
								<div class="help-block with-errors"></div>
							</div>
							<button  class="form-control-submit-button cek_ongkir">Cek Ongkir!</button>
						</div>
					</div>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of cards-1 -->
	<!-- end of services -->


	<!-- Details 1 -->
	<div id="pricing" class="cards-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 id="title_result_ongkir"></h2>
				</div>
				<div class="col-lg-12 result_ongkir" id="result_ongkir">

				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of basic-1 -->
	<!-- end of details 1 -->

	<!-- Details Lightboxes -->
	<!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="container">
			<div class="row">
				<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
				<div class="col-lg-8">
					<div class="image-container">
						<img class="img-fluid" src="<?= base_url('assets/') ?>images/details-lightbox-1.svg" alt="alternative">
					</div> <!-- end of image-container -->
				</div> <!-- end of col -->
				<div class="col-lg-4">
					<h3>Design And Plan</h3>
					<hr>
					<h5>Core feature</h5>
					<p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
					<p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
					<ul class="list-unstyled li-space-lg">
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">List building framework</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">User administration</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
						</li>
					</ul>
					<a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of lightbox-basic -->
	<!-- end of details lightbox 1 -->

	<!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="container">
			<div class="row">
				<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
				<div class="col-lg-8">
					<div class="image-container">
						<img class="img-fluid" src="<?= base_url('assets/') ?>images/details-lightbox-2.svg" alt="alternative">
					</div> <!-- end of image-container -->
				</div> <!-- end of col -->
				<div class="col-lg-4">
					<h3>Search To Optimize</h3>
					<hr>
					<h5>Core feature</h5>
					<p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
					<p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
					<ul class="list-unstyled li-space-lg">
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">List building framework</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">User administration</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
						</li>
						<li class="media">
							<i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
						</li>
					</ul>
					<a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of lightbox-basic -->
	<!-- end of details lightbox 2 -->
	<!-- end of details lightboxes -->


	<!-- Pricing -->
	<div id="ekspedisi" class="cards-2">
		<!-- Customers -->
		<div class="slider-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3>Ekspedisi yang Tersedia</h3>

						<!-- Image Slider -->
						<div class="slider-container">
							<div class="swiper-container image-slider">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/jne.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/pos.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/tiki.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>

									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/jne.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/pos.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="image-container">
											<img class="img-responsive" src="<?= base_url('assets/') ?>images/tiki.png" alt="alternative" style="width: 150px; height: 60px">
										</div>
									</div>
								</div> <!-- end of swiper-wrapper -->
							</div> <!-- end of swiper container -->
						</div> <!-- end of slider-container -->
						<!-- end of image slider -->

					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of slider-1 -->
		<!-- end of customers -->
	</div> <!-- end of cards-2 -->
	<!-- end of pricing -->

	<!-- About -->
	<div class="slider-2" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="image-container">
						<img class="img-fluid" src="<?= base_url('assets/') ?>images/testimonials-2-men-talking.svg" alt="alternative">
					</div> <!-- end of image-container -->
				</div> <!-- end of col -->
				<div class="col-lg-6">
					<h2>About Me</h2>

					<!-- Card Slider -->
					<div class="slider-container">
						<div class="swiper-container card-slider">
							<div class="swiper-wrapper">

								<!-- Slide -->
								<div class="swiper-slide">
									<div class="card">
										<img class="card-image" src="<?= base_url('assets/') ?>images/testimonial-1.svg" alt="alternative">
										<div class="card-body">
											<p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Evolo right away at the special price.</p>
											<p class="testimonial-author">Elvin Dwi Hendrawan - Web Developer</p>
										</div>
									</div>
								</div> <!-- end of swiper-slide -->
								<!-- end of slide -->

							</div> <!-- end of swiper-wrapper -->

							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<!-- end of add arrows -->

						</div> <!-- end of swiper-container -->
					</div> <!-- end of slider-container -->
					<!-- end of card slider -->

				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of basic-4 -->
	<!-- end of about -->


	<!-- Contact -->
	<div id="contact" class="form-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Contact Information</h2>
					<ul class="list-unstyled li-space-lg">
						<li class="address">Don't hesitate to give us a call or send us a contact form message</li>
						<li><i class="fas fa-map-marker-alt"></i>Jl. Wahidin Sudiro Husodo, Ds. Pepe RT 06, Trirenggo, Bantul, Bantul, DIY.</li>
						<li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+62 81 2298 512 07</a></li>
						<li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">elvinhndrwn@gmail.com</a></li>
					</ul>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
			<div class="row">
				<div class="col-lg-6">
					<div class="map-responsive">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126464.76297951362!2d110.27029975820314!3d-7.892574100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a55e5dc5441db%3A0xa460f42c0640af73!2sToko%20NN%20Elvin!5e0!3m2!1sid!2sid!4v1602094901497!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div> <!-- end of col -->
				<div class="col-lg-6">

					<!-- Contact Form -->
					<form id="contactForm" data-toggle="validator" data-focus="false">
						<div class="form-group">
							<input type="text" class="form-control-input" id="cname" required>
							<label class="label-control" for="cname">Name</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control-input" id="cemail" required>
							<label class="label-control" for="cemail">Email</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<textarea class="form-control-textarea" id="cmessage" required></textarea>
							<label class="label-control" for="cmessage">Your message</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
						</div>
						<div class="form-message">
							<div id="cmsgSubmit" class="h3 text-center hidden"></div>
						</div>
					</form>
					<!-- end of contact form -->

				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of form-2 -->
	<!-- end of contact -->


	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-col">
						<h4>About Evolo</h4>
						<p>We're passionate about offering some of the best business growth services for startups</p>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col middle">
						<h4>Important Links</h4>
						<ul class="list-unstyled li-space-lg">
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
							</li>
						</ul>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col last">
						<h4>Social Media</h4>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-facebook-f fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-twitter fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-google-plus-g fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-instagram fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-linkedin-in fa-stack-1x"></i>
							</a>
						</span>
					</div> 
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of footer -->  
	<!-- end of footer -->


	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved // Elvin Dwi Hendrawan</p>
				</div> <!-- end of col -->
			</div> <!-- enf of row -->
		</div> <!-- end of container -->
	</div> <!-- end of copyright --> 
	<!-- end of copyright -->


	<!-- Scripts -->
	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="<?= base_url('assets/') ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
	<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
	<script src="<?= base_url('assets/') ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
	<script src="<?= base_url('assets/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
	<script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
	<script src="<?= base_url('assets/') ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
	<script src="<?= base_url('assets/') ?>js/scripts.js"></script> <!-- Custom scripts -->
	<script type="text/javascript" src="<?php echo base_url('assets/') ?>aos.js"></script>
	<script>
		AOS.init({duration: 1500, easing: "ease"});

		$(document).ready(function(){
			var url = "<?php echo site_url('page/')?>";

				// GET CITY
				$('.province').on('change', function(){
					var province_id = $(".province").val();

					$.ajax({
						url: url + 'get_city/' + province_id,
						type: 'GET',
						cache: false,
						success: function(data) {
							$(".city").html(data);
						}
					});
				});

				// GET PROVINCE TO
				$('.city').on('change', function(){

					$.ajax({
						url: url + 'get_province_to',
						type: 'GET',
						cache: false,
						success: function(data) {
							$(".province_to").html(data);
						}
					});
				});

				$('.province_to').on('change', function(){
					var province_id = $(".province_to").val();

					$.ajax({
						url: url + 'get_city/' + province_id,
						type: 'GET',
						cache: false,
						success: function(data) {
							$(".city_to").html(data);
						}
					});
				});

				$('.cek_ongkir').on('click', function(){
					var city = $('.city').val();
					var city_to = $('.city_to').val();
					var kurir = $('.kurir').val();
					var berat = $('.berat').val();

					$.ajax({
						url: url + 'get_cost/' + city + '/' + city_to + '/' + berat + '/' + kurir,
						type: 'GET',
						cache: false,
						success: function(data) {
							$("#title_result_ongkir").text('Harga Ongkos Kirim :').hide().fadeIn(2000);
							$(".result_ongkir").html(data).hide().fadeIn(2000);
						}
					});
				});
			});
		</script>
	</body>
	</html>