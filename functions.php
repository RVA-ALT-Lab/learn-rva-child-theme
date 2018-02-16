<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_script( 'extras', get_stylesheet_directory_uri() . '/js/extras.js', array(), $the_theme->get( 'Version' ), true );
}

/** RVA History and Culture Custom Functions.php **/

function create_posttype(){
	register_post_type('content-area',
		array(
			'labels' => array(
					'name' => __('Content Area'),
					'singular_name' => __('Content Area'),
				),
				'supports' => array('title', 'editor','thumbnail', 'comments', 'revisions'),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'content-area'),
				'hierarchical' => true
			)
		);

	register_post_type('work-sample',
		array(
			'labels' => array(
					'name' => __('Work Sample'),
					'singular_name' => __('Work Sample'),
				),
				'supports' => array('title', 'editor', 'thumbnail', 'comments', 'revisions'),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'work-sample'),
				'hierarchical' => true
			)
		);
}

add_action('init', 'create_posttype');

function create_custom_taxonomy(){
	register_taxonomy(
		'content-area',
		'work-sample',
		array(
			'label' => 'Associated Area',
			'hierarchical' => true
			)
		);


	register_taxonomy(
		'work-sample-tags',
		'work-sample',
		array(
			'label' => 'Tags',
			'singular_name' => 'Tag',
			'hierarchical' => false,
			'rewrite' => true,
			'query_var' => true
			)
		);
}

add_action('init', 'create_custom_taxonomy');
