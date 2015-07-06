<?php
/**
 * The Header for our theme's cover page.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Verapdf
 */
?><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">

      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">veraPDF</h3>
          <nav>
            <ul class="nav masthead-nav">
              <li><a href="<?php echo get_permalink( get_page_by_path( 'verapdf' ) ) . '/#validation'; ?>">PDF/A Validation</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'verapdf' ) ) . '/#licensing'; ?>">Licensing</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'verapdf' ) ) . '/#about'; ?>">About</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
