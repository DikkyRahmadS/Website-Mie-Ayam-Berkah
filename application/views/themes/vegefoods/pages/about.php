<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.image-container {
			position: relative;
			overflow: hidden;
		}

		.image-container img {
			transition: transform 0.3s;
		}

		.image-container:hover img {
			transform: scale(1.1);
		}

		.image-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			color: white;
			opacity: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: opacity 0.3s;
		}

		.image-container:hover .image-overlay {
			opacity: 1;
		}

		.visi {
			background-image: url(<?php echo get_theme_uri('images/gambar4.jpg'); ?>);
		}

		.background-overlay {
			content: '';
			background-color: rgba(192, 192, 192, 0.7);
			/* Alpha 0.5 untuk 50% transparansi */
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.logo-gambar {
			width: 300px;
			height: 300px;
		}


		.carousel {
			margin-top: 20px;
		}

		.carousel-inner {
			height: 550px;
		}

		.carousel-caption {
			color: #fff;
			top: 50%;
		}

		.slidervisi {
			background-color: #82ae46;
		}
	</style>
</head>

<body>
	<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/mie3.jpg'); ?>');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p>
					<h1 class="mb-0 bread">Tentang Kami</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_theme_uri('images/,,.jpeg'); ?>);">

				</div>
				<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section-bold mb-4 mt-md-5">
						<div class="ml-md-0">
							<h2 class="mb-4">Selamat Datang di Toko Online <?php echo get_store_name(); ?></h2>
						</div>
					</div>
					<div class="pb-md-5">
						<p><?php echo get_settings('store_description'); ?></p>
						<p><a href="<?php echo site_url('browse'); ?>" class="btn btn-danger">Belanja sekarang!</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section galeri-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Galeri</span>
					<h2 class="mb-4">Sertifikat PD.Mie Ayam Berkah</h2>
				</div>
			</div>
			<div class="row justify-content-center ftco-animate">
				<div class="col-md-5 mb-4">
					<div class="image-container">
						<img src="<?php echo base_url('stok gambar/gambar1.jpg'); ?>" alt="Gambar 1" class="img-fluid " style="height:680px;">
						<div class="image-overlay">
							<h4 class="ml-2">Nominasi Bogasari SME Award 2015 Platinum Category</h4>
						</div>
					</div>
				</div>
				<div class="col-md-5 mb-4">
					<div class="row justify-content-center">
						<div class="image-container mb-2">
							<img src="<?php echo base_url('stok gambar/gambar2.jpg'); ?>" alt="Gambar 2" class="img-fluid">
							<div class="image-overlay">
								<h4 class="ml-2">Piagam Penghargaan Festival Mie Ayam Kelompok Mie Palembang 2019</h4>
							</div>
						</div>
						<div class="image-container">
							<img src="<?php echo base_url('stok gambar/gambar3.jpg'); ?>" alt="Gambar 3" class="img-fluid">
							<div class="image-overlay">
								<h4 class="ml-2">Sertifikat Dinas Perindustrian Sumatra Selatan Keamanan Pangan 2019</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>


	<section class="ftco-section img visi">
		<div class="background-overlay"></div>
		<div class="container">
			<div class="row justify-content">
				<div class="col-md-5">
					<img src="<?php echo base_url('stok gambar/logo1.png'); ?>" alt="Logo" class="logo-gambar">
				</div>
				<div class="col-md-7 heading-section ftco-animate slidervisi ftco-animate">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="carousel-caption">
									<h3>Visi</h3>
									<p>Menjadi perusahaan regional dan nasional yang berdedikasi untuk meningkatkan kualitas produksi melalui penggunaan sumber daya manusia yang handal, produktif dan kemitraan jangka panjang berdasarkan ekonomi kerakyatan.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-caption">
									<h3>Misi</h3>
									<p>1. Memberikan pelayanan terbaik kepada pelanggan <br>
										2. Menjual produk bahan makanan mie yang berkualitas tinggi <br>
										3. Melayani masyarakat melalui standar pelayanan prima<br>
										4. Pendayagunaan pengangguran
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-caption">
									<h3>Motto</h3>
									<p>Bersatu bersama kita bisa</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-caption">
									<h3>Sejarah</h3>
									<p>PD Mie Ayam Berkah didirikan pada tanggal 27 juli 1997. Berlokasi di jalan social, NO.323 KM5 Palembang. Modal awal RP.2,5 juta. Dikerjakan secara manual (giling ampya) dengan 5 orang pekerja. (produksi 2 orang dan pendorong grobak 3 orang).
										Pada tahun 1998, fahruddin ikut pelatihan tehnis mie oleh PT. Bogo Sari ke Jakarta. Kemudian mendapat modal dari orang tua sebesar 5 juta dan dibelikan 1 buah mesin pemotong bekas dari Jakarta. Dan menjadi 10 gerobak dorong
										Pada tahub 1999 mendapat bantuan modal ventura RP.12 juta lalu di belikan 2 buah komponen mesin bekas/second yaitu mesin aduk dan mesin pres-potong. Pada tahun 2000 gerobak telah mencapai 30 buah dan tenaga kerja bagian produksi menjadi 3 orang.
										Pada tahun 2005 PD.Mie Ayam Berkah mulai membuka cabang pabrik di prabumulih. Kemudian pada tahun 2008 membuka pelatihan mie ayam prive. Yang tiikuti sebanyak 40 orang se-sumsel.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-caption">
									<h3>Struktur Organisasi</h3>
									<img src="<?php echo base_url('stok gambar/struktur.jpg'); ?>" alt="Gambar 2" class="img-fluid">
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<?php if (count($reviews) > 0) : ?>
							<?php foreach ($reviews as $review) : ?>
								<div class="item">
									<div class="testimony-wrap p-4 pb-5">
										<div class="user-img mb-5" style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
											<p class="name"><?php echo $review->name; ?></p>
											<span class="position"><?php echo get_formatted_date($review->review_date); ?></span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php else : ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section" id="products">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Kualitas Rasa No 1</h3>
							<span>Rasa Dijamin Mantap t</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Kebersihan Terjamin</h3>
							<span>Sehat Tanpa Bahan Pengawet </span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Bantuan</h3>
							<span>Bantuan 24/7 Selalu Online</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>