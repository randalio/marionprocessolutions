<?php
global $post;
$page_id = $post->ID;
$page_title = get_the_title($page_id);

$destination = get_field('destination_url', $page_id);
$redirect = get_field('redirect', $page_id);

if( $post->post_type == 'custom_option' ){
	$redirect = 1;
	$all_custom_options = get_field('custom_options_link', 'option');
	$destination = $all_custom_options['url'].'#'.$post->post_name;
}

if( $post->post_type == 'datasheet' ){

	$datasheet_pdf = get_field('datasheet_pdf', $page_id);
	if( is_array( $datasheet_pdf ) ){
		$redirect = 1;
		$destination = $datasheet_pdf['url'];
	}

}


if( $redirect == 1 && $destination != '' ){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: $destination");
	exit();
}

?>

<?php get_header(); ?>
<main id="main" class="m-scene">
	<div id="page_content_container" class="scene-main scene-main--fadein main-inner-wrap">
		<?php blox_content(); ?>
		<?php the_content();?>
	</div>
</main>

<?php get_footer(); ?>
