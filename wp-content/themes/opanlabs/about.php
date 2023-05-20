<?php get_header();
/*
Template Name: About
*/
?>
    <section class="mt-5s">
      <div class="container">
        <div class="row">
        <?php
          $aboutContent = get_field('about_content');  ?>
          <div class="col-md-6 offset-md-1 text-center text-md-start mt-5 mt-md-0">
            <h2 class="mt-md-5">About Shabilla Travel </h2>
            <?php echo $aboutContent['desc']; ?>
          </div>
          <div class="col-md-4 text-center align-self-end">
            <img src="<?php echo esc_url( $aboutContent['img']['url'] ); ?>" class="img-fluid">
          </div>
          <div class="col-12">
            <ul class="statistic position-relative mt-0">
            <?php
            $aboutTime = get_field('about_time');  ?>
              <li>
                <h2>
                  <span>Berdiri sejak tahun</span>
                  <?php echo $aboutTime['berdiri_sejak']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Total Jamaah</span>
                  <?php echo $aboutTime['total']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Jamaah Terpuaskan</span>
                  <?php echo $aboutTime['jamaah_puas']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Service Guarantee</span>
                  <?php echo $aboutTime['service_guarantee']; ?>
                </h2>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <?php
            $aboutVision = get_field('about_vision');  ?>
          <div class="col-md-7 align-self-center text-center text-md-start mt-5 mt-md-0 order-md-2">
            <h2 class="mt-md-5">Vision</h2>
            <?php echo $aboutVision['vision']; ?>
            <hr>
            <h2>Mision</h2>
            <?php echo $aboutVision['mission']; ?>
          </div>
          <div class="col-md-5 text-center align-self-end order-md-1">
            <img src="<?php echo esc_url( $aboutContent['img']['url'] ); ?>" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


    <section class="py-5 bg-pattern-green">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php
            $aboutHeadline = get_field('about_headline');  ?>
            <h2 class="text-white text-center fw-light"><?php echo $aboutHeadline['text']; ?></h2>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-4">
            <h1>Struktur Organisasi</h1>
            <p>PT. Shabilla Eraldo Utama</p>
          </div>
          <div class="col-12">
            <?php $aboutOrganisasi = get_field('about_struktur_organisasi'); ?>
            <img src="<?php echo esc_url( $aboutOrganisasi['img']['url'] ); ?>" class="img-fluid">
          </div>
          <div class="col-12">
            <div class="slider-team">
            <?php 
            $aboutMembers = get_field('about_sliders_member');
            if( $aboutMembers ) {
            foreach( $aboutMembers as $aboutMembersx ) { 
            ?> 
              <div class="slider-wrapper text-center">
                <div class="testi-img">
                  <img src="<?php echo esc_url( $aboutMembersx['img']['url'] ); ?>" alt="" >
                </div>
                <h5 class="mb-1 font-weight-extrabold text-secondary"><?php echo $aboutMembersx['nama']; ?></h5>
                <small class="text-primary"><?php echo $aboutMembersx['jabatan']; ?></small>
              </div>
              <?php 
                  } 
                }
              ?>
            </div> 
          </div>
        </div>
      </div>
    </section>
    
  <?php get_footer();?>