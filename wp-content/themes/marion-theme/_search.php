<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = $query_split[1];
} // endforeach

$search = new WP_Query( array('s' => $search_query) );

$default_image = get_field('default_resource_image', 'option');

$search_results = $search->posts;
$items = array();
foreach( $search_results as $result ){
	$item = array();
	$item['ID'] = $result->ID;
	$item['title'] = $result->post_title;
	$item['post_type'] = $result->post_type;
	$item['image'] = $default_image['sizes']['grid-three-items'];
	if( $result->post_type == 'page' ){
		$item['tile_label'] = 'Page';
		$item['button_text'] = 'View Page';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'video' ){
		$item['tile_label'] = 'Video';
		$item['button_text'] = 'Watch Video';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'literature' ){
		$item['tile_label'] = 'Handbook, Brochure, Guide';
		$item['button_text'] = 'Download Resource';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'webinar' ){
		$item['tile_label'] = 'Webinar';
		$item['button_text'] = 'Access Webinar';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'industry' ){
		$item['tile_label'] = 'Page';
		$item['button_text'] = 'View Page';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'process' ){
		$item['tile_label'] = 'Page';
		$item['button_text'] = 'View Page';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}

	}//endif
	if( $result->post_type == 'case_study' ){
		$item['tile_label'] = 'Case Study';
		$item['button_text'] = 'Read Case Study';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'datasheet' ){
		$item['tile_label'] = 'Datasheet';
		$item['button_text'] = 'Download Resource';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'typical_config' ){
		$item['tile_label'] = 'Typical Configuration';
		$item['button_text'] = 'View Product Configuration';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('product_image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	if( $result->post_type == 'product_type' ){
		$item['tile_label'] = 'Product';
		$item['button_text'] = 'View Product';
		$item['summary'] = get_field('summary', $result->ID);
		$item_image = get_field('product_image', $result->ID);
		if( is_array($item_image) ){
			$item['image'] = $item_image['sizes']['grid-three-items'];
		}
	}//endif
	$item['link'] = get_the_permalink($result->ID);
	array_push($items, $item);
}//endforeach
?>
<?php get_header(); ?>
<main id="main" class="m-scene">
	<div id="page_content_container" class="scene-main scene-main--fadein main-inner-wrap">


<div class="container search-results search_results">

	<div class="row py-5">
		<div class="col-12 col-lg-8 offset-lg-2 searchbox">
			<div class="search_terms">
				<form action="/" method="get">
					<!-- <div class="search-wrap"> -->
						<span class="search-label">Search for: &nbsp;</span><input type="text" name="s" id="searchPageInput" placeholder="search..." value="<?php echo get_search_query();?>" class=""/>
						<button type="submit" id="searchPageSubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="pull-right"/><i class="fas fa-search"></i></button>
					<!-- </div> -->
				</form>
			</div>
		</div>
	</div>


	<div class="row search-results-grid">

		<?php foreach( $items as $tile ): ?>
			<div class="col col-md-4 mb-4 tile <?php echo $tile['post_type']; ?>">

						<div class="row px-2">
							<div class="col tile-border">

								<div class="row content-type text-center py-1">
									<div class="col">
										<span class="d-block"><?php echo $tile['tile_label']; ?></span>
									</div>
								</div>

								<div class="row image px-0">
									<a href="<?php echo $tile['link']; ?>" class="">
										<div class="col px-0">
											<img src="<?php echo $tile['image']; ?>" class="img-fluid" width="480" height="320"/>
										</div>
									</a>
								</div>

								<div class="row title pt-4 px-4">
									<div class="col">
										<h3><?php echo $tile['title']; ?></h3>
									</div>
								</div>

								<div class="row summary pb-3 px-4">
									<div class="col">
										<p><?php echo $tile['summary']; ?></p>
									</div>
								</div>

								<div class="row link pb-5 px-4">
									<div class="col">
										<a href="<?php echo $tile['link']; ?>" class="" target="<?php echo $tile['target'];?>"><?php echo $tile['button_text']; ?></a>
									</div>
								</div>

							</div>
						</div>
			</div>
		<?php endforeach; ?>

	</div>





</div> <!-- container -->

</div>
</main>

<?php get_footer(); ?>
