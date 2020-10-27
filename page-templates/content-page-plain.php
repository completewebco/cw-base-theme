<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>


	<?php echo '<header class="subheader py-12 relative bg-grad">';?>
			<div class="container relative z-20 px-8 text-center">
			<h1 class="text-white pb-1"><?php echo get_the_title(); ?></h1>
                <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p class="font-thin breadcrumbs pt-3 text-white text-sm" id="breadcrumbs">','</p>' );
                            }
                ?>
			</div>
	</header><!-- .entry-header -->
<div class="relative">	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bg-white">
			<div class="entry-content container py-8 px-5">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
						'after'  => '</div>',
					) );
					?>
			</div><!-- .entry-content -->
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="absolute bottom-0 left-0 w-full z-40">
		<svg class="w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920.04 66.11"><defs><style>.cls-4{fill:#F9F9F9}</style></defs><path id="Path_1" data-name="Path 1" class="cls-4" d="M0,0S157.23,24.53,401.87,38.65,703.33,56.49,978.58,56.49s288.92-3.72,524.29-17.84S1920,0,1920,0V66.11H0Z"/></svg>
	</div>
</div>	
