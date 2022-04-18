<?php
  $slide_layout = get_sub_field('slide_layout');

  $slide_repeater = get_sub_field('hero_slider_content');

  $line_one     = $slide_repeater[0]['line_one'];
  $line_two     = $slide_repeater[0]['line_two_animated'];
  $line_three   = $slide_repeater[0]['line_three'];
?>

<section class="hero-slider row">
    <div class="col px-0">

      <div id="heroCarousel" class="carousel slide carousel-fade w-100 h-100" data-ride="carousel">
        <ol class="carousel-indicators" style="z-index: 999999;">
          <?php if( sizeof($slide_repeater) > 1 ): ?>
            <?php foreach( $slide_repeater as $i => $slide ): ?>
              <li data-target="#heroCarousel" data-slide-to="<?php echo $i; ?>" <?php if( $i == 0 ): ?>class="active"<?php endif; ?>></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ol>
        <div class="carousel-inner w-100 h-100">
          <?php foreach( $slide_repeater as $i => $slide ): ?>
            <div class="carousel-item h-100 <?php if($i == 0): ?>active<?php endif; ?>">
              <?php if( $slide['slide_layout'] == 'animated' ): ?>
                <div class="container h-100 pr-0 px-lg-auto animated-slide">
                  <div class="row align-items-center h-100">
                    <div class="col-11 col-xl-11 offset-1 offset-xl-1 px-0 px-lg-auto justify-content-center align-self-center">
                      <div class="slide-content animate_this duration-2s" data-animation="fadeInLeft">
                        <div class="line-1 line d-block"><span><?php echo $slide['line_one']; ?></span></div>
                        <?php $animation_array = explode(',', $slide['line_two_animated']); ?>
                        <div class="line-2 line d-block">
                              <?php foreach($animation_array as $i => $span_text): ?>
                            <span class="anim-text span-<?php echo $i; ?> <?php if( $i == 0): ?>active<?php endif; ?>">
                              <?php echo $span_text; ?>
                            </span>
                          <?php endforeach; ?>
                            <div class="triangle"><i class="fas fa-play"></i></div>
                        </div>
                        <div class="line-3 line d-block"><span><?php echo $slide['line_three']; ?></span></div>

                        <div class="sub-line py-5">
                            <a href="<?php echo $slide['sub_head_link']['url']; ?>"><?php echo $slide['subhead_link_text']; ?></a> <?php echo$slide['subhead_non_link_text']; ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              <?php else: ?>
                  <img src="<?php echo $slide['two_col_image']['sizes']['ex-large']; ?>" class="two-col-image animated duration-2s fadeInRight"/>
                  <div class="container h-100 two-col-slide">
                    <div class="row h-100 align-items-center">
                      <div class="col-12 col-lg-5 two-col-slide-content justify-content-center align-self-center pb-5 pb-lg-0">
                          <div class="animated duration-2s fadeInLeft" data-animation="fadeInLeft">
                            <span class="headline d-block px-4 pt-3 px-lg-0 pt-lg-0"><?php echo $slide['two_col_content_group']['two_col_headline']; ?></span>
                            <span class="text d-block pt-3 px-4 px-lg-0 pb-3"><?php echo $slide['two_col_content_group']['two_col_text']; ?></span>
                            <a href="<?php echo $slide['two_col_content_group']['two_col_button_link']['url']; ?>" class="btn btn-white px-5 mt-4"><?php echo $slide['two_col_content_group']['two_col_button_text']; ?></a>
                          </div>
                      </div>
                    </div>
                  </div>
              <?php endif; ?>

            </div>
        <?php endforeach; ?>

        </div>
      </div>

  </div>



  <div id="particles_foreground" class="w-100 particle"></div>
  <div id="particles_background" class="w-100 particle"></div>
</section>
