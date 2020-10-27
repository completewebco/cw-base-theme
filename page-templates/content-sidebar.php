<?php
/**
 * Template part for displaying Innerpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>

<header class="subheader text-center py-12 bg-color2">
	<h1 class="entry-title text-5xl font-titlingmt uppercase text-white"><?php echo get_the_title(); ?></h1>
</header><!-- .entry-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Block Editor -->
<div class="md:flex flex-row typeset">
    <div class="sidebar md:w-1/4 p-8">
        <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div>
    <div class="entry-content md:w-3/4 p-8">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                    'after'  => '</div>',
                ) );
                ?>
    </div>
</div>    




		

