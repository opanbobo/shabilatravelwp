<?php wp_footer();?>
<section id="bottomnav">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h6 class="fw-bold mb-3">Head Office Shabilla Travel</h6>
        <small class="fw-light">
          Jl. Jatimakmur raya, <br>
          Ruko Pesona Taman Mini Blok 3, <br>
          No.06 ( Di Depan Perum Duta Indah ) <br>
          Jatimakmur, Pondok Gede - Bekasi<br><br></small>
          <small>
            Fax : 021 – 8499 8500<br>
            Phone : 021 – 8499 8500 <br>
            Email : info@shabilltravels.com
          </small>
      </div>
      <div class="col-md-3 mt-4 mt-md-0">
        <h6 class="fw-bold">Helpfull Link</h6>
        <ul class="list-unstyled">
          <li class="my-2"><a href="<?php echo get_page_link( get_page_by_title( 'Jadwal Keberangkatan' ) ); ?>" class="text-white fs-6">Jadwal Keberangkatan</a></li>
          <li class="my-2"><a href="<?php echo get_page_link( get_page_by_title( 'Promo' ) ); ?>" class="text-white fs-6">Latest Promo</a></li>
          <li class="my-2"><a href="<?php echo get_page_link( get_page_by_title( 'Ketentuan' ) ); ?>" class="text-white fs-6">Syarat &amp; Ketentuan</a></li>
          <li class="my-2"><a href="<?php echo get_page_link( get_page_by_title( 'Gallery' ) ); ?>" class="text-white fs-6">Photo Gallery</a></li>
          <li class="my-2"><a href="<?php echo get_page_link( get_page_by_title( 'Pendaftaran' ) ); ?>" class="text-white fs-6">Pendaftaran</a></li>
        </ul>
      </div>
      <div class="col-md-5 mt-4 mt-md-0">
        <h6 class="fw-bold">Our Partner</h6>
        <img src="<?php bloginfo('template_url'); ?>/images/partner.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-sm-start mb-3 mb-sm-0">
        Copyright @ 2022 - All Right Reserved
      </div>
      <div class="col-md-6 text-md-right">
        <ul class="list-inline text-center text-md-end mb-0">
          <li class="list-inline-item"><a href="tel:+6285162529993" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-1.png" alt="Shabilla Travel Phone"></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/shabilla_travel/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-2.png" alt="Shabilla Travel Instagram"></a></li>
          <li class="list-inline-item"><a href="https://wa.me/6285162529993/?text=Hi%20Shabilla%20Travel,%20Saya%20ingin%20tahu%20lebih%20lanjut!" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-3.png" alt="Shabilla Travel Whatsapp"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    <script src="<?php bloginfo('template_url'); ?>/scripts/vendor.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/custom.js"></script>
  </body>
</html>
