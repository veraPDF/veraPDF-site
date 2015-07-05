<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Verapdf
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'verapdf' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'verapdf' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->

	</section><!-- .content-padder -->

<?php
// Disabled sidebars 5/7/2015
// get_sidebar(); ?>
<?php get_footer(); ?>
