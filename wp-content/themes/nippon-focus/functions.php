<?php
/**
 * Nippon-focus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nippon-focus
 */
define('VERSION', '1.0.0');
if (!function_exists('nippon_focus_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function nippon_focus_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Nippon-focus, use a find and replace
         * to change 'nippon-focus' to the name of your theme in all the template files.
         */
        load_theme_textdomain('nippon-focus', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'nippon-focus'),
        ));
        register_nav_menus(array(
            'menu-2' => esc_html__('Language', 'nippon-focus'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('nippon_focus_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'nippon_focus_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nippon_focus_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('nippon_focus_content_width', 640);
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'nippon_focus_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nippon_focus_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'nippon-focus'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'nippon-focus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'nippon_focus_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nippon_focus_scripts()
{
    // wp_enqueue_style( 'nippon-focus-style', get_stylesheet_uri() );

    // wp_enqueue_script( 'nippon-focus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    // wp_enqueue_script( 'nippon-focus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_style('font-awesome', get_theme_file_uri('assets/css/font-awesome.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.css'));
    wp_enqueue_style('css-style', get_theme_file_uri('assets/css/style.css'), array(), time(), false);
    wp_enqueue_style('lightGallery', get_theme_file_uri('assets/css/lightGallery.css'));
    wp_enqueue_style('custom', get_theme_file_uri('assets/css/custom.css'), array(), time(), false);

    // wp_enqueue_script('jquery', get_theme_file_uri('assets/js/jquery-2.1.4.min.js'), 'jQuery', VERSION, true);

    // wp_deregister_script('jquery-core');
    // wp_register_script('jquery-core', 'https://code.jquery.com/jquery-2.1.4.min.js', false, '2.1.4', true);
    // wp_enqueue_script('jquery-core');

    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery'), time(), true);

    wp_enqueue_script('responsiveslides', get_theme_file_uri('assets/js/responsiveslides.min.js'), array('jquery'), VERSION, true);
    // wp_enqueue_script('jquery-migrate', "//code.jquery.com/jquery-migrate-3.3.2.js", array(), false, true);

    wp_enqueue_script('lightGallery', get_theme_file_uri('assets/js/lightGallery.js'), array('jquery'), VERSION, true);
    // wp_enqueue_script('SmoothScroll', get_theme_file_uri('assets/js/SmoothScroll.min.js'), array('jquery'), VERSION, true);
    wp_enqueue_script('move-top', get_theme_file_uri('assets/js/move-top.js'), array('jquery'), VERSION, true);
    wp_enqueue_script('easing', get_theme_file_uri('assets/js/easing.js'), array('jquery'), VERSION, true);
    wp_enqueue_script('nippon-custom', get_theme_file_uri('assets/js/custom.js'), array('jquery'), VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'nippon_focus_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
// ACF Options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Contact Settings',
        'menu_title' => 'Contact Info',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Gallery',
        'menu_title' => 'Gallery',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Slider',
        'menu_title' => 'Slider',
        'parent_slug' => 'theme-general-settings',
    ));
}
// add_filter('acf/settings/show_admin', '__return_false');