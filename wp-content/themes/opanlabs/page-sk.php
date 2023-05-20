<?php get_header();
/*
Template Name: SK 2
*/
?>

    <section class="mt-5s">
      <div class="container">
        <div class="row">
          <?php while ( have_posts() ) : the_post();?>
          <div class="col-md-7 mt-5 mt-md-0">
            <h2 class="mt-md-5"><?php the_title();?></h2>
            <?php the_content();?>
          </div>
          <div class="col-md-5 text-center align-self-end">
            <?php the_post_thumbnail( 'full',array ('class' => 'img-fluid') );?>
          </div>
          <?php endwhile; // End of the loop.; ?>
        </div>
      </div>
    </section>
    
   <?php get_footer();?>