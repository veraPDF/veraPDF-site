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
