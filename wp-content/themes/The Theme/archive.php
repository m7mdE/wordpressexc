<?php get_header(); ?>


<!-- Main Content -->
<div class="container pt-5 pb-5">
    
        <h1><?php single_cat_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

           <?php the_excerpt(); ?>

        <?php endwhile; endif;?>

  </div>


<?php get_footer(); ?>