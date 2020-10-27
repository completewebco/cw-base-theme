<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<ul class="blog-cards grid grid-column-1 lg-grid-column-3 gap20">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				$blog_category           = get_the_category( get_the_ID() );
				?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<a class="block bg-white" href="<?php the_permalink(); ?>">
						
						<div class="prm plm ptm pbm">
							<p class="pbm font-weight-bold blue uppercase smm line-height-headline-tight"><?php foreach ( $blog_category as $key => $value) { echo $value->category_nicename . " "; } ?></p>
							<h3 class="display black font-weight-bold line-height-headline pb0"><?php the_title(); ?></h3>
							<p class="smm gray uppercase"><?php echo get_the_date( 'F j, Y' ); ?></p>
						</div> 
					</a>  
				</li>
				<?php

			endwhile;

			pagination_nav();


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</ul>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
