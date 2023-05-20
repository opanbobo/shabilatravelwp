<?php get_header();?>

    <section class="mt-5s">
      <div class="container">
        <div class="row">
        <?php while ( have_posts() ) : the_post();?>
          <div class="col-md-10 mx-auto my-5">
            <h1><?php the_title();?></h1>
            <span class="fs-6">Publish by : <?php echo get_the_author_meta('display_name', $author_id);?> - Posted : <?php echo get_the_date('d M Y'); ?></span>
            <figure class="figure mt-3">
            <?php the_post_thumbnail( 'full',array ('class' => 'img-fluid rounded figure-img') );?>
            <?php
            $summaryPost = get_field('summary');  ?>
              <figcaption class="figure-caption"><?php echo $summaryPost;?></figcaption>
            </figure>
            <?php the_content();?>
          </div>
        <?php endwhile; // End of the loop.; ?>
        </div>
      </div>
    </section>
    
   <?php get_footer();?>