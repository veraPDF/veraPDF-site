<?php
/**
 * The Header partial for our themes pages.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
$page_id = get_queried_object_id();
$nav_class = "navbar-brand";
if ( $page_id == verapdf_get_verapage_id() ) {
	$nav_class .= " active";
}
?>

	<nav class="site-navigation" id="top">
	<?php // substitute the class "container-fluid" below if you want a wider content area ?>
		<div class="container">
			<div class="row">
				<div class="site-navigation-inner col-sm-10">
					<div class="navbar navbar-default">
						<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only"><?php _e('Toggle navigation','verapdf') ?> </span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- Your site title as branding in the menu -->
							<a class="<?php echo $nav_class; ?>" href="<?php echo verapdf_get_verapage_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</div>

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location' 	=> 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'menu_class' 		=> 'nav navbar-nav',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'menu_id'			=> 'main-menu',
								'walker' 			=> new wp_bootstrap_navwalker()
							)
						); ?>
					</div><!-- .navbar -->
				</div>
  			<div class="col-sm-2 text-center">
	  			<a href="http://verapdf.org/subscribe" title="subscribe" class="btn btn-lg btn-warning">Subscribe&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>
		  	</div>
			</div>
		</div><!-- .container -->
	</nav><!-- .site-navigation -->

	<?php
	get_template_part('masthead', 	$page_id == verapdf_get_verapage_id() ? 'home' : 'page');
	?>

<section class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12">
