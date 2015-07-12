<?php
/**
 * Template Name: Cover Page
 *
 * The Cover Page for our theme.
 *
 * @package Verapdf
 */
get_header(); ?>
          <div class="inner cover">
            <header id="masthead">
              <div class="row">
                <h1><?php echo get_post_meta(get_option('page_on_front'), 'tag-line', true); ?></h1>
                <p class="lead">
                  <?php $header_image = get_header_image();
                  if ( ! empty( $header_image ) ) { ?>
                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="The veraPDF logo" title="veraPDF logo">
                  <?php } // end if ( ! empty( $header_image ) ) ?>
                </p>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <?php
                  $post = get_post(get_option('page_on_front'));
                  echo $post->post_content;
                  ?>
                </div>
              </div>
            </header>
            <nav class="container">
              <div class="row">
                <div class="col-md-4">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>subscribe" class="btn btn-lg btn-default">Subscribe&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- Add the extra clearfix for only the required viewport -->
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-4">
                  <a href="<?php echo verapdf_get_verapage_url(); ?>" class="btn btn-lg btn-default">Explore&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </nav>
          </div>
<?php get_footer(); ?>
