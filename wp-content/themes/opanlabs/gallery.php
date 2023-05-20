<?php get_header();
/*
Template Name: Gallery
*/
?>

    <section class="py-5 bg-pattern-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-4">
            <h1>Photo Gallery</h1>
            <p>Dokumentasi Foto Keberangkatan Umroh & Haji</p>
          </div>
          <div class="col-12">
            <div class="row g-2">
            <?php 
            $galleryImg = get_field('image_gallery');
            if( $galleryImg ) {
            foreach( $galleryImg as $galleryImgx ) { 
            ?> 
              <div class="col-md-3 col-6">
                <a href="<?php echo esc_url( $galleryImgx['img']['url'] ); ?>" data-lightbox="gallery" class="gallery-thumb">
                  <img src="<?php echo esc_url( $galleryImgx['img']['url'] ); ?>" class="img-fluid">
                </a>
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