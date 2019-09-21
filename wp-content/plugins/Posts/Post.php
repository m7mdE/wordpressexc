<?php
/**
 * Plugin Name: Post Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Moe
 * Author URI: http://moemran.com/client/wps/about/
 */
 
 function custom_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Custom Post', 'textdomain' )
    );
    register_post_type( 'custom_post', $args );
}
add_action( 'init', 'custom_setup_post_type' );
 
add_shortcode( 'custom-post-list', 'custom_post_listing' );
function custom_post_listing( $atts ) {
 ob_start();
 $args=array(
      'post_type' => 'custom_post', // Post Type Slug
      'posts_per_page' =>-1, // Show All
   'order'=> 'Desc'
    );
     $new = new WP_Query($args);
    while ($new->have_posts()) : $new->the_post();
?>
    <div class="col-6">
<div class="single_post">
    <div class="post_title">
    <h4><a style="color:#000;" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
    </div>

    <?php  the_excerpt(); ?>
    <a hrev="<?php the_permalink(); ?>" class="btn btn-success white">Read More</a>
</div>
    </div>
 
<?php
    endwhile;
 wp_reset_query(); 
 $myvariable = ob_get_clean();
 return $myvariable;
}