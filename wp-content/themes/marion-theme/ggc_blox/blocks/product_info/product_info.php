<?php
$product_title        = get_the_title($post->ID);
$product_content      = get_field('product_content_group', $post->ID);
$product_description  = $product_content['product_description'];
$product_image        = get_field('product_image', $post->ID); // array

if( get_post_type() == 'typical_config' ){
  $product_series     = get_field('related_series', $post->ID);
  $product_type       = get_field('related_product_type', $post->ID);
  $product_industries = get_field('related_industries', $post->ID); // array
  $product_process    = get_field('related_process', $post->ID); // array
  $product_datasheet  = get_field('related_datasheet', $post->ID); // array
  $product_literature = get_field('related_lit', $post->ID); // array
  $product_atts       = $product_content['attributes']; // array
}else  if( get_post_type() == 'product_type' ){
  $product_series     = get_field('related_series', $post->ID);
  $product_process    = get_field('related_process', $post->ID); // array
  $product_datasheet  = get_field('related_datasheet', $post->ID); // array
  $product_literature = get_field('related_lit', $post->ID); // array
  $product_atts       = $product_content['feature_benefits']; // array
  $product_industries = NULL;
}else{
  $product_series     = NULL;
  $product_type       = NULL;
  $product_industries = NULL;
  $product_process    = NULL;
  $product_datasheet  = NULL;
  $product_literature = NULL;
  $product_atts       = NULL;
}

?>


<div class="row product-information">
  <div class="col">
    <div class="container">


      <div class="row">

          <div class="col-12 col-lg-6 py-5">

            <img src="<?php echo $product_image['sizes']['large']; ?>" width="<?php echo $product_image['sizes']['large-width']; ?>" height="<?php echo $product_image['sizes']['large-height']; ?>" class="img-fluid"/>

          </div>

          <div class="col-12 col-lg-6 py-5">

            <?php if( !empty( $product_series ) ): ?>
              <?php //if( get_the_title($product_series) != get_the_title($product_type) ): ?>
                <div class="row series">
                  <div class="col">
                    <span><?php echo get_the_title($product_series); ?></span>
                  </div>
                </div>
              <?php //endif;?>
            <?php endif;?>


            <?php if( !empty( $product_type ) ): ?>
              <div class="row prod-type">
                <div class="col">
                  <a href="<?php echo get_the_permalink($product_type); ?>"><?php echo get_the_title($product_type); ?></a>
                </div>
              </div>
            <?php endif;?>


              <div class="row title pb-4 pt-3">
                <div class="col">
                  <h1><?php echo get_the_title(); ?></h1>
                </div>
              </div>


            <?php if( !empty( $product_description ) ): ?>
              <div class="row description pb-2">
                <div class="col">
                  <p><?php echo $product_description; ?></p>
                </div>
              </div>
            <?php endif;?>


            <?php if( is_array( $product_industries ) && get_post_type() == 'typical_config' ): ?>
              <?php if( sizeof( $product_industries ) > 0 ): ?>
                <div class="row industry">
                  <div class="col">
                    <hr />
                    <strong><?php if( sizeof( $product_industries ) > 1 ): ?>Industries<?php else: ?>Industry<?php endif; ?>:</strong>
                    <?php foreach($product_industries as $i => $ind): $i++; ?>
                      <a href="<?php echo get_the_permalink($ind);?>"><?php echo get_the_title($ind);?></a><?php if($i < sizeof($product_industries) ): echo ', '; endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif;?>
            <?php endif;?>


            <?php if( is_array( $product_process ) && get_post_type() == 'typical_config' ): ?>
              <?php if( sizeof( $product_process ) > 0 ): ?>
                <div class="row process">
                  <div class="col">
                    <hr />
                    <strong><?php if( sizeof( $product_process ) > 1 ): ?>Processes<?php else: ?>Process<?php endif; ?>:</strong>
                    <?php foreach($product_process as $i => $pro): $i++; ?>
                      <a href="<?php echo get_the_permalink($pro);?>"><?php echo get_the_title($pro);?></a><?php if($i < sizeof($product_process) ): echo ', '; endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif;?>
            <?php endif;?>

            <?php if( is_array( $product_atts  ) ): ?>
              <?php foreach( $product_atts as $i => $att ): $i++;?>
                <div class="row attribute-<?php echo $i;?>">
                  <div class="col">
                    <hr />
                    <strong><?php echo $att['label'];?><?php if( array_key_exists('value', $att) ):?>:<?php endif;?></strong>
                    <?php foreach($product_process as $i => $pro): $i++; ?>
                      <?php if( array_key_exists('value', $att )): ?><span><?php echo $att['value'];?></span><?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

            <div class="row">
              <div class="col">
                <hr />
              </div>
            </div>


            <?php if( is_array( $product_literature ) || $product_datasheet > 0 ): ?>
                <div class="row literature">
                  <div class="col-12">

                    <?php if( $product_datasheet > 0 ): ?>
                      <a href="<?php echo get_the_permalink($product_datasheet);?>" target="_blank" class="d-block py-2">Datasheet: <?php echo get_the_title($product_datasheet); ?></a>
                    <?php endif; ?>

                    <?php if( is_array($product_literature) > 0 ): ?>
                      <?php foreach($product_literature as $i => $lit): $i++; $pto = get_post_type_object( get_post_type($lit) ); ?>
                        <a href="<?php echo get_the_permalink($lit); ?>" <?php if( get_post_type($lit) == 'datasheet'): ?>target="_blank"<?php endif; ?> class="d-block py-2"><?php echo $pto->labels->singular_name.': '. get_the_title($lit);?></a>
                      <?php endforeach; ?>
                    <?php endif; ?>

                  </div>
                </div>
            <?php endif;?>


          </div>

      </div>


    </div>
  </div>
</div>
