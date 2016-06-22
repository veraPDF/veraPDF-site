<?php
/**
 * The template for displaying the footer.
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
     <div class="site-footer-inner col-sm-3">
       <div class="text-left small">
         <p>veraPDF</p>
         <ul class="list-unstyled">
           <li><a href="http://docs.verapdf.org">Docs</a></li>
           <li><a href="getting-started">Getting started</a></li>
           <li><a href="open-source">Open source</a></li>
         </ul>
       </div>
     </div>
     <div class="site-footer-inner col-sm-6 center small">
       <p>Follow us:</p>
       <ul class="list-inline">
         <li><a href="https://github.com/veraPDF/"><i class="fa fa-github"></i><br/>GitHub</a></li>
         <li><a href="https://twitter.com/_veraPDF/"><i class="fa fa-twitter"></i><br/>Twitter</a></li>
         <li><a href="/subscribe"><i class="fa fa-envelope-o"></i><br/>Subscribe</a></li>
       </ul>
     </div>
     <div class="site-footer-inner col-sm-3">
       <div class="cc-info text-right small">
         <div>
           <a class="back-to-top" href="#top">Back to top <i class="fa fa-arrow-up"></i></a>
         </div>
       </div>
     </div>
  </div>
  <hr/>
  <div class="row">
    <div class="site-info small">
      <?php do_action( 'verapdf_credits' ); ?>
      <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><i class="fa fa-cc fa-2x"></i>
      <p>Except where otherwise noted content created by the <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.verapdf.org" property="cc:attributionName" rel="cc:attributionURL"> veraPDF Consortium</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
      <p><?php _e('Copyright &copy; 2015 veraPDF consortium','verapdf') ?></p>
    </div><!-- close .site-info -->
  </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->
<?php wp_footer(); ?>

</body>
</html>
<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg">
  <filter id="drop-shadow">
    <feGaussianBlur in="SourceAlpha" stdDeviation="2.2"/>
    <feOffset dx="12" dy="12" result="offsetblur"/>
    <feFlood flood-color="rgba(0,0,0,0.5)"/>
    <feComposite in2="offsetblur" operator="in"/>
    <feMerge>
      <feMergeNode/>
      <feMergeNode in="SourceGraphic"/>
    </feMerge>
  </filter>
</svg>
