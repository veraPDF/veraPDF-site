<?php
/**
 * The Header partial for our themes pages.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
?>
      <div id="masthead" class="site-header" role="banner">
      <?php // substitute the class "container-fluid" below if you want a wider content area ?>
        <div class="mask">
      		<div class="container-fluid">
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
      				<div class="container">
      				<div class="col-lg-4">
      					<i class="active fa fa-check-circle fa-5x"></i>
      					<h2>PDF/A Validation</h2>
      					<p>
      						veraPDF software will provide validation of all PDF/A parts &amp; conformance levels.
      						Users can define further checks in order to enforce institutional policy.
      					</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more &raquo;</a></p>
      				</div>
      				<div class="col-lg-4">
      					<i class="fa fa-legal fa-5x"></i>
      					<h2>Open Licensing</h2>
      					<p>
      						veraPDF is dual-licensed under the GNU General Public License v3 or
      						later <a href="http://opensource.org/licenses/GPL-3.0">(GPLv3+)</a> and
      						Mozilla Public License v2 or later <a href="http://opensource.org/licenses/MPL-2.0">(MPLv2+)</a>.
      					</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more  &raquo;</a></p>
      				</div>
      				<div class="col-lg-4">
      					<i class="fa fa-info-circle fa-5x"></i>
      					<h2>About veraPDF</h2>
      					<p>
      						veraPDF is funded by the European Union&#8217;s <a href="http://www.preforma-project.eu/">PREFORMA</a> project. The contract was awarded to the veraPDF consortium in April, 2015.
      					</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more  &raquo;</a></p>
      				</div>
      			</div>
      		</div>
      		</div><!-- .container -->
      	</div><!-- .mask -->
      </div><!-- #masthead -->
