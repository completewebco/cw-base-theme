<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function starter_customize_register( $wp_customize ) 
{

	$wp_customize->add_setting( "logo_footer", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(new WP_Customize_Upload_Control( 
		$wp_customize, 
		'logo_footer', 
		array(
			'label'      => __( 'Footer Logo', 'mytheme' ),
			'section'    => 'title_tagline',
		) ) 
	);


	// Add Social URL Fields
    $wp_customize->add_section( 'social_settings', array(
		'title' => __( 'Social Media Icons', 'theme_slug' ),
		'priority' => 100,
	));
	
	$social_sites = theme_slug_get_social_sites();
	$priority = 5;

	foreach( $social_sites as $social_site ) {
	
		$wp_customize->add_setting( "$social_site", array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		));
	
		$wp_customize->add_control( $social_site, array(
			'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
			'section' => 'social_settings',
			'type' => 'text',
			'priority' => $priority,
		));
	
		$priority += 5;
	}

	//Add Contact
	$wp_customize->add_section( 'contact_settings', array(
		'title' => __( 'Contact Info', 'theme_slug' ),
		'priority' => 100,
	));

	$wp_customize->add_setting( "phone", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control( "phone", array(
		'label' => 'Phone Number',
		'section' => 'contact_settings',
		'type' => 'text',
		'priority' => '5',
	));

	$wp_customize->add_setting( "address", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
	));
	$wp_customize->add_control( "address", array(
		'label' => 'Address',
		'section' => 'contact_settings',
		'type' => 'textarea',
		'priority' => '6',
	));

	//Add Newsletter
	$wp_customize->add_section( 'newsletter_settings', array(
		'title' => __( 'Newsletter', 'theme_slug' ),
		'priority' => 100,
	));

	$wp_customize->add_setting( "newsletter_title", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control( "newsletter_title", array(
		'label' => 'Newsletter Title',
		'section' => 'newsletter_settings',
		'type' => 'text',
		'priority' => '5',
	));
	$wp_customize->add_setting( "newsletter_subtitle", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control( "newsletter_subtitle", array(
		'label' => 'Newsletter Sub Title',
		'section' => 'newsletter_settings',
		'type' => 'text',
		'priority' => '5',
	));

	$wp_customize->add_setting( "background_image", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(new WP_Customize_Upload_Control( 
		$wp_customize, 
		'background_image', 
		array(
			'label'      => __( 'Background Image', 'mytheme' ),
			'section'    => 'newsletter_settings',
		) ) 
	);

	// Single Job Page
	$wp_customize->add_section( 'job_settings', array(
		'title' => __( 'Jobs Settings', 'theme_slug' ),
		'priority' => 100,
	));

	$wp_customize->add_setting( "jobs_background_image", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(new WP_Customize_Upload_Control( 
		$wp_customize, 
		'jobs_background_image', 
		array(
			'label'      => __( 'Jobs Background Image', 'mytheme' ),
			'section'    => 'job_settings',
		) ) 
	);
	$wp_customize->add_setting( "jobs_text", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
	));
	$wp_customize->add_control( "jobs_text", array(
		'label' => 'Recent Positions Text',
		'section' => 'job_settings',
		'type' => 'textarea',
		'priority' => '6',
	));

}
add_action( 'customize_register', 'starter_customize_register');


/**
 * Social Media icon helper functions
 * 
 * @return array
 * 
 * @link: https://www.competethemes.com/social-icons-wordpress-menu-theme-customizer/
 */
function theme_slug_get_social_sites() {
 
	// Store social site names in array
	$social_sites = array(
		'facebook',
		'twitter', 
		'instagram', 
		'youtube',
		'linkedin',
		'google-plus',
		'flickr',
		'pinterest', 
		'vimeo',
		'tumblr',
		'dribbble',
		'rss',
		'email'
	);
return $social_sites;
}









function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_section( 'mytheme_new_section_name' , array(
		'title'      => __('Visible Section Name','mytheme'),
		'priority'   => 30,
	) );
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => '_s_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => '_s_customize_partial_blogdescription',
		) );
	}


}
add_action( 'customize_register', '_s_customize_register' );






/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function _s_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function _s_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );
