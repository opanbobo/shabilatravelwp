<?php get_header();?>

    <section class="mt-5s">
      <div class="container">
        <div class="row">
        <?php while ( have_posts() ) : the_post();?>
          <div class="col-md-10 mx-auto my-5">
            <h1 class="text-center"><?php the_title();?></h1>
            <!-- <figure class="figure mt-3"> -->
            <?php the_post_thumbnail( 'full',array ('class' => 'img-fluid rounded figure-img') );?>
              <!-- <figcaption class="figure-caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illum, provident eaque impedit cum quas non porro voluptate molestias laborum soluta voluptatem accusantium rem, voluptas eligendi nihil, quo itaque in?</figcaption> -->
            <!-- </figure> -->
            <?php the_content();?>
          </div>
        <?php endwhile; // End of the loop.; ?>
        </div>
      </div>
    </section>
    
   <?php get_footer();?>