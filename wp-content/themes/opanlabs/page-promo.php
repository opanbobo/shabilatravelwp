<?php get_header();
/*
Template Name: Promo
*/
?>

    <section class="mt-5s">
      <div class="container">
        <div class="row">
         <div class="col-12">
            <div class="row g-2">
            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_status' => 'publish',
              'category_name' => 'promo',
              'posts_per_page' => 6,
              'paged' => $paged
            );
            $arr_posts = new WP_Query( $args );

            // if ( $arr_posts->have_posts() ) :

              while ( $arr_posts->have_posts() ) :
                  $arr_posts->the_post();
            ?> 
              <div class="col-6 mb-4">
                <a href="<?php the_permalink(); ?>" class="gallery-thumb">
                  <?php the_post_thumbnail();?>
                  <h6 class="mt-1"><?php the_title();?></h6>
                </a>
              </div>
             <?php
             endwhile;
                    
             // endif;
             wp_pagenavi( array( 'query' => $arr_posts ) );
             wp_reset_query();
             ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   <?php get_footer();?>