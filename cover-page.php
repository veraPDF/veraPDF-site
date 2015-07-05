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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' id='verapdf-bootstrap-wp-css'  href='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/css/bootstrap-wp.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='verapdf-bootstrap-css'  href='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/resources/bootstrap/css/bootstrap.min.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='verapdf-font-awesome-css'  href='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/css/font-awesome.min.css?ver=4.1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='verapdf-style-css'  href='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/style.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='verapdf-cover-css'  href='http://verapdf.wordpress.openpreservation.org/wp-content/themes/verapdf/includes/css/bootstrap-cover.css?ver=4.2.2' type='text/css' media='all' />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                  <li class="active"><a href="/cover">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
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
