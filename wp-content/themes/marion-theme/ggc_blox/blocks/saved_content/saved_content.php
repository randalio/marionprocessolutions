<?php
global $post;
$content = array();
$content = get_sub_field('saved_content_object');
$p_top = get_sub_field('saved_content_padding_top');
$p_bot = get_sub_field('saved_content_padding_bot');

$below_content = array();
$below_content = get_field('product_content_group', $post->ID);

if( is_object($below_content) ){
  if( $below_content['below_content']->ID ){
    $content_ID = $below_content['below_content']->ID;
  }else{
    $content_ID = $content->ID;
  }
}



if( is_object( $content )  ){
  $content_ID = $content->ID;
}else if( is_object( $below_content['below_content'] )  ){
  $content_ID = $below_content['below_content']->ID;
}



?>

<?php if(have_rows('row_type_saved_layout', $content_ID)): ?>
  <?php while ( have_rows('row_type_saved_layout', $content_ID) ) : the_row(); ?>
  <?php if( get_row_layout() == 'one_column_layout_saved_layout' ): ?>
    <?php if(have_rows('content_blocks_one_col_row_settings_saved_layout') ): ?>
      <?php while ( have_rows('content_blocks_one_col_row_settings_saved_layout', $content_ID) ) : the_row(); ?>
        <?php $row_1col_container = get_sub_field('content_blocks_one_col_row_container'); ?>
        <?php $row_1col_ID = get_sub_field('content_blocks_one_col_row_id'); ?>
        <?php $row_1col_class = get_sub_field('content_blocks_one_col_row_class'); ?>
        <?php $row_1col_bg_color = get_sub_field('content_blocks_one_col_row_bg_color'); ?>
        <?php $row_1col_bg_img = get_sub_field('content_blocks_one_col_row_bg_img'); ?>
      <?php endwhile; // content_blocks_one_col_row_settings_saved_layout ?>
    <?php endif; // content_blocks_one_col_row_settings_saved_layout?>

    <div class="one-column-wrapper one-column-layout-wrapper pad-top-<?php echo $p_top;?> pad-bot-<?php echo $p_bot;?>" <?php if( $row_1col_bg_color != ''): ?>style="background-color: <?php echo $row_1col_bg_color; ?>"<?php endif;?>>
      <div class="<?php echo $row_1col_container; ?> one-column" <?php if($row_1col_ID != ''): ?>id="<?php echo $row_1col_ID; ?>"<?php endif; ?>>
        <div class="row">
          <div class="col">
            <?php
            if(have_rows('content_blocks_one_col_row_saved_layout', $content_ID)):
              while ( have_rows('content_blocks_one_col_row_saved_layout', $content_ID) ) : the_row();
                $block = get_row_layout();
                $block = str_replace('_saved_layout', '', $block);
                echo render_blocks( $block );
              endwhile; // content_blocks_one_col_row_saved_layout;
            endif; // content_blocks_one_col_row_saved_layout;
            ?>

            <?php if( current_user_can('editor') || current_user_can('administrator') ): ?>
              <!-- ADMIN EDIT LINK -->
                <div class="row edit-row p-0 m-0">
                  <div class="col-12">
                    <div class="alert alert-info small py-1 mt-2 mr-2 float-right" role="alert">
                      <?php if( $content_ID != ''): ?>
                        <a href="/wp-admin/post.php?post=<?php echo $content_ID;?>&action=edit" target="blank" class="alert-link"><i class="fas fa-edit"></i> Edit Global Layout</a>
                      <?php else: ?>
                        <a href="/wp-admin/post-new.php?post_type=tab_content" target="blank" class="alert-link"><i class="fas fa-plus-square"></i> New Global Layout</a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <!-- ADMIN EDIT LINK -->
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>

  <?php endif; // one_column_layout_saved_layout ?>
  <?php if( get_row_layout() == 'two_column_layout_saved_layout' ): ?>

    <?php
    if(have_rows('content_blocks_two_col_row_settings_saved_layout') ):
      while ( have_rows('content_blocks_two_col_row_settings_saved_layout', $content_ID) ) : the_row();

        $row_2col_container = get_sub_field('content_blocks_two_col_row_container');
        $row_2col_ID = get_sub_field('content_blocks_two_col_row_id');
        $row_2col_class = get_sub_field('content_blocks_two_col_row_class');
        $row_layout = get_sub_field('content_blocks_two_col_row_columns');

        if(have_rows('content_blocks_two_col_row_left_bg_group') ):
          while ( have_rows('content_blocks_two_col_row_left_bg_group') ) : the_row();
            $left_bg_color = get_sub_field('content_blocks_two_col_row_left_bg_color');
            $left_bg_image = get_sub_field('content_blocks_two_col_row_left_bg_image');
          endwhile;
        endif;

        if(have_rows('content_blocks_two_col_row_right_bg_group') ):
          while ( have_rows('content_blocks_two_col_row_right_bg_group') ) : the_row();
            $right_bg_color = get_sub_field('content_blocks_two_col_row_right_bg_color');
            $right_bg_image = get_sub_field('content_blocks_two_col_row_right_bg_image');
          endwhile;
        endif;

      endwhile;
    endif;
  ?>
    <div class="<?php echo $row_2col_container.' '.$row_layout; ?> <?php echo $row_2col_class; ?> two-columns pad-top-<?php echo $p_top;?> pad-bot-<?php echo $p_bot;?>" <?php if($row_2col_ID != ''): ?>id="<?php echo $row_2col_ID; ?>"<?php endif; ?>>
      <div class="row">
        <div class="col col-12 <?php if($row_layout == 'even_split'): ?>col-md-6<?php endif; ?><?php if( $row_layout  == 'sidebar_l' ): ?>col-md-4 col-lg-3 order-last order-md-first pr-5<?php endif; ?><?php if( $row_layout  == 'sidebar_r' ): ?>col-md-8 order-first pr-5<?php endif; ?>" <?php if( $left_bg_color != ''): ?>style="background-color: <?php echo $left_bg_color; ?>"<?php endif;?>>
          <div class="background_div" style="<?php if($left_bg_color != ''): ?> background-color: <?php echo $left_bg_color; ?>;<?php endif; ?><?php if($left_bg_image != ''): ?> background-image: url(<?php echo $left_bg_image['url']; ?>);<?php endif; ?>"></div>
          <?php if(have_rows('content_blocks_two_col_main_even_left_saved_layout', $content_ID)): ?>
            <?php while ( have_rows('content_blocks_two_col_main_even_left_saved_layout', $content_ID) ) : the_row();?>
              <?php
              $block = get_row_layout();
              $block = str_replace('_saved_layout', '', $block);
              echo render_blocks( $block );
              ?>
            <?php endwhile;?>
          <?php endif;?>
        </div>

        <div class="col col-12 <?php if($row_layout == 'even_split'): ?>col-md-6<?php endif; ?><?php if( $row_layout  == 'sidebar_l' ): ?>col-md-8 order-first px-4 pl-5<?php endif; ?><?php if( $row_layout  == 'sidebar_r' ): ?>col-md-4 order-last pl-5<?php endif; ?>" <?php if( $right_bg_color != ''): ?>style="background-color: <?php echo $right_bg_color; ?>"<?php endif;?>>
          <div class="background_div" style="<?php if($right_bg_color != ''): ?> background-color: <?php echo $right_bg_color; ?>;<?php endif; ?><?php if($right_bg_image != ''): ?> background-image: url(<?php echo $right_bg_image['url']; ?>);<?php endif; ?>"></div>
          <?php if(have_rows('content_blocks_two_col_main_even_right_saved_layout', $content_ID)): ?>
            <?php while ( have_rows('content_blocks_two_col_main_even_right_saved_layout', $content_ID) ) : the_row();?>
              <?php
              $block = get_row_layout();
              $block = str_replace('_saved_layout', '', $block);
              echo render_blocks( $block );
              ?>
            <?php endwhile;?>
          <?php endif;?>
        </div>

      </div>
    </div>
  <?php endif; ?>
  <?php endwhile; // row_type_saved_layout ?>
<?php endif; // row_type_saved_layout?>
