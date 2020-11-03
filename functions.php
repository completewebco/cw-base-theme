<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Main Menu', '_s' ),
			'menu-2' => esc_html__( 'Mobile Menu', '_s' ),
			'menu-3' => esc_html__( 'Footer Menu', '_s' ),
			'menu-4' => esc_html__( 'CTA Menu', '_s' ),
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

		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 235,
			'width'       => 235,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/* ---------------------------------------------------------------------------
 * Acc Front CSS to WP Admin


function admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/dist/main.blocks.css');
  }
  add_action('admin_enqueue_scripts', 'admin_style');

 /* --------------------------------------------------------------------------- */

/* ---------------------------------------------------------------------------
 * Replace Login Logo
 * --------------------------------------------------------------------------- */

//changing the logo
function my_custom_login_logo() {
	$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	echo '<style type="text/css">
	body {background-color:#4D4D4D;}
    h1 a { background-image:url('. esc_url( $image[0] ) .') !important; }
.login h1 a {height: 111px;width:282px;background-size:80%;margin-top:100px;}
#login {padding: 1% 0 0;}
.login #backtoblog a, .login #nav a {color:#ddd;}
    </style>';
    }
    add_action('login_head', 'my_custom_login_logo');
	$siteurl = get_site_url();
    // changing the login page URL
    function put_my_url(){
    return ( $siteurl ); // putting my URL in place of the WordPress one
    }
    add_filter('login_headerurl', 'put_my_url');



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h2>',
	) );
register_sidebar( array(
	'name'          => esc_html__( 'Footer Column 2', '_s' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', '_s' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', '_s' ),
				'id'            => 'sidebar-4',
				'description'   => esc_html__( 'Add widgets here.', '_s' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );

			register_sidebar( array(
				'name'          => esc_html__( 'Footer Column 5', '_s' ),
					'id'            => 'sidebar-5',
					'description'   => esc_html__( 'Add widgets here.', '_s' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				) );

			register_sidebar( array(
				'name'          => esc_html__( 'Mobile Widget Area', '_s' ),
					'id'            => 'sidebar-6',
					'description'   => esc_html__( 'Add widgets here.', '_s' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title text-base pb-3">',
					'after_title'   => '</h3>',
				) );	
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );
	wp_enqueue_style( 'production', get_template_directory_uri() .'/dist/main.css', false);

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/dist/main.js', array(), '20151215', true );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/* ---------------------------------------------------------------------------
 * Disable Emojis
 * --------------------------------------------------------------------------- */
add_action( 'init', 'disable_emojis' );
function disable_emojis() {

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

}

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array  $plugins
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * 
 * Social Icons Shortcode from Customizer
 * 
 */
function show_social_icons() {

	$social_sites = theme_slug_get_social_sites();

	// Any inputs that aren't empty are stored in $active_sites array
	foreach( $social_sites as $social_site ) {
		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[] = $social_site;
		}
	}

// For each active social site, add it as a list item
if ( !empty( $active_sites ) ) {
	$output = '';
	$out = "<ul class='social-media-icons list-reset flex align-center m-0 p-0'>";
	
	foreach ( $active_sites as $active_site ) {
		if( $active_site == 'facebook' ) {
			$out .='<li><a href="'. get_theme_mod( $active_site ) .'" target="_blank"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;"
			xml:space="preserve">
	   <g>
		   <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
			   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
			   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
			   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
	   </g>
	   </svg>
		  </a></li>';
		}
		if( $active_site == 'twitter' ) {
			$out .='<li> <a href="'. get_theme_mod( $active_site ) .'" target="_blank"><?xml version="1.0" encoding="iso-8859-1"?>
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
			c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
			c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
			c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
			c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
			c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
			C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
			C480.224,136.96,497.728,118.496,512,97.248z"/>
	</g>
</g>
			</svg>
			</a> </li>';
		}
		if( $active_site == 'instagram' ) {
			$out .='<li> <a href="'. get_theme_mod( $active_site ) .'" target="_blank">
			<svg id="instagram-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 35 35">
<defs>
<linearGradient id="linear-gradient" y1="0.103" x2="1" y2="1" gradientUnits="objectBoundingBox">
  <stop offset="0" stop-color="#b28f59"/>
  <stop offset="1" stop-color="#f2dfa5"/>
</linearGradient>
</defs>
<path id="Path_36" data-name="Path 36" d="M25.341,0H9.659A9.67,9.67,0,0,0,0,9.659V25.341A9.67,9.67,0,0,0,9.659,35H25.341A9.67,9.67,0,0,0,35,25.341V9.659A9.67,9.67,0,0,0,25.341,0Zm6.554,25.341a6.561,6.561,0,0,1-6.554,6.553H9.659a6.561,6.561,0,0,1-6.553-6.553V9.659A6.561,6.561,0,0,1,9.659,3.105H25.341a6.561,6.561,0,0,1,6.554,6.553V25.341Z" fill="url(#linear-gradient)"/>
<path id="Path_37" data-name="Path 37" d="M49.987,40.97a9.018,9.018,0,1,0,9.019,9.019A9.029,9.029,0,0,0,49.987,40.97Zm0,14.931A5.913,5.913,0,1,1,55.9,49.988,5.92,5.92,0,0,1,49.987,55.9Z" transform="translate(-32.487 -32.488)" fill="url(#linear-gradient)"/>
<path id="Path_38" data-name="Path 38" d="M121.2,28.251a2.276,2.276,0,1,0,1.611.667A2.286,2.286,0,0,0,121.2,28.251Z" transform="translate(-94.301 -22.402)" fill="url(#linear-gradient)"/>
</svg>
</a> </li>';
		}
		if( $active_site == 'youtube' ) {
			$out .='<li> <a href="'. get_theme_mod( $active_site ) .'" target="_blank"><svg width="31" height="31" viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
			<path d="M422.6 193.6c-5.3-45.3-23.3-51.6-59-54 -50.8-3.5-164.3-3.5-215.1 0 -35.7 2.4-53.7 8.7-59 54 -4 33.6-4 91.1 0 124.8 5.3 45.3 23.3 51.6 59 54 50.9 3.5 164.3 3.5 215.1 0 35.7-2.4 53.7-8.7 59-54C426.6 284.8 426.6 227.3 422.6 193.6zM222.2 303.4v-94.6l90.7 47.3L222.2 303.4z"></path>
			</svg></a> </li>';
		}
		if( $active_site == 'linkedin' ) {
			
			$out .='<li><a href="'. get_theme_mod( $active_site ) .'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a> </li>';
		}
		if( $active_site == 'pinterest' ) {
			
			$out .='<li><a href="'. get_theme_mod( $active_site ) .'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/></svg></a> </li>';
		}
	}
	
	$out .= "</ul>";

return html_entity_decode($out);
}
}
add_shortcode( 'social-icons', 'show_social_icons' );

function contact_info() {
	$output = '';
	$out = '<p class="text-lg pb-5">Phone Contact:<span class="font-bold">'. get_theme_mod( 'phone') .'</span></p>';
	$out .= '<p class="text-lg pb-1">Address:</p>';
	$out .= '<p class="text-lg font-bold">'. get_theme_mod( 'address') .'</p>';
	return html_entity_decode($out);
	
}
add_shortcode( 'contact-info', 'contact_info' );



/**
 * Gravity Forms A
 * ll Checkboxes
 */

add_filter( 'gform_field_validation', 'checkbox_all_required', 10, 4 );
function checkbox_all_required( $result, $value, $form, $field ) {
	if ( 'checkbox' == $field->get_input_type() && $field->isRequired ) {
		foreach ( $value as $choice ) {
			if ( empty( $choice ) ) {
				$result['is_valid'] = false;
				$result['message'] = 'All checkboxes must be ticked.';
				break;
			}
		}
	}
    return $result;
}

?>