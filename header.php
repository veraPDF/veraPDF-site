<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The veraPDF project, definitive, open source PDF/A validation.">
	<meta name="author" content="veraPDF Consortium">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <link href="<?php echo get_template_directory_uri() . '/includes/img/favicon.ico'; ?>" rel="icon" type="image/x-icon" />

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		// veraPDF Tracking Code
	  ga('create', 'UA-64476051-1', 'auto');
	  ga('send', 'pageview');
		// PREFORMA Tracking Code
		ga('create', 'UA-25697327-3', 'auto', {'name' : 'preformaTracker'});
	  ga('preformaTracker.send', 'pageview');
	</script>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' );
	$nav_class = "navbar-brand";
	if ( is_front_page() ) {
		$nav_class .= " active";
	}
	?>

		<nav class="site-navigation" id="top">
		<?php // substitute the class "container-fluid" below if you want a wider content area ?>
			<div class="container">
				<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"><?php _e('Toggle navigation','verapdf') ?> </span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Your site title as branding in the menu -->
					<a class="<?php echo $nav_class; ?>" href="<?php echo verapdf_get_verapage_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><div id="menu-logo">&nbsp;</div></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://github.com/veraPDF/"><i class="fa fa-github"></i> GitHub</a></li>
						<li><a href="/download/"><i class="fa fa-download"></i> Download</a></li>
					</ul>
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
								'theme_location' 	=> 'primary',
								'depth'             => 2,
								'container'         => 'false',
								'menu_class' 		=> 'nav navbar-nav navbar-right',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'menu_id'			=> 'main-menu',
								'walker' 			=> new wp_bootstrap_navwalker()
							)
						); ?>
				</div><!-- #navbar -->
			</div><!-- .container -->
		</nav><!-- .site-navigation -->

		<?php
		get_template_part('masthead', 	is_front_page() ? 'home' : 'page');
		?>

	<section class="main-content">
	<?php // substitute the class "container-fluid" below if you want a wider content area ?>
		<div class="container">
			<div class="row">
				<div id="content" class="main-content-inner col-sm-12">
