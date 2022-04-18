<?php
global $post;
$page_id = $post->ID;
$page_title = get_the_title($page_id);

$product_content = get_field('product_content_group', $page_id);
?>

<?php get_header(); ?>

<main id="main" class="m-scene">
	<div id="page_content_container" class="scene_element scene_element--moveUpIn main-inner-wrap">

			<div class="container-fluid">
				<?php include 'ggc_blox/blocks/breadcrumbs/breadcrumbs.php'; ?>

				<?php include 'ggc_blox/blocks/product_info/product_info.php'; ?>

				<section class="row custom-options-text text-center pad-top-2">
					<div class="col">
						<div class="container">
							<h2><?php echo $product_content['custom_option_headline']; ?></h2>
							<p><?php echo $product_content['custom_option_text']; ?></p>
						</div>
					</div>
				</section>

				<?php include 'ggc_blox/blocks/custom_options_accordion/custom_options_accordion.php'; ?>
			</div>

			<?php blox_content(); ?>


			<div class="container-fluid">

				<section class="row config-gal-text text-center pad-top-2">
					<div class="col">
						<div class="container">
							<h2><?php echo $product_content['config_gallery_headline']; ?></h2>
							<p><?php echo $product_content['config_gallery_text']; ?></p>
						</div>
					</div>
				</section>

				<?php include 'ggc_blox/blocks/config_gallery/config_gallery.php'; ?>

				<!-- BLOG AND CASE STUDIES -->

			</div>





	</div>
</main>

<?php get_footer(); ?>
