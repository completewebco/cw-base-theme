<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<?php if (has_post_thumbnail()) {
		echo '<header class="subheader pt-48 pb-40 relative bg-top bg-cover" style="background-image: url('. $feat_image_url .');">';
		echo '<div class="opacity-50 bg-black w-full h-full absolute top-0 left-0 block z-10"></div>';
	} else {
		echo '<header class="subheader pt-32 pb-16 bg-color1">';
		
	}
		?>
			<div class="container relative z-20 px-8 text-center">
				<h1 class="pb-1 text-white"><?php echo get_the_title(); ?></h1>
				<div class="w-full flex justify-center">
					<div class="h-1 w-40 bg-white block mt-4"></div>
				</div>	
				<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p class="font-thin breadcrumbs pt-3 text-white text-base" id="breadcrumbs">','</p>' );
							}
				?>
			</div>
		</header><!-- .entry-header -->
<div class="relative">	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bg-gray-100">
			<div class="entry-content container py-12 px-5 typeset">
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
</div>	
