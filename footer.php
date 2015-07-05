<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Verapdf
 */
get_template_part('footer', is_front_page() ? 'cover' : 'page'); ?>

<?php wp_footer(); ?>

</body>
</html>
