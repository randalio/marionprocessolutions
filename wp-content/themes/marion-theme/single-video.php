<?php
global $post;
$page_id = $post->ID;
$page_title = get_the_title($page_id);
$video_description = get_field('summary');
$youtube_code = get_field('youtube_code');

$resource_library = get_field('footer_resources_button_link', 'option');
$videos_page = get_field('footer_resources_videos_link', 'option');

$marquee_image = get_field('default_header_image', 'option');

?>

<?php get_header(); ?>
<main id="main" class="m-scene">
	<div id="page_content_container" class="scene-main scene-main--fadein main-inner-wrap">
    <div class="container-fluid">
			<section class="marquee-title row pad-bot-1 pad-top-3" <?php if( $marquee_image != ''): ?>style="background-image: url('<?php echo $marquee_image['sizes']['ex-large']; ?>');"<?php endif; ?>>
				<div class="col background">
					<div class="container">
							<div class="col-12">
								<h1>Resource Library</h1>
							</div>
					</div>
				</div>
			</section>

      <section class="breadcrumbs row py-3">
        <div class="col">
          <div class="container">

            <div class="row">
              <div class="col-12">
                <span>
                  <a href="/">Home</a>
                </span>

								<?php if( !empty( $resource_library['url'] ) ): ?>
									<span>
										<a href="<?php echo $resource_library['url']; ?>">Resource Library</a>
									</span>
								<?php endif; ?>

              <?php if( !empty( $videos_page['url'] ) ): ?>
                <span>
                  <a href="<?php echo $videos_page['url']; ?>">Videos</a>
                </span>
              <?php endif; ?>


              <?php if( $post->post_title != '' ): ?>
                  <span><?php echo $post->post_title; ?></span>
              <?php endif; ?>
              </div>
            </div>


          </div> <!-- container -->
        </div> <!-- col -->
      </section>
    </div>
		<div class="container">
				<section class="video-block row pad-top-2 pad-bot-2">

					<div class="col-12 col-md-12 col-xl-4 video-text order-last order-xl-first">

					  <div class="row">
					    <div class="col-12 p-5">
					      <?php if( $page_title != ''): ?><h2><?php echo $page_title; ?></h2><?php endif; ?>
					      <?php if( $video_description != ''): ?><p><?php echo $video_description; ?></p><?php endif; ?>

					    </div>
					  </div>

				  </div>

				  <div class="col-12 col-md-12 col-xl-8 px-0 video order-first order-xl-last">

							<div class="player" id="player_<?php echo $rand_id; ?>">
								<iframe
							    src="//www.youtube.com/embed/<?php echo $youtube_code; ?>?modestbranding=1&autoplay=0&playsinline=1&showinfo=0&rel=0&enablejsapi=1&color=#e05929"
							    allowfullscreen allowtransparency allow="autoplay"></iframe>
							</div>

					</div>
				</section>
			</div>
		<?php blox_content(); ?>
	</div>
</main>

<?php get_footer(); ?>
