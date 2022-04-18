<?php
global $post;
$post_slug = $post->post_name;

if( get_post_type() == 'typical_config' ){
  $custom_options = get_field('config_related_custom_options');
}
if( get_post_type() == 'product_type' ){
  $custom_options = get_field('featured_custom_options');
  $custom_options_page = get_field('custom_options_link', 'option');
}

if( $_GET ){
  $product = get_page_by_path( $_GET['custom_options_for'], 'object', 'product_type' );
  if( is_object( $product ) ){
    $product_custom_options = get_field('related_custom_options', $product->ID);
  }else{
    $product_custom_options = '';
  }
}else{
  $product = '';
  $product_custom_options = '';
}


if( get_post_type() == 'page' ){
  $custom_options = get_posts( array(
    'post_type'      => 'custom_option',
    'posts_per_page' => 500,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order',
    'order'          => 'DESC',
) );
}


$accordion_array = array();
if( is_array($custom_options) ){
  foreach( $custom_options as $option_id ){
    $accordion = array();
    $accordion['title'] = get_the_title($option_id);
    $accordion['slug'] = get_post_field( 'post_name', $option_id );
    if( is_object($option_id) ){
      $accordion['ID'] = $option_id->ID;
    }else{
      $accordion['ID'] = $option_id;
    }

    $image = get_field('image', $option_id);
    if( is_array( $image ) ){
      $accordion['image'] = $image['sizes']['large'];
    }
    $accordion['headline'] = get_field('headline', $option_id);
    $accordion['description'] = get_field('description', $option_id);
    array_push($accordion_array, $accordion);
  }
}

?>
<?php if( sizeof($accordion_array) > 0 ): ?>
<section class="custom-option-accordion row pad-top-1 pad-bot-2">
  <div class="col px-0">

    <div class="container">

      <?php if( is_object($product) ): ?>

        <div class="row pb-5 custom-options-for">
          <div class="col">
            <h3>Showing Custom Options For: <a href="<?php echo get_the_permalink($product->ID); ?>"><?php echo get_the_title($product->ID); ?></a></h3>

          </div>
        </div>
      <?php endif; ?>


      <div class="accordion" id="custom_options_accordion">
          <?php foreach( $accordion_array as $index => $panel ): ?>



              <?php if( $panel['title'] != '' ): ?>



                <?php if( is_array($product_custom_options) ): ?>
                  <?php //print_r($panel); ?>
                  <?php if( !in_array( $panel['ID'], $product_custom_options  ) ): ?>
                    <?php $display = 'd-none'; ?>
                  <?php else: ?>
                    <?php $display = ''; ?>
                  <?php endif; ?>
                <?php endif; ?>

                <div class="card mb-4 <?php echo $display;?>" id="<?php echo $panel['slug']; ?>">
                  <div class="card-header py-3 pl-4 pr-5 text-left collapsed" id="heading_<?php echo $index; ?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse<?php echo $index; ?>">
                    <?php echo $panel['title']; ?>
                  </div>

                  <div id="collapse<?php echo $index; ?>" class="collapse" aria-labelledby="heading<?php echo $index; ?>" data-parent="#custom_options_accordion">
                    <div class="card-body text-left">
                      <div class="row py-5">
                        <div class="col-12 col-md-6">
                          <?php if( array_key_exists('image', $panel) ): ?><img src="<?php echo $panel['image']; ?>" class="img-fluid"/><?php endif; ?>
                        </div>
                        <div class="col-12 col-md-6">
                          <?php if( $panel['headline'] != '' ): ?><h3 class="mb-3"><?php echo $panel['headline']; ?></h3><?php endif; ?>
                          <?php if( $panel['description'] != '' ): ?><?php echo $panel['description']; ?><?php endif; ?>
                        </div>
                      </div>

                    </div>
                  </div>
                </div> <!-- card -->



              <?php endif; ?>



          <?php endforeach; ?>
      </div> <!-- accordion -->
    </div>

  </div>

    <?php if( get_post_type() == 'product_type' ): ?>
      <div class="col-12 text-center">
        <a href="<?php echo $custom_options_page['url']; ?>?custom_options_for=<?php echo $post_slug ?>" class="all_btn d-inline-block">All Custom Options</a>
      </div>
    <?php endif; ?>

  <script>
  jQuery( document ).ready(function() {

    jQuery('.card-header').on( 'click', function() {
      var hash = jQuery(this).closest('.card').attr('id');
      history.pushState(null, '', '#'+hash);
    });

    var hash = window.location.hash;
    if( hash != '' ){
      setTimeout(function () {

        jQuery('html, body').animate({ scrollTop: jQuery(hash).offset().top-165 }, 250);
        jQuery(hash).find('.card-header').click();
      }, 750);
    }


  });
  </script>
</section>
<?php endif; ?>
