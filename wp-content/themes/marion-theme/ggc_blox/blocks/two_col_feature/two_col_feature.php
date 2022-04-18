<?php

$two_col_content = get_sub_field('two_col_feature_content');
$two_col_feature_image = get_sub_field('two_col_feature_image');

$dark_light = $two_col_content['two_col_feature_bg_color'];
$left_right = $two_col_content['two_col_feature_left_right'];

?>

<section class="two-col-feature row pad-top-0 pad-bot-0 <?php echo $dark_light; ?> <?php if($left_right == 1): ?>right<?php else: ?>left<?php endif; ?>">
  <div class="col">

    <div class="row">

    <img src="<?php echo $two_col_feature_image['url']; ?>" class="img-fluid h-100"/>

      <div class="col-12 col-xl-9 content <?php if($left_right == 1): ?>offset-xl-3<?php endif; ?>">
        <div class="row text-container pad-top-3 pad-bot-3">

          <div class="col-10 col-md-6 col-xl-4 <?php if($left_right == 1): ?>offset-md-5 offset-xl-7<?php endif; ?> offset-1 animate_this duration-1s del-500 " <?php if($left_right == 1): ?>data-animation="fadeInRight"<?php else: ?>data-animation="fadeInLeft"<?php endif; ?>>
            <span class="headline-light d-block"><?php echo $two_col_content['two_col_feature_headline_light'];?></span>
            <h2 class="py-3">
              <span class="headline-bold"><?php echo $two_col_content['two_col_feature_headline_bold'];?></span>
            </h2>
            <span class="pb-4 d-block line-text"><?php echo $two_col_content['two_col_feature_text'];?></span>
            <?php if( is_array( $two_col_content['two_col_feature_button_link'] ) ): ?>
              <a href="<?php echo $two_col_content['two_col_feature_button_link']['url']; ?>" target="<?php echo $two_col_content['two_col_feature_button_link']['target']; ?>" class="pt-2 mt-4 d-block"><?php echo $two_col_content['two_col_feature_button_text']; ?></a>
            <?php endif; ?>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
