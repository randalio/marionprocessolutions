<?php
// global $post;
// $page_id = $post->ID;
// $page_title = get_the_title($page_id);

?>

<?php get_header(); ?>
<main id="main">
	<div class="page-wrap page-not-found">

		<div class="container-fluid one-column anchor">
				<div class="row">
					<div class="col">

						<section class="marquee-title row pad-bot-1 pad-top-3" style="background-image: url('/wp-content/uploads/2021/09/blue-GettyImages-504005456-1600x619.png');">
							<div class="col background">
								<div class="container">
									<div class="col-12 px-0">
										<h1>404 | Page Not Found</h1>
									</div>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>

	    <div class="container">
	      <div class="row pt-5">

					<div class="col-12 mb-5">
						<h4>Sorry, we can't find the page you were looking for.</h2>
						<p>Try searching the site or check in the main menu.</p>
					</div>

	      </div>
	    </div>

			<div class="search-results-grid" style="min-height: 40vh;">
        <div class="container search-results">
					<div class="row py-5">
						<div class="col-12 col-lg-8 searchbox">
							<div class="search_terms">
								<form action="/" method="get">
									<!-- <div class="search-wrap"> -->
										<span class="search-label">Search for: &nbsp;</span><input type="text" name="s" id="searchPageInput" placeholder="Search..." value="<?php echo get_search_query();?>" class=""/>
										<button type="submit" id="searchPageSubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="pull-right"/><i class="fas fa-search"></i></button>
									<!-- </div> -->
								</form>
							</div>
						</div>
					</div>
        </div>
    	</div>
</div>
</main>

<?php get_footer(); ?>
