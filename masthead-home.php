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
              <div class="container">
                <p class="lead">
                <?php $header_image = get_header_image();
                if ( ! empty( $header_image ) ) { ?>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" class="shadowed" alt="The veraPDF logo" title="veraPDF logo" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
                  </a>
                <?php } // end if ( ! empty( $header_image ) ) ?>
                </p>
                <h1><?php bloginfo( 'description' ); ?></h1>
                <p class="lead"><?php echo get_post_meta($wp_query->post->ID, 'tag-line', true); ?></p>
                <p><a class="btn btn-lg btn-primary" href="http://downloads.verapdf.org/rel/verapdf-installer.zip" role="button">Download veraPDF&nbsp;<i class="fa fa-download"></i></a></p>
              </div>
            </div>
          </div><!-- .row -->
        </div><!-- .container-fluid -->
      </header><!-- #masthead -->
