<?php
/**
 * The template for displaying the footer for our them pages.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Verapdf
 */
?>
      </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
    </div><!-- close .row -->
  </div><!-- close .container -->
</section><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
      <div class="site-footer-inner col-sm-12">

        <div class="site-info">
          <?php do_action( 'verapdf_credits' ); ?>
          <span><?php _e('Copyright &copy; 2015 veraPDF consortium','verapdf') ?></span>
        </div><!-- close .site-info -->

      </div>
    </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->
