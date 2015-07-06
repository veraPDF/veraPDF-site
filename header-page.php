<?php
/**
 * The Header partial for our themes pages.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
?>

	<header class="site-navigation">
	<?php // substitute the class "container-fluid" below if you want a wider content area ?>
		<div class="container">
			<div class="row">
				<div class="site-navigation-inner col-sm-12">
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
							<a class="navbar-brand" href="<?php echo verapdf_get_verapage_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
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
			</div>
		</div><!-- .container -->
	</header><!-- .site-navigation -->

<div id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="mask">
		<div class="container">
			<div class="row">
				<div class="site-header-inner col-sm-12">

					<div class="site-branding">
						<h1 class="site-title"><?php bloginfo( 'description' ); ?></h1>
					</div>

					<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
						</a>
					<?php } // end if ( ! empty( $header_image ) ) ?>

				</div>
			</div>
			<div class="row mask showcase">
				<div class="col-lg-4">
					<i class="active fa fa-check-circle fa-5x"></i>
					<h2>PDF/A Validation</h2>
					<p>
						veraPDF software will provide validation of all PDF/A parts &amp; conformance levels.
						Users can define further checks in order to enforce institutional policy.
					</p>
					<p><a class="btn btn-primary" href="#" role="button">Read more &raquo;</a></p>
				</div>
				<div class="col-lg-4">
					<i class="fa fa-legal fa-5x"></i>
					<h2>Open Licensing</h2>
					<p>
						veraPDF is dual-licensed under the GNU General Public License v3 or
						later <a href="http://opensource.org/licenses/GPL-3.0">(GPLv3+)</a> and
						Mozilla Public License v2 or later <a href="http://opensource.org/licenses/MPL-2.0">(MPLv2+)</a>.
					</p>
					<p><a class="btn btn-primary" href="#" role="button">Read more  &raquo;</a></p>
				</div>
				<div class="col-lg-4">
					<i class="fa fa-info-circle fa-5x"></i>
					<h2>About veraPDF</h2>
					<p>
						veraPDF is funded by the European Union&#8217;s <a href="http://www.preforma-project.eu/">PREFORMA</a> project. The contract was awarded to the veraPDF consortium in April, 2015.
					</p>
					<p><a class="btn btn-primary" href="#" role="button">Read more  &raquo;</a></p>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .mask -->
</div><!-- #masthead -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12">
