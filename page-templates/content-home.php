<?php
/**
 * Template part for displaying Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */



?>

<!-- WordPress Block Content -->
<div class="entry-content relative">
	<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
			?>
</div><!-- .entry-content -->			


		

