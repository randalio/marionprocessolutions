<?php
$hero_group = get_sub_field('marquee_hero_tile_group');
$side_group = get_sub_field('marquee_small_tile_group');

if( $hero_group['hero_tile_type'] == 'video' ){
  $hero_group_vid_url = $hero_group['hero_tile_video']['url'];
}
if( $side_group['small_tile_1_type'] == 'video' ){
  $small_tile_1_vid_url = $side_group['small_tile_1_video']['url'];
}
if( $side_group['small_tile_2_type'] == 'video' ){
  $small_tile_2_vid_url = $side_group['small_tile_2_video']['url'];
}

?>
<link rel="preload" as="image" href="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large']; ?>">

<section class="row marquee-media-grid">

  <div class="col-12 col-lg-8 col-xl-9 hero-tile">

    <div class="row h-100">
      <div class="col background px-0">

        <?php if( $hero_group['hero_tile_type'] == 'video' ): ?>
          <img src="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large']; ?>" class="background-image d-block d-md-none" width="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large-width']; ?>" height="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large-height']; ?>"/>
          <video autoplay muted loop id="tile_2_video" class="background-image d-none d-md-block">
            <?php if( $small_tile_2_vid_url != '' ): ?>
              <source src="<?php echo $small_tile_2_vid_url; ?>" type="video/mp4" >
            <?php endif; ?>
          </video>
        <?php else: ?>
          <img src="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large']; ?>" class="background-image" width="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large-width']; ?>" height="<?php echo $hero_group['hero_tile_image']['sizes']['hero-tile-large-height']; ?>"/>
        <?php endif; ?>


        <div class="row hero_headline pb-sm-5 w-100">
          <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 pb-3 px-5 px-sm-0">
            <?php if( $hero_group['hero_tile_headline'] != '' ): ?>
              <h1 class=""><?php echo $hero_group['hero_tile_headline']; ?></h1>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-12 col-lg-4 col-xl-3 side-tiles">

    <div class="row h-100">
      <div class="col-6 col-lg-12 background px-0">
        <?php if( $side_group['small_tile_1_type'] == 'video' ): ?>
          <img src="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small']; ?>" class="background-image d-block d-md-none" width="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small-width']; ?>" height="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small-height']; ?>"/>
          <video autoplay muted loop id="tile_1_video" class="background-image d-none d-md-block">
            <?php if( $small_tile_1_vid_url != '' ): ?>
              <source src="<?php echo $small_tile_1_vid_url; ?>" type="video/mp4" >
            <?php endif; ?>
          </video>
        <?php else: ?>
          <img src="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small']; ?>" class="background-image" width="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small-width']; ?>" height="<?php echo $side_group['small_tile_1_image']['sizes']['hero-tile-small-height']; ?>"/>
        <?php endif; ?>
      </div>
      <div class="col-6 col-lg-12 background px-0">
        <?php if( $side_group['small_tile_2_type'] == 'video' ): ?>
          <img src="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small']; ?>" class="background-image  d-block d-md-none" width="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small-width']; ?>" height="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small-height']; ?>"/>
          <video autoplay muted loop id="tile_2_video" class="background-image  d-none d-md-block">
            <?php if( $small_tile_2_vid_url != '' ): ?>
              <source src="<?php echo $small_tile_2_vid_url; ?>" type="video/mp4" >
            <?php endif; ?>
          </video>
        <?php else: ?>
          <img src="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small']; ?>" class="background-image" width="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small-width']; ?>" height="<?php echo $side_group['small_tile_2_image']['sizes']['hero-tile-small-height']; ?>"/>
        <?php endif; ?>

      </div>
    </div>

  </div>

</section>
