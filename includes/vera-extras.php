<?php
/**
 * Custom functions for the veraPDF theme.
 *
 * @package Verapdf
 */

 /**
  * Return the URL of the page with the verapdf slug
  */
 function verapdf_get_verapage_url() {
   return get_permalink( get_page_by_path( 'verapdf' ) );
 }

 /**
  * Return the URL of the page with the verapdf slug
  */
function verapdf_get_verapage_id() {
  $page = get_page_by_path( 'verapdf' );
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}
