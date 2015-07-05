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
            <?php $header_image = get_header_image();
            if ( ! empty( $header_image ) ) { ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
              </a>
            <?php } // end if ( ! empty( $header_image ) ) ?>
            <p class="lead">
            <?php
              $post = get_post(get_option('page_on_front'));
              echo $post->post_content;
            ?>
            </p>
            <p class="lead">
              <a href="<?php echo verapdf_get_verapage_url(); ?>" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>
<?php get_footer(); ?>
