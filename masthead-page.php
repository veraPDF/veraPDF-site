<?php
/**
 * The general page masthead partial for our theme.
 *
 * Displays all of the <masthead> section.
 *
 * @package Verapdf
 */
?>
<div id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="mask">
    <div class="container">
      <div class="row">
        <div class="site-header-inner col-sm-12">
          <h1><?php echo $wp_query->post->post_title; ?></h1>
          <p class="lead"><?php echo get_post_meta($wp_query->post->ID, 'tag-line', true); ?></p>
        </div>
      </div><!-- .row --> 
    </div><!-- .container -->
  </div><!-- .mask -->
</div><!-- #masthead -->
