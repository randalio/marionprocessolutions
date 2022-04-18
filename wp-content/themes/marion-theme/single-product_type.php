<?php
global $post;
$page_id = $post->ID;
$page_title = get_the_title($page_id);

$product_content = get_field('product_content_group', $page_id);
$resources_link = get_field('footer_resources_button_link', 'option');
$resources_link_text = get_field('footer_resources_button_text', 'option');
$resources_headline = get_field('footer_resources_headline', 'option');
?>

<?php get_header(); ?>

<main id="main" class="m-scene">
	<div id="page_content_container" class="scene-main scene-main--fadein main-inner-wrap">

			<div class="container-fluid">
				<?php include 'ggc_blox/blocks/breadcrumbs/breadcrumbs.php'; ?>
				<?php include 'ggc_blox/blocks/product_info/product_info.php'; ?>
			</div>
			<?php blox_content(); ?>

			<div class="container-fluid">
				<?php if( $product_content['custom_option_headline'] != '' || $product_content['custom_option_text'] != ''): ?>
					<section class="row custom-options-text text-center pad-top-2">
						<div class="col">
							<div class="container">
								<h2><?php echo $product_content['custom_option_headline']; ?></h2>
								<p><?php echo $product_content['custom_option_text']; ?></p>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php include 'ggc_blox/blocks/custom_options_accordion/custom_options_accordion.php'; ?>

				<?php if( $product_content['config_gallery_headline'] != '' || $product_content['config_gallery_text'] != ''): ?>
					<section class="row config-gal-text text-center pad-top-2">
	          <div class="col">
							<div class="container">
								<h2><?php echo $product_content['config_gallery_headline']; ?></h2>
								<p><?php echo $product_content['config_gallery_text']; ?></p>
							</div>
	          </div>
	        </section>
				<?php endif; ?>
				<?php include 'ggc_blox/blocks/config_gallery/config_gallery.php'; ?>

				<?php if( $product_content['below_content'] != NULL ): ?>
					<?php include 'ggc_blox/blocks/saved_content/saved_content.php'; ?>
				<?php endif; ?>
				<!-- BLOG AND CASE STUDIES -->
				<div class="container pad-top-2">

					<div class="row text-center pad-bot-2">
						<div class="col">
							<?php if( $resources_headline != '' ): ?><h2><?php echo $resources_headline; ?></h2><?php endif; ?>
							<?php if( $resources_link['url'] != '' && $resources_link_text != ''  ): ?><a href="<?php echo $resources_link['url']; ?>" class="black-button-text"><?php echo $resources_link_text; ?></a><?php endif; ?>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6">
							<?php include 'footer_hs_blog_list.php'; ?>
						</div>
					</div>

				</div>
			</div>



	</div>
</main>

<?php get_footer(); ?>
