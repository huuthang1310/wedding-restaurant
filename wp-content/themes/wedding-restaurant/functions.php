<?php
/**
 * Wedding Restaurant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wedding_Restaurant
 */

if ( ! function_exists( 'wedding_restaurant_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wedding_restaurant_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wedding Restaurant, use a find and replace
		 * to change 'wedding-restaurant' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wedding-restaurant', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wedding-restaurant' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wedding_restaurant_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wedding_restaurant_setup' );

add_action( 'wp_enqueue_scripts', 'studentservicesplus_theme_register_js');
function studentservicesplus_theme_register_js(){
    $js_jqueryUrl = get_template_directory_uri() . '/js/jquery';
    
    wp_register_script( 'studentservicesplus_theme_jquery', $js_jqueryUrl . '/jquery.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery');

    wp_register_script( 'studentservicesplus_theme_jquery-migrate', $js_jqueryUrl . '/jquery-migrate.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery-migrate');

    $js_pluginsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/js';

    wp_register_script( 'studentservicesplus_theme_jquery_themepunch_tools_min', $js_pluginsUrl . '/jquery.themepunch.tools.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery_themepunch_tools_min');

    wp_register_script( 'studentservicesplus_theme_jquery_themepunch_revolution_min', $js_pluginsUrl . '/jquery.themepunch.revolution.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery_themepunch_revolution_min');

    $js_jquery_uiUrl = get_template_directory_uri() . '/js/jquery/ui';

    wp_register_script( 'studentservicesplus_theme_effect_min', $js_jquery_uiUrl . '/effect.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_effect_min');

    $jsUrl = get_template_directory_uri() . '/js';

    wp_register_script( 'studentservicesplus_theme_script-core', $jsUrl . '/script-core.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_script-core');

    $js_plugins_goodlayers_core_plugins_combineUrl = get_template_directory_uri() . '/plugins/goodlayers-core/plugins/combine';
    wp_register_script( 'studentservicesplus_theme_goodlayers_core_plugins_combine', $js_plugins_goodlayers_core_plugins_combineUrl . '/script.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_goodlayers_core_plugins_combine');

    
    $js_plugins_revslider_public_assets_js_extensionsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/js/extensions';

    wp_register_script( 'studentservicesplus_theme_revolution_extension_slideanims_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.slideanims.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_slideanims_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_layeranimation_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.layeranimation.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_layeranimation_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_kenburn_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.kenburn.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_kenburn_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_navigation_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.navigation.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_navigation_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_parallax_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.parallax.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_parallax_min');

}



add_action( 'wp_enqueue_scripts', 'studentservicesplus_theme_register_style');

function studentservicesplus_theme_register_style(){

    $css_pluginsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/css';
    
    wp_register_style( 'studentservicesplus_theme_settings', $css_pluginsUrl . '/settings.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_settings');
    
    $cssUrl = get_template_directory_uri() . '/css';
    
    wp_register_style( 'studentservicesplus_theme_style-core', $cssUrl . '/style-core.css', array(), '1.1');
    wp_enqueue_style('studentservicesplus_theme_style-core');

    wp_register_style( 'studentservicesplus_theme_financity-style-custom', $cssUrl . '/financity-style-custom.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_financity-style-custom');

    $css_plugins_goodlayersUrl = get_template_directory_uri() . '/plugins/goodlayers-core/plugins/combine';

    wp_register_style( 'studentservicesplus_theme_style', $css_plugins_goodlayersUrl . '/style.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_style');

    $css_plugins_goodlayers_includeUrl = get_template_directory_uri() . '/plugins/goodlayers-core/include/css';

    wp_register_style( 'studentservicesplus_theme_page-builder', $css_plugins_goodlayers_includeUrl . '/page-builder.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_page-builder');

}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wedding_restaurant_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wedding_restaurant_content_width', 640 );
}
add_action( 'after_setup_theme', 'wedding_restaurant_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wedding_restaurant_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wedding-restaurant' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wedding-restaurant' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wedding_restaurant_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wedding_restaurant_scripts() {
	wp_enqueue_style( 'wedding-restaurant-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wedding-restaurant-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wedding-restaurant-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedding_restaurant_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

