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
      <div class="site-footer-inner col-sm-2">
        <div class="back-to-top">
          <a class="back-to-top" href="#top">Back to top</a>
        </div>
      </div>
      <div class="site-footer-inner col-sm-8">
        <div class="site-info">
          <?php do_action( 'verapdf_credits' ); ?>
          <span><?php _e('Copyright &copy; 2015 veraPDF consortium','verapdf') ?></span>
        </div><!-- close .site-info -->
      </div>
      <div class="site-footer-inner col-sm-2">
        <div class="cc-info text-left small">
          <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />
          <small>Except where otherwise noted site content created by the <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.verapdf.org" property="cc:attributionName" rel="cc:attributionURL"> veraPDF Consortium</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</small>
        </div>
      </div>
    </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->
