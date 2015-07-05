<?php
/**
 * Template Name: Cover Page
 *
 * The Cover Page for our theme.
 *
 * @package Verapdf
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="The veraPDF project, definitive, open source PDF/A validation.">
  	<meta name="author" content="veraPDF Consortium">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  	<title><?php wp_title( '|', true, 'right' ); ?></title>

  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  	<?php wp_head(); ?>

  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  	<![endif]-->
  </head>
  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">veraPDF</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="/home">Home</a></li>
                  <li><a href="/features">Features</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">The definitive ISO 19005 (PDF/A) validator.</h1>
            <a href="http://verapdf.org/" title="veraPDF" rel="home">
						  <img src="http://verapdf.openpreservation.org/wp-content/uploads/sites/3/2015/06/veraPDF-logo-200.png" width="200" height="100" alt="">
						</a>
            <p class="lead">
              Designed to meet the needs of digital preservationists and supported
              by leading members of the PDF software developer community, veraPDF
              is a purpose-built, open source, file-format validator covering all
              PDF/A parts and conformance levels.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <?php do_action( 'verapdf_credits' ); ?>
    					<span><?php _e('Copyright &copy; 2015 veraPDF consortium','verapdf') ?></span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=1.11.3'></script>
    <script type='text/javascript' src='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/resources/bootstrap/js/bootstrap.min.js?ver=1.11.3'></script>
    <script type='text/javascript' src='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/js/bootstrap-wp.js?ver=1.11.3'></script>
    <script type='text/javascript' src='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/js/skip-link-focus-fix.js?ver=20130115'></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
