<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFBF0;
	font-size: 42px;
	font-weight: bold;
}
-->
.info a span {
    font-size: 40px;
  }
  .info a {
    
    margin-right: 25px; 
  }
</style>

<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/mie3.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span></p>
            <h1 class="style1">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Alamat</span> <?php echo get_settings('store_address'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p class="mt-4 ml-4"> 
              <a href="https://wa.me/6281278677527"> <span class="icon-whatsapp"></span></a>
              <a href="https://www.facebook.com/sudahteruji/?locale=id_ID "> <span class="icon-facebook"></span></a>
              <a href="https://instagram.com/mieayamberkah2022?igshid=MzRlODBiNWFlZA=="> <span class="icon-instagram"></span></a>
              </p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <?php echo get_settings('store_email'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> www.Warungkuningan.com</p>
            </div>
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
