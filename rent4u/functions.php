<?php
/**
 * rent4u functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rent4u
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

/**
 * Carbon Fields plugin
 */
require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-functions.php';

/**
 * TGM plugin - activate other plugins
 * source - http://tgmpluginactivation.com/installation/
 */
require_once get_template_directory() . '/inc/activation-plugin/tgm-functions.php';


 
function rent4u_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rent4u, use a find and replace
		* to change 'rent4u' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rent4u', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'rent4u' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rent4u_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rent4u_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rent4u_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rent4u_content_width', 640 );
}
add_action( 'after_setup_theme', 'rent4u_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rent4u_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rent4u' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rent4u' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
        'name' => 'Footer Widget Area',
        'id' => 'footer-widget-area',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    	)
	);
}
add_action( 'widgets_init', 'rent4u_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rent4u_scripts() {
	wp_enqueue_style( 'rent4u-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rent4u-style', 'rtl', 'replace' );

	wp_enqueue_style( 'rent4u-style-owlcarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'rent4u-style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	//fonts style
	wp_enqueue_style( 'rent4u-style-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap' );
	wp_enqueue_style( 'rent4u-style-custom', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'rent4u-style-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'rent4u-style-map', get_template_directory_uri() . '/assets/css/style.css.map' );


	//jquery
	wp_deregister_script('jquery');
	wp_enqueue_script( 'rent4u-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'rent4u-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'rent4u-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'rent4u-owlcaroussel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'rent4u-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rent4u_scripts' );

/**
 * key words
 */
function rent4u_add_meta_keywords() {
    echo '<meta name="keywords" content="rent a car, car for rent, " />' . "\n";
}
add_action('wp_head', 'rent4u_add_meta_keywords');

/**
 * Register Custom Navigation Walker
 */
function rent4u_register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'rent4u_register_navwalker' );

/**
 * hero slider
 */
function rest4u_slider_hero_customize_register($wp_customize) {
    $wp_customize->add_section('rest4u_slider_hero_section', array(
        'title'    => __('Hero Slider', 'rent4u'),
        'priority' => 30,
    ));

    // Создаем настройки для 3 слайдов (только заголовок и кнопка)
    for ($i = 1; $i <= 3; $i++) {
        // Заголовок слайда
        $wp_customize->add_setting("rest4u_slider_hero_title_$i", array(
            'default'   => 'Rent Car Experts Service',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("rest4u_slider_hero_title_$i", array(
            'label'    => __("Slide $i Title", 'rent4u'),
            'section'  => 'rest4u_slider_hero_section',
            'type'     => 'text',
        ));

        // Текст кнопки
        $wp_customize->add_setting("rest4u_slider_hero_button_text_$i", array(
            'default'   => 'Contact Us',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("rest4u_slider_hero_button_text_$i", array(
            'label'    => __("Slide $i Button Text", 'rent4u'),
            'section'  => 'rest4u_slider_hero_section',
            'type'     => 'text',
        ));

        // Ссылка кнопки
        $wp_customize->add_setting("rest4u_slider_hero_button_url_$i", array(
            'default'   => '#',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("rest4u_slider_hero_button_url_$i", array(
            'label'    => __("Slide $i Button URL", 'rent4u'),
            'section'  => 'rest4u_slider_hero_section',
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'rest4u_slider_hero_customize_register');

/**
 * include Custom Posts
 */
require get_template_directory() . '/inc/custom-post/custom-post.php';


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
// register Hero image
require get_template_directory() . '/customize/cusomize-hero-img.php';



