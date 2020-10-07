<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>style.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>aos.css"/>

	<title>CEK ONGKIRKU!</title>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
		<a class="navbar-brand" href="#">cek ongkirku!</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-link active" href="#">Home
					<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#cek-ongkir">Cek Ongkir</a>
					<a class="nav-item nav-link" href="#ekspedisi">Ekspedisi</a>
					<a class="nav-item nav-link" href="#about">About</a>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<!-- Jumbotron -->
		<div class="jumbotron jumbotron-fluid" style="background-image: url('assets/img/3999798.jpg');">
			<div class="container">
				<h1 class="display-4" data-aos="zoom-in-down">
					Cara cepat cek
					<span>harga ongkir</span>
					<br/>
					hanya di
					<span>cekongkirku.com</span>
				</h1>
			</div>
		</div>
		<!-- End Jumbotron -->

		<img data-aos="fade-up-right" src="<?php echo base_url() ?>/assets/img/moto.png" alt="" class="img-moto"/>
		<img data-aos="fade-up-left" src="<?php echo base_url() ?>/assets/img/moto2.png" alt="" class="img-moto2 float-right"/>
		<!-- Cek Ongkir -->
		<section id="cek-ongkir">
			<h3 class="title-section">Silahkan
				<span>cek ongkir mu</span>
			disini!</h3>
			<div class="row justify-content-center">
				<div class="col-7">
					<table class="table">
						<tr>
							<td>Provinsi Asal</td>
							<td>
								<select class="form-control" name="province" id="province" style="border-radius: 40px">
									<option disabled selected>-Pilih Provinsi-</option>
									<?php 
									for ($i=0; $i < count($prov['rajaongkir']['results']); $i++) { ?>

										<option value="<?php echo $prov['rajaongkir']['results'][$i]['province_id'] ?>"><?php echo $prov['rajaongkir']['results'][$i]['province'] ?></option>

									<?php } ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>Kota Asal</td>
							<td>
								<select class="form-control" name="city" id="city" style="border-radius: 40px">
									<option>-Pilih Kota-</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Provinsi Tujuan</td>
							<td>
								<select class="form-control" name="province_to" id="province_to" style="border-radius: 40px">
									<option>-Pilih Provinsi-</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Kota Tujuan</td>
							<td>
								<select class="form-control" name="city_to" id="city_to" style="border-radius: 40px">
									<option>-Pilih Kota-</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Kurir</td>
							<td>
								<select class="form-control" name="kurir" id="kurir" style="border-radius: 40px">
									<option disabled selected>-Pilih Kurir-</option>
									<option value="jne">JNE</option>
									<option value="pos">POS</option>
									<option value="tiki">TIKI</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Berat (gram)</td>
							<td>
								<input type="text" name="berat" class="form-control" id="berat">
							</td>
						</tr>

					</table>
<!--           <input type="text" name="kota_asal" id="kota_asal" class="form-control mb-3" placeholder="Kota Asal..." data-aos="fade-right"/>

          <input type="text" name="kota_tujuan" id="kota_tujuan" class="form-control mb-3" placeholder="Kota Tujuan..." data-aos="fade-left"/>

          <div class="input-group" data-aos="flip-right">
            <input type="text" name="berat" class="form-control" id="berat" placeholder="Berat..."/>
            <div class="input-group-prepend">
              <div class="input-group-text">Gram</div>
            </div>
        </div> -->

        <button class="btn mt-4 float-right tombol btn-block" data-aos="zoom-in">
        	Cek Ongkir !
        </button>
    </div>
</div>
</section>
<!-- End Cek Ongkir -->

<!-- Ekspedisi -->
<section id="ekspedisi">
	<h3 class="title-section">Ekspedisi yang
		<span>tersedia</span></h3>
		<div class="row ekspedisi justify-content-center">
			<div class="col d-flex justify-content-center">
				<img src="<?php echo base_url() ?>/assets/img/jne.png" alt="Jne" class="img-ekspedisi" data-aos="fade-right"/>
			</div>
			<div class="col d-flex justify-content-center">
				<img src="<?php echo base_url() ?>/assets/img/jnt.png" alt="Jne" class="img-ekspedisi" data-aos="fade-right"/>
			</div>
			<div class="col d-flex justify-content-center">
				<img src="<?php echo base_url() ?>/assets/img/pos.png" alt="Jne" class="img-ekspedisi" data-aos="fade-left"/>
			</div>
			<div class="col d-flex justify-content-center">
				<img src="<?php echo base_url() ?>/assets/img/sicepat.png" alt="Jne" class="img-ekspedisi" data-aos="fade-left"/>
			</div>
		</div>
	</section>
	<!-- End Ekspedisi -->

	<!-- About -->
	<section id="about">
		<h3 class="title-section">About
			<span>Cek Ongkirku!</span></h3>
			<div class="row d-flex justify-content-center">
				<div class="col d-flex justify-content-center">
					<img id="img-startup" src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="fade-right"/>
				</div>

				<div class="col pr-5 text-about" data-aos="fade-left">
					<h3>PT. Cek Ongkir</h3>
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, officiis.
					</p>
					<p style="text-align: justify">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloribus hic distinctio, iusto sint dolore consectetur omnis quos commodi nemo officia at, quasi neque reprehenderit architecto dolorem accusamus, officiis quibusdam.
					</p>
					<div class="row img-about">
						<div class="col">
							<img src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="flip-left"/>
						</div>
						<div class="col">
							<img src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="flip-right"/>
						</div>
						<div class="col">
							<img src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="flip-left"/>
						</div>
						<div class="col">
							<img src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="flip-right"/>
						</div>
						<div class="col">
							<img src="https://kit8.net/images/thumbnails/580/386/detailed/4/startup_5cpe-xf@2x.png" alt="" data-aos="flip-left"/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Contact -->
		<section id="contact">
			<div class="row d-flex justify-content-center">
				<div class="col d-flex justify-content-center">
					<h2>&copy; 2020 Cek Ongkirku! Elvin Dwi Hendrawan - Yogyakarta</h2>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>aos.js"></script>
		<script>
			AOS.init({duration: 1500, easing: "ease"});

			$(document).ready(function(){
				var url = "<?php echo site_url('page/')?>";

				// GET CITY
				$('#province').on('change', function(){
					var province_id = $("#province").val();

					$.ajax({
						url: url + 'get_city/' + province_id,
						type: 'GET',
						cache: false,
						success: function(data) {
							$("#city").html(data);
						}
					});
				});

				// GET PROVINCE TO
				$('#city').on('change', function(){

					$.ajax({
						url: url + 'get_province_to',
						type: 'GET',
						cache: false,
						success: function(data) {
							$("#province_to").html(data);
						}
					});
				});

				$('#province_to').on('change', function(){
					var province_id = $("#province_to").val();

					$.ajax({
						url: url + 'get_city/' + province_id,
						type: 'GET',
						cache: false,
						success: function(data) {
							$("#city_to").html(data);
						}
					});
				});
			});
		</script>
	</body>

	</html>
