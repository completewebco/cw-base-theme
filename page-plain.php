<?php
/*
Template Name: Plain Styled Page No Header
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main typeset">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'page-templates/content', 'page-product' );

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
