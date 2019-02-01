<?php
/**
 * Calm (Twenty Nineteen) functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Calm_business
 */

if ( ! function_exists( 'calm_business_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function calm_business_setup() {

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 176,
                'width'       => 176,
                'flex-width'  => true,
                'flex-height' => false,
                'header-text' => array( 'site-title' ),
            )
        );
    }
} // calm_business_setup
add_action( 'after_setup_theme', 'calm_business_setup', 30 );

function calm_business_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'calm_business' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,400i,600,600i,700,700i';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function calm_business_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'calm_business-fonts', calm_business_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'calm_business_scripts' );
add_action( 'enqueue_block_editor_assets', 'calm_business_scripts' );

/**
 * Load WPCom compatibility file.
 */
require get_stylesheet_directory() . '/inc/wpcom.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';