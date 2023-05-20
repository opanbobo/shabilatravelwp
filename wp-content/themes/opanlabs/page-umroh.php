<?php get_header();
/*
Template Name: Paket Umroh
*/
?>

    <section class="py-5 bg-pattern-green">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-white text-center">
          <?php
            $welcomeFB = get_field('top_info');  ?>
            <h2 class="text-white"><?php echo $welcomeFB['title']; ?></h2>
            <p class="text-primary fw-bold mb-md-5"><?php echo $welcomeFB['tahun']; ?></p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="statistic price position-relative">
            <?php
            $harga = get_field('paket_umroh');  ?>
              <li>
                <h3>
                  <span>Quard</span>
                  <sup>Rp</sup> <?php echo $harga['quard']; ?>
                </h3>
              </li>
              <li>
                <h3>
                  <span>Triple</span>
                  <sup>Rp</sup> <?php echo $harga['triple']; ?>
                </h3>
              </li>
              <li>
                <h3>
                  <span>Double</span>
                  <sup>Rp</sup> <?php echo $harga['double']; ?>
                </h3>
              </li>
            </ul>
          </div>
          <div class="col-md-6 text-center">
            <h3 class="mt-md-1">Hotel</h3>
            <?php 
          $nama2Hotel = get_field('hotel');
          if( $nama2Hotel ) {
            foreach( $nama2Hotel as $nama2Hotelx ) { 
            ?> 
            <h5 class="text-primary"><?php echo $nama2Hotelx['kota']; ?> : <small class="text-secondary"><?php echo $nama2Hotelx['nama_hotel']; ?></small></h5>
            <?php 
              } 
            }
          ?>
          </div>
          <div class="col-md-6 text-center">
            <h3 class="mt-md-1">Flight By</h3>
            <h5><small class="text-secondary">Turkish Airlines</small></h5>
          </div>
          <div class="col-md-7 text-center text-md-start mt-5 mt-md-0">
            <h2 class="mt-md-5 my-4">Itinerary</h2>
            <?php 
          $listKegiatan = get_field('kegiatan');
          if( $listKegiatan ) {
            foreach( $listKegiatan as $listKegiatanx ) { 
            ?> 
            <h5 class="text-secondary">Hari Ke <?php echo $listKegiatanx['hari']; ?></h5>
              <?php echo $listKegiatanx['isi_kegiatan']; ?>
            <?php 
                } 
              }
            ?>
          </div>
          <div class="col-md-5 text-center align-self-center">
            <img src="<?php bloginfo('template_url'); ?>/images/asset-1.png" alt="shabilla travel" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    
   <?php get_footer();?>