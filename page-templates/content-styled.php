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


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php echo '<header class="entry-header overlay-darker py-40 fixed top-0 left-0 w-full bg-cover bg-center bg-no-repeat z-20 bg-no-repeat" style="background-image: url('. $feat_image_url .');">';?>
        <div class="container flex relative z-20 mt-12 mb-6">
            <div class="subheader__title md:w-1/2 mt-20 px-10 md:px-6">
                <h1 class="entry-title text-white text-5xl font-semibold tracking-narrow leading-tight"><?php echo get_the_title(); ?></h1>
                <p class="text-white text-xl"><?php echo types_render_field('subheader-text', array("output" => "raw")); ?></p>
                <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p class="text-white font-thin breadcrumbs pt-10" id="breadcrumbs">','</p>' );
                            }
                ?>
            </div>
            <div class="subheader__text md:w-1/2 flex align-center justify-center flex-col">
            </div>
        </div>
    </header><!-- .entry-header -->
	<div class="header-spacer pt-subhead">
	</div>
	<div class="relative z-30 bg-white">
		<div class="entry-content container typeset py-16 px-5 xl:px-2">
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
