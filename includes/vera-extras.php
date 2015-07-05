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
 * Return the URL of the page with the features slug
 */
function verapdf_get_features_url() {
 return get_permalink( get_page_by_path( 'features' ) );
}

/**
 * Return the URL of the page with the contact slug
 */
function verapdf_get_contact_url() {
 return get_permalink( get_page_by_path( 'contact' ) );
}
