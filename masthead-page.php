<?php
/**
 * The general page masthead partial for our theme.
 *
 * Displays all of the <masthead> section.
 *
 * @package Verapdf
 */
?>
<header id="masthead" class="page-header radialmask" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div class="container">
      <div class="row">
          <h1><?php echo $wp_query->post->post_title; ?></h1>
          <p class="lead"><?php echo get_post_meta($wp_query->post->ID, 'tag-line', true); ?></p>
      </div><!-- .row -->
    </div><!-- .container -->
</header><!-- #masthead -->
