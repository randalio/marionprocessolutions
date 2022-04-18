<?php

if(get_sub_field('headline_image')){
	$marquee_image = get_sub_field('headline_image');
}else {
	$marquee_image = NULL;
}

if(get_sub_field('marquee_title_headline')){
	$marquee_headline = get_sub_field('marquee_title_headline');
}else {
	$marquee_headline = NULL;
}

?>

<section class="marquee-title row pad-bot-1 pad-top-3" style="background-image: url('<?php echo $marquee_image['sizes']['ex-large']; ?>');">
	<div class="col background">
		<div class="container">
			<?php if( $marquee_headline != NULL ): ?>
				<div class="col-12 px-0">
					<h1><?php echo $marquee_headline; ?></h1>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
