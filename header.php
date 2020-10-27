<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

namespace WP_Tailwind;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="https://use.typekit.net/dps3tcd.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	
</head>

<?php get_template_part( 'components/component', 'header' ); ?>