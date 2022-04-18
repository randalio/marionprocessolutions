<?php
global $post;
$this_id = $post->ID;
$args = array(
    'numberposts'      => 100,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'product_type',
    'fields'           => 'ids',
);
$products = get_posts( $args );
$product_array = array();
foreach( $products as $prod ){
  $related_process = get_field('related_process', $prod);
  if( in_array( $this_id, $related_process ) ){
    $product = array();
    $product['title'] = get_the_title($prod);
    $product['link'] = get_the_permalink($prod);
    $product['button'] = 'View Product';
    $product['summary'] = get_field('summary', $prod);
    $product_image = get_field('product_image', $prod);
    if( is_array($product_image) ){
      $product['image'] = $product_image['sizes']['product-grid'];
    }
    array_push( $product_array, $product );
  }
}

$pad_top = get_sub_field('padding_top');
$pad_bot = get_sub_field('padding_bot');
?>

<section class="row product-grid pad-top-<?php echo $pad_top; ?> pad-bot-<?php echo $pad_bot; ?>">
  <div class="col">

    <div class="row grid">
      <?php foreach( $product_array as $product ): ?>
        <div class="col-12 col-sm-6 col-lg-4 mb-5">
            <div class="row px-1">
              <div class="col">
                <?php if( !empty( $product['image'] ) ): ?>
                    <a href="<?php echo $product['link'];?>" class="d-block">
                      <img src="<?php echo $product['image']; ?>" class="img-fluid"/>
                    </a>
                <?php endif; ?>
              </div>
            </div>
            <div class="row px-1">
              <div class="col">
                <a href="<?php echo $product['link'];?>" class="product-head d-block">
                  <h5 class="product-head d-block px-4 pt-4 pb-0 mb-0"><?php echo $product['title'];?></h5>
                </a>
              </div>
            </div>
            <div class="row px-1">
              <div class="col">
                <?php if( !empty( $product['summary'] ) ): ?>
                  <span class="summary d-block pt-3 px-4"><?php echo $product['summary']; ?></span>
                <?php endif; ?>
              </div>
            </div>
            <div class="row px-1">
              <div class="col">
                <a href="<?php echo $product['link'];?>" class="d-inline-block mt-2 px-4 mb-5"><?php echo $product['button'];?></a>
              </div>
            </div>
            <div class="rule mx-4"></div>
        </div>
      <?php endforeach; ?>
    </div>


  </div>
</section>
