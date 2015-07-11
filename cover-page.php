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
            <h1><?php echo get_post_meta(get_option('page_on_front'), 'tag-line', true); ?></h1>
            <p class="lead">
              <?php $header_image = get_header_image();
              if ( ! empty( $header_image ) ) { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                  <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="The veraPDF logo" title="veraPDF logo">
                </a>
              <?php } // end if ( ! empty( $header_image ) ) ?>
            </p>
            <p class="lead">
            <?php
              $post = get_post(get_option('page_on_front'));
              echo $post->post_content;
            ?>
            </p>
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>register" class="btn btn-lg btn-default">Register&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- Add the extra clearfix for only the required viewport -->
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-4">
                  <a href="<?php echo verapdf_get_verapage_url(); ?>" class="btn btn-lg btn-default">Explore&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
<?php get_footer(); ?>
