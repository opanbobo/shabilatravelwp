<!doctype html>
<html class="no-js" lang="ID">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Shabilla Travel berpengalaman sejak tahun 2000 yang sudah melayani jama'ah Haji, Umroh serta Tour Domestik dan Internasional yang sudah memiliki ijin dari Kementerian Agama">
    <meta name="keywords" content="shabilla, shabilla travel, Shabilla Umroh, PT. Shabilla Eraldo Utama, travel, umroh, haji. berkualitas, murah, terjangkau, bekasi, puas, jamaah, tour, biaya umroh, birojasa umroh, tiket pesawat omestik, tiket pesawat Internasional">
    <meta name="author" content="Shabilla Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shabilla Travel</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="<?php bloginfo('template_url'); ?>/image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon-32x32.png">
    <link rel="icon" type="<?php bloginfo('template_url'); ?>/image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon-16x16.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/scripts/modernizr.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-expand-md fixed-top d-inline-block pt-0">
      <div class="top-info">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="top-info-detail">
                <li class="first-separator">
                  <a href="https://wa.me/6285162529993/?text=Hi%20Shabilla%20Travel,%20Saya%20ingin%20tahu%20lebih%20lanjut!">
                    <img src="<?php bloginfo('template_url'); ?>/images/icon-4.png" alt="">
                    0851 6252 9993 
                  </a>
                </li>
                <li>
                  <a href="tel:+62184998500">
                    <img src="<?php bloginfo('template_url'); ?>/images/icon-6.png" alt="">
                    021 – 8499 8500 
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 text-md-end">
              <ul class="top-info-detail">
                <li>
                  <a href="mailto:shabillaumroh@yahoo.co.id">
                    <img src="<?php bloginfo('template_url'); ?>/images/icon-5.png" alt="">
                    info@shabilltravels.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <a class="navbar-brand mt-md-2" href="index.html">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Shabilla Travel">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php wp_nav_menu( array(
            //  'theme_location' => 'menux',
            //  'container' => false,
              'menu_class' => 'navbar-nav ms-auto mb-2 mb-md-0',
              'walker' => new Walker_Nav_Menu(),
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            //  'container' => 'ul'
            //  wp_nav_menu()
          ));
        ?>
          <div class="ms-md-4 text-center text-md-start">
            <a href="https://wa.me/6285162529993/?text=Hi%20Shabilla%20Travel,%20Saya%20ingin%20tahu%20lebih%20lanjut!" class="btn btn-primary">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>