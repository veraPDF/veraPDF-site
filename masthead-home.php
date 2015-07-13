<?php
/**
 * The Header partial for our themes pages.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
?>
			<header id="masthead" class="site-header mask" role="banner">
			<?php // substitute the class "container-fluid" below if you want a wider content area ?>
				<div class="container-fluid">
					<div class="row">
						<div class="site-header-inner col-sm-12">
							<h1 class="site-title"><?php bloginfo( 'description' ); ?></h1>
							<p class="lead">
							<?php $header_image = get_header_image();
							if ( ! empty( $header_image ) ) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<img src="<?php header_image(); ?>" alt="The veraPDF logo" title="veraPDF logo" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
								</a>
							<?php } // end if ( ! empty( $header_image ) ) ?>
						  </p>
						</div>
					</div><!-- .row -->
					<div class="row showcase mask">
            <div class="container">
							<div class="col-lg-4">
  							<i class="fa fa-info-circle fa-5x"></i>
  							<h2>About veraPDF</h2>
								<p class="lead">
  								veraPDF is a definitive, open source PDF/A validator built with funding form the European Union&#8217;s <a href="http://www.preforma-project.eu/">PREFORMA</a> project.
  							</p>
  							<p><a class="btn btn-lg btn-primary" href="#about" role="button">About Us&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></p>
  						</div>
  						<div class="col-lg-4">
  							<i class="fa fa-check-circle fa-5x"></i>
  							<h2>PDF/A Validation</h2>
  							<p class="lead">
  								veraPDF software will validate all PDF/A parts &amp; conformance levels.
  								Users can define further checks in order to enforce institutional policy.
  							</p>
  							<p><a class="btn btn-lg btn-primary" href="#validation" role="button">Validation&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></p>
  						</div>
  						<div class="col-lg-4">
  							<i class="fa fa-legal fa-5x"></i>
  							<h2>Open Licensing</h2>
								<p class="lead">
  								veraPDF is dual-licensed under the GNU General Public License v3 or
  								later <a href="http://www.gnu.org/licenses/gpl-3.0.en.html" rel="license" title="GNU General Public License v3" hreflang="en">(GPLv3+)</a> and
  								Mozilla Public License v2 or later <a href="https://www.mozilla.org/MPL/2.0/" rel="license" title="Mozilla Public License v2.0" hreflang="en">(MPLv2+)</a>.
  							</p>
  							<p><a class="btn btn-lg btn-primary" href="#licensing" role="button">Licensing&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></p>
  						</div>
            </div><!-- .container -->
          </div><!-- .row -->
				</div><!-- .container-fluid -->
			</header><!-- #masthead -->
