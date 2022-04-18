<?php

global $post;

$custom_options_page = get_field('custom_options_link', 'option');

$parent_id      = wp_get_post_parent_id( $post->ID );
$parent         = get_post( $parent_id );
$grandaddy_id   = wp_get_post_parent_id( $parent->ID );
$grandaddy      = get_post( $grandaddy_id );
if( $post->post_type == 'product_type' ){
  $product_process    = get_field('related_process', $post->ID); // array
  $product_process    = $product_process[0];
}else if( $post->post_type == 'typical_config' ){
  $product_type       = get_field('related_product_type', $post->ID);
  $product_industries = get_field('related_industries', $post->ID); // array
  $product_process    = get_field('related_process', $post->ID); // array
  $product_process    = $product_process[0];
}else{
  $product_type       = 0;
  $product_industries = 0;
  $product_process    = 0;
}






?>

<section class="breadcrumbs row py-3">
  <div class="col">
    <div class="container">

      <div class="row">

        <div class="col-12">
          <span>
            <a href="/">Home</a>
          </span>

        <!-- Grandparent Page or Process -->
        <?php if( $grandaddy_id != 0 ): ?>
          <span>
            <a href="<?php echo get_the_permalink($grandaddy->ID); ?>"><?php echo $grandaddy->post_title; ?></a>
          </span>
        <?php endif; ?>

        <?php //if( is_array( $product_process ) ): ?>
          <?php if( $product_process != 0 ):   ?>
            <span>
              <a href="<?php echo get_the_permalink($product_process); ?>"><?php echo get_the_title($product_process); ?></a>
            </span>
          <?php endif; ?>
        <?php// endif; ?>

        <!-- Parent Page or Product Type -->
        <?php if( $parent_id != 0 ): ?>
          <span>
            <a href="<?php echo get_the_permalink($parent->ID); ?>"><?php echo $parent->post_title; ?></a>
          </span>
        <?php endif; ?>

        <?php if( $product_type != 0 ):?>
          <span>
            <a href="<?php echo get_the_permalink($product_type); ?>"><?php echo get_the_title($product_type); ?></a>
          </span>
        <?php endif; ?>


        <?php if( $post->post_title != '' ): ?>
            <span><?php echo $post->post_title; ?></span>
        <?php endif; ?>

        <?php if( url_to_postid( $custom_options_page['url'] ) == get_the_id() && !empty($_GET)  ): ?>
          <a href="<?php echo get_the_permalink();?>" class="float-right list-all-co d-inline-block"><i class="fas fa-th-list"></i> List All Custom Options</a>
        <?php endif; ?>

        </div>
      </div>


    </div> <!-- container -->
  </div> <!-- col -->
</section>
