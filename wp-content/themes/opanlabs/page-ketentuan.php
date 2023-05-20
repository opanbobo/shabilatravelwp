<?php get_header();
/*
Template Name: SK
*/
?>
    <section class="mt-5s">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mt-5 mt-md-0">
          <?php
            $tidakMasuk = get_field('harga_paket_termasuk');  
            $harga_paket_termasuk = get_field('harga_paket_termasuk');  
          ?>
            <h2 class="mt-md-5">HARGA PAKET TERMASUK</h2>
            <?php echo $harga_paket_termasuk; ?>

            <h2 class="mt-md-5">HARGA PAKET TIDAK TERMASUK</h2>
            <?php echo $tidakMasuk; ?>
          </div>
          <div class="col-md-5 text-center align-self-end">
            <?php the_post_thumbnail( 'full',array ('class' => 'img-fluid') );?>
          </div>
          
        </div>
      </div>
    </section>
    
   <?php get_footer();?>