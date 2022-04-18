<?php
$resource_object = get_sub_field('resource_object');
$res_id = $resource_object->ID;
$resource_post_type = get_post_type($res_id);

$redirect = get_field('redirect', $res_id);
$destination = get_field('destination_url', $res_id);

if( $redirect == 1 && $destination != '' ){
  $page_link = $destination;
  $page_link_target = '_blank';
}else{
  $page_link = get_the_permalink($res_id);
  $page_link_target = '_self';
}

$resource_title = get_the_title($res_id);

$headline = get_sub_field('cta_headline');
$image = get_field( 'cta_image', $res_id );
$text = get_field( 'summary', $res_id );
if( $resource_post_type  == 'video' ){
  $button_text = 'Watch Video';
}
if( $resource_post_type  == 'webinar' ){
  $button_text = 'Access Webinar';
}
if( $resource_post_type  == 'literature' ){
  $button_text = 'Download Resource';
}
if( $resource_post_type  == 'case_study' ){
  $button_text = 'Read Case Study';
}


$pad_top = get_sub_field('sidebar_cta_padding_top');
$pad_bot = get_sub_field('sidebar_cta_padding_bot');

?>

<section class="row sidbar-cta pad-top-<?php echo $pad_top; ?> pad-bot-<?php echo $pad_bot; ?>">
  <div class="col">

    <div class="row flag pb-3">
      <div class="col">
        <span class="d-block">Resource</span>
      </div>
    </div>


    <?php if( $headline != '' ): ?>
      <div class="row headline">
        <div class="col">
          <a href="<?php echo $page_link; ?>" class="d-block" target="<?php echo $page_link_target; ?>">
            <h3><?php echo $headline; ?></h3>
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if( is_array($image) ): ?>
      <div class="row image py-3">
        <div class="col">
          <a href="<?php echo $page_link; ?>" class="d-block" target="<?php echo $page_link_target; ?>">
            <img src="<?php echo $image['sizes']['medium']; ?>" />
          </a>
        </div>
      </div>
    <?php endif; ?>

    <?php if( $text != '' ): ?>
      <div class="row text pb-2 pr-5">
        <div class="col">
          <p><strong class="d-block"><?php echo $resource_title; ?></strong><?php echo $text; ?></p>
        </div>
      </div>
    <?php endif; ?>

    <?php if( $page_link != '' && $button_text != '' ): ?>
      <div class="row button">
        <div class="col">
          <a href="<?php echo $page_link; ?>" class="btn btn-black px-5" target="<?php echo $page_link_target; ?>"><?php echo $button_text; ?></a>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>
