<?php
$num_of_cols = get_sub_field('number_of_columns');
$tiles = get_sub_field('general_grid_repeater');

$pad_top = get_sub_field('general_grid_padding_top');
$pad_bot = get_sub_field('general_grid_padding_bot');

if( $num_of_cols == '2'){
  $cols = 'col-12 col-md-6';
  $im_size = 'two';
}
if( $num_of_cols == '3'){
  $cols = 'col-12 col-md-4';
  $im_size = 'three';
}

?>

<section class="row general-grid pad-top-<?php echo $pad_top; ?> pad-bot-<?php echo $pad_bot; ?> <?php echo $im_size; ?>">
  <div class="col">
    <div class="container px-md-0">
      <div class="row">
        <?php foreach( $tiles as $tile ): ?>

            <div class="<?php echo $cols;?> mb-5">

              <div class="row pb-4 image">
                <div class="col">
                  <?php if( is_array( $tile['tile_group']['button_link']) ): ?>
                    <a href="<?php echo $tile['tile_group']['button_link']['url']; ?>" target="<?php echo $tile['tile_group']['button_link']['target']; ?>" class="d-block">
                  <?php endif; ?>
                      <img src="<?php echo $tile['image']['sizes']['grid-'.$im_size.'-items']; ?>" class="img-fluid" />
                  <?php if( is_array( $tile['tile_group']['button_link']) ): ?>
                    </a>
                  <?php endif; ?>

                </div>
              </div>

              <div class="row pb-3 headline">
                <div class="col">
                  <?php if( is_array( $tile['tile_group']['button_link']) ): ?>
                    <a href="<?php echo $tile['tile_group']['button_link']['url']; ?>" target="<?php echo $tile['tile_group']['button_link']['target']; ?>" class="d-block">
                  <?php endif; ?>
                    <h5><?php echo $tile['tile_group']['tile_headline']; ?></h5>
                    <?php if( is_array( $tile['tile_group']['button_link']) ): ?>
                      </a>
                    <?php endif; ?>
                </div>
              </div>

              <div class="row pb-2 text">
                <div class="col">
                  <p><?php echo $tile['tile_group']['tile_text']; ?></p>
                </div>
              </div>

              <?php if( is_array( $tile['tile_group']['button_link']) ): ?>
                <div class="row button">
                  <div class="col">
                    <a href="<?php echo $tile['tile_group']['button_link']['url']; ?>" target="<?php echo $tile['tile_group']['button_link']['target']; ?>"><?php echo $tile['tile_group']['button_text']; ?></a>
                  </div>
                </div>
              <?php endif; ?>

            </div>

        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
