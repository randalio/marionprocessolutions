<?php
$cta_content = get_sub_field('call_to_action_content');
$cta_background = get_sub_field('call_to_action_image');
$cta_style = $cta_content['call_to_action_style']['value'];
?>

<section class="row call-to-action px-0 <?php echo $cta_style; ?>" style="background-image: url(<?php echo $cta_background['sizes']['large']; ?>);">
  <div class="col mx-0">
    <div class="container">

    <div class="row pad-top-2 pad-bot-2">
      <div class="col text-center">
        <h2 class="pb-3"><?php echo $cta_content['call_to_action_headline']; ?></h2>
        <p class="pb-4"><?php echo $cta_content['call_to_action_text']; ?></p>
        <a href="<?php echo $cta_content['call_to_action_button_link']['url']; ?>" target="<?php echo $cta_content['call_to_action_button_link']['target']; ?>" class="btn btn-orange"><?php echo $cta_content['call_to_action_button_text']; ?></a>
      </div>
    </div>

    </div>
  </div>
</section>
