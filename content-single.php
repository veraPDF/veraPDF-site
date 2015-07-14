<?php
/**
 * @package Verapdf
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'verapdf' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div class="entry-meta">
			<?php verapdf_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'verapdf' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'verapdf' ) );

			if ( ! verapdf_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. <a href="%3$s" title="Permalink to %4$s" rel="bookmark"><i class="fa fa-bookmark"></i> Permalink</a>', 'verapdf' );
				} else {
					$meta_text = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark"><i class="fa fa-bookmark"></i> Permalink</a>', 'verapdf' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. <a href="%3$s" title="Permalink to %4$s" rel="bookmark"><i class="fa fa-bookmark"></i> Permalink</a>', 'verapdf' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. <a href="%3$s" title="Permalink to %4$s" rel="bookmark"><i class="fa fa-bookmark"></i> Permalink</a>', 'verapdf' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'verapdf' ), ' | <span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
