								<?php
/**
 * Lovely Dust Child theme functions.
 *
 * This child theme exists only to hold custom code that's staged in GitHub
 * (wessontechservices/lovelydust, staging branch) and deployed here on an
 * hourly schedule. It intentionally has no template files - every page
 * continues to render through the parent Divi theme and the Divi Builder.
 */

if ( ! defined( 'ABSPATH' ) ) {
  	exit;
}

/**
 * Enqueue the parent Divi stylesheet, then this child theme's stylesheet
   * on top of it so custom CSS added here can override Divi's defaults.
   */
function lovelydust_child_enqueue_styles() {
  	wp_enqueue_style(
      		'divi-parent-style',
      		get_template_directory_uri() . '/style.css',
      		array(),
      		wp_get_theme( get_template() )->get( 'Version' )
      	);

	wp_enqueue_style(
    		'lovelydust-child-style',
    		get_stylesheet_uri(),
    		array( 'divi-parent-style' ),
    		wp_get_theme()->get( 'Version' )
    	);
}
add_action( 'wp_enqueue_scripts', 'lovelydust_child_enqueue_styles' );

/**
 * Custom code deployed from GitHub staging lives below this line.
   */
