<?php get_header();
/*
Template Name: Home
*/
?>
    <section id="home">
      <div class="slider-service">
      <?php 
        $homeTopSliders = get_field('top_sliders');
        if( $homeTopSliders ) {
        foreach( $homeTopSliders as $homeTopSlidersx ) { 
      ?> 
        <div class="position-relative">
          <div class="slider-wrapper">
            <div class="slider-thumb">
              <img class="img-fluid" src="<?php echo esc_url( $homeTopSlidersx['img']['url'] ); ?>"  />
            </div>
            <div class="slider-caption">
              <h3 class="text-white mb-4 fs-3"><?php echo $homeTopSlidersx['title']; ?></h3>
              <p class="fw-lighter mb-3"><?php echo $homeTopSlidersx['descriptions']; ?></p>
              <a href="<?php echo get_page_link( get_page_by_title( 'promo' ) ); ?>" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php 
            } 
          }
        ?>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="row">
        <?php
            $homeVision = get_field('home_vision');  ?>
          <div class="col-md-7 order-md-3 align-self-center text-center text-md-start mt-5 mt-md-0">
            <h2>About Shabilla Travel </h2>
            <?php echo $homeVision['about']; ?>
            <hr>
            <h2>Our Vision</h2>
            <?php echo $homeVision['vision']; ?>
            <hr>
            <h2>Our Mission</h2>
            <?php echo $homeVision['mission']; ?>
          </div>
          <div class="col-md-5 text-center order-md-2">
            <img src="<?php echo esc_url( $homeVision['img']['url'] ); ?>" class="img-fluid">
          </div>
          <div class="col-12 order-md-1">
          <?php
            $afterSliders = get_field('after_sliders');  ?>
            <ul class="statistic position-relative">
              <li>
                <h2>
                  <span>Berdiri sejak tahun</span>
                  <?php echo $afterSliders['berdiri_sejak']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Total Jamaah</span>
                  <?php echo $afterSliders['total']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Jamaah Terpuaskan</span>
                  <?php echo $afterSliders['jamaah_terpuaskan']; ?>
                </h2>
              </li>
              <li>
                <h2>
                  <span>Service Guarantee</span>
                  <?php echo $afterSliders['service_guarantee']; ?>
                </h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <section id="service">
      <div class="container-fluid px-0">
      <?php
        $paketUmroh = get_field('paket_umroh');  ?>
        <div class="d-flex flex-column flex-md-row">
          <div class="col-md-4">
            <a href="<?php echo get_page_link( get_page_by_title( 'Umroh Regular' ) ); ?>" class="service-thumb">
              <img src="<?php bloginfo('template_url'); ?>/images/img-1.jpg" alt="">
              <div class="service-caption d-flex flex-column align-items-center p-3">
                <h3 class="text-white fw-bold text-uppercase">Paket Umroh Reguler</h3>
                <p class="mb-0">Starts from</p>
                <h1 class="text-white fw-bold">Rp <?php echo $paketUmroh['harga_reguler']; ?></h1>
                <span class="btn btn-primary fs-6">Selengkapnya</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo get_page_link( get_page_by_title( 'Umroh Ekonomis' ) ); ?>" class="service-thumb">
              <img src="<?php bloginfo('template_url'); ?>/images/img-2.jpg" alt="">
              <div class="service-caption d-flex flex-column align-items-center p-3">
                <h3 class="text-white fw-bold text-uppercase">Paket Umroh Ekonomis</h3>
                <p class="mb-0">Starts from</p>
                <h1 class="text-white fw-bold">Rp <?php echo $paketUmroh['harga_ekonomis']; ?></h1>
                <span class="btn btn-primary fs-6">Selengkapnya</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo get_page_link( get_page_by_title( 'Umroh Plus Turki' ) ); ?>" class="service-thumb">
              <img src="<?php bloginfo('template_url'); ?>/images/img-3.jpg" alt="">
              <div class="service-caption d-flex flex-column align-items-center p-3">
                <h3 class="text-white fw-bold text-uppercase">Paket Umroh Plus Turki</h3>
                <p class="mb-0">Starts from</p>
                <h1 class="text-white fw-bold">Rp <?php echo $paketUmroh['harga_plus_turki']; ?></h1>
                <span class="btn btn-primary fs-6">Selengkapnya</span>
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </section>

    <section id="gallery" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <h1>Photo Gallery</h1>
            <p>Dokumentasi Foto Keberangkatan Umroh & Haji</p>
          </div>
        </div>
        <?php
        $galleryHome = get_field('gallery');  ?>
        <div class="row gy-4 justify-content-center">
          <div class="col-md-6 col-6">
            <a href="<?php echo esc_url( $galleryHome['img_panjang']['url'] ); ?>" class="img-frame img-frame--landscape" target="_blank" data-lightbox="home-gallery">
              <img src="<?php echo esc_url( $galleryHome['img_panjang']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-square">
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="<?php echo esc_url( $galleryHome['img_kecil']['url'] ); ?>" class="img-frame" target="_blank" data-lightbox="home-gallery">
              <img src="<?php echo esc_url( $galleryHome['img_kecil']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="<?php echo esc_url( $galleryHome['img_kecil_2']['url'] ); ?>" class="img-frame" target="_blank" data-lightbox="home-gallery">
              <img src="<?php echo esc_url( $galleryHome['img_kecil_2']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
            </a>
          </div>
          <div class="col-md-3 col-6">
            <div class="row gy-4">
              <div class="col-12">
                <a href="<?php echo esc_url( $galleryHome['img_kecil_4']['url'] ); ?>" class="img-frame" target="_blank" data-lightbox="home-gallery">
                  <img src="<?php echo esc_url( $galleryHome['img_kecil_4']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
                </a>
              </div>
              <div class="col-12 d-none d-md-block">
                <a href="<?php echo esc_url( $galleryHome['img_kecil_5']['url'] ); ?>" class="img-frame" target="_blank" data-lightbox="home-gallery">
                  <img src="<?php echo esc_url( $galleryHome['img_kecil_5']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 d-md-none">
            <a href="<?php bloginfo('template_url'); ?>/images/gallery/shabilla-6.jpg" class="img-frame" target="_blank" data-lightbox="home-gallery">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/shabilla-6.jpg" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
            </a>
          </div>
          <div class="col-md-6 col-6">
            <a href="<?php echo esc_url( $galleryHome['img_besar']['url'] ); ?>" class="img-frame" target="_blank" data-lightbox="home-gallery">
              <img src="<?php echo esc_url( $galleryHome['img_besar']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid img-landscape">
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="<?php echo esc_url( $galleryHome['img_besar_tinggi']['url'] ); ?>" class="img-self" target="_blank" data-lightbox="home-gallery">
              <img src="<?php echo esc_url( $galleryHome['img_besar_tinggi']['url'] ); ?>" alt="Jamaah haji dan umroh Shabilla Travel" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonial">
      <div class="container">
        <div class="row">
        <?php
        $dokumentasi = get_field('dokumentasi');  ?>
          <div class="col-md-6 mb-md-4 text-center text-md-start">
            <h3 class="mt-md-5"><?php echo $dokumentasi['title']; ?></h3>
            <p class="text-white"><?php echo $dokumentasi['description']; ?></p>
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/<?php echo $dokumentasi['link_youtube']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-5 offset-md-1 align-self-end">
            <img src="<?php echo esc_url( $dokumentasi['img']['url'] ); ?>" alt="Shabilla Travel Testimonial" class="testi-img">
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-4">
            <h1>Apa Kata Mereka?</h1>
            <p>Testimonial para jamaah yang telah menggunakan shabilla travel</p>
          </div>
          <div class="col-12">
            <div class="slider-testi">
            <?php 
              $homeTesti = get_field('testimoni');
              if( $homeTesti ) {
              foreach( $homeTesti as $homeTestix ) { 
            ?>
              <div class="slider-wrapper text-center">
                <div class="testi-img">
                  <img src="<?php echo esc_url( $homeTestix['img']['url'] ); ?>" alt="" >
                </div>
                <h5 class="mb-1 font-weight-extrabold text-secondary"><?php echo $homeTestix['nama']; ?></h5>
                <small class="text-primary"><?php echo $homeTestix['alamat']; ?></small>
                <p class="testi-text">
                <?php echo $homeTestix['testimonial']; ?></p>
                <span class="testi-more">Show More</span>
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