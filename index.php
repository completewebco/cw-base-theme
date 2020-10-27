<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<header class="subheader pt-12 pb-4 relative bg-gray-100 hero">
<div class="container relative z-20 py-24 px-8 text-center">
		<h1 class="pb-1 text-color1">Recent News & Blog</h1>
		<div class="w-full flex justify-center">
			<div class="h-2 w-40 bg-color1 block"></div>
		</div>	
						</div>
	</header>
	<div id="primary" class="content-area">
		<main id="main" class="site-main pb-6">

		<?php
		if ( have_posts() ) :
			
?>
			<ul class="blog-cards container list-reset mt-20 px-5 lg:px-none relative pt-6 pb-10">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				
				
				get_template_part( 'page-templates/content', 'post-card' );
				

			endwhile;



			?>
			<?php


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
?>

	</ul>
	<div class="nav-links-wrap w-full flex justify-center">
	<?php
			the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( '← Previous Page', 'textdomain' ),
				'next_text' => __( 'Next Page →', 'textdomain' ),
			) );

			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


