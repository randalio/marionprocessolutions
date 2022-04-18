<?php
	$home_url = home_url();
	$header_logo = get_field('header_logo', 'option');
	$hs_tracking_code = get_field('hs_tracking_code', 'option');
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
	<!-- <META http-equiv="X-UA-Compatible" content="IE=9"> -->
	<META http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php //bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



  <?php wp_head(); ?>

	<?php if( $hs_tracking_code != '' ): ?>
		<?php echo $hs_tracking_code; ?>
	<?php endif; ?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5/css/bootstrap-ie11.min.css" media="all and (-ms-high-contrast: active), (-ms-high-contrast: none)">

<meta name="google-site-verification" content="mRFDPrjOrjGTmEw7-zz1_6PnYoiagB-4wSZCEVI0lPE" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53SKD8T');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53SKD8T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<div class="supermain" id="superMain"> <!-- Closes in footer.php -->
	<header class="site-header" id="site_header">

		<h2 class="sr-only"><?php print get_bloginfo( 'name', 'display' ); ?></h2>

		<div class="main-header" id="site_nav">
			<div class="nav-wrap">
				<div class="container-fluid">

				<div class="row header-top">
						<div class="col">
							<div class="container">

								<div class="row">
									<div class="col-8 col-lg-3 p-0 logo-wrapper order-1 order-lg-1">
										<?php if($header_logo != NULL): ?>
											<a href="<?php echo $home_url; ?>" class="d-block img-fluid pr-2 py-3 pl-1">
												<img src="<?php echo $header_logo['url']; ?>" id="site_logo" class="img-fluid" width="auto" height="<?php echo $header_logo['height']; ?>"/>
											</a>
										<?php endif; ?>
									</div>

									<div class="col-lg-9 top-right-menu text-right order-last order-lg-2 d-none d-lg-block">
											<div class="row">
												<div class="col">
													<?php wp_nav_menu( array(
														'menu' 						=> 'top_right',
														'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
														'container'       => 'div',
														'container_class' => '',
														'container_id'    => 'marion_top_right_navigation',
														'menu_class'      => 'top_right_nav',
														'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
														'theme_location'	=> 'top_right',
													)); ?>
												</div>
											</div>
											<div class="row menu-search pt-2">
												<div class="col">
													<form action="/" method="get">
														<div class="search-wrap">
															<input type="text" name="s" id="siteSearch" placeholder="Search..." class=""/>
															<button type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="pull-right d-block pe-none"/><i class="fas fa-search"></i></button>
														</div>
													</form>
												</div>
											</div>
									</div>

									<div class="col-4 d-lg-none nav-toggle text-right order-2 order-lg-3 px-0 pt-2">
										<h3 class="sr-only">Site Navigation</h3>
										<button class="navbar-toggler pe-none" type="button" data-toggle="collapse" data-target="#marion_navigation" aria-controls="marion_navigation" aria-expanded="false" aria-label="Toggle navigation">
											<i class="fas fa-bars"></i>
										  <i class="fas fa-times d-none"></i>
									  </button>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="row header-navigation">
						<div class="col">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<nav class="navbar navbar-expand-lg p-0">

												<?php wp_nav_menu( array(
													'menu' 						=> 'primary',
													'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
													'container'       => 'div',
													'container_class' => 'collapse navbar-collapse pt-4 pt-lg-0',
													'container_id'    => 'marion_navigation',
													'menu_class'      => 'navbar-nav align-middle primary_nav mx-auto',
													'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
													'theme_location'	=> 'primary',
													'walker'          => new WP_Bootstrap_Navwalker(),
												)); ?>


										</nav>
									</div>

									<div class="col-12 top-right-menu-mobile text-left d-none">
											<div class="row">
												<div class="col">
													<?php wp_nav_menu( array(
														'menu' 						=> 'top_right',
														'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
														'container'       => 'div',
														'container_class' => '',
														'container_id'    => 'marion_top_right_navigation',
														'menu_class'      => 'top_right_nav',
														'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
														'theme_location'	=> 'top_right',
													)); ?>
												</div>
											</div>
											<div class="row menu-search pt-3 pb-4">
												<div class="col">
													<form action="/" method="get">
														<div class="search-wrap">
															<input type="text" name="s" id="siteSearchMobile" placeholder="Search..." class=""/>
															<button type="submit" id="searchsubmitMobile" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="pull-right d-block"/><i class="fas fa-search"></i></button>
														</div>
													</form>
												</div>
											</div>
									</div>

								</div>
							</div>
						</div>
					</div>








				</div>
			</div>
		</div>

	</header>
