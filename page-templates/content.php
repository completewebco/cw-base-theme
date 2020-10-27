<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
?>

<div class="bg-gray-100">
<?php echo '<header class="subheader pb-24 pt-32 relative bg-cover bg-center">';?>
<div class="container md:flex">
					<div class="subheader__title flex items-center md:w-1/2">
						<div class="pb-4">
						<div class="entry-date text-color1"><?php echo get_the_date(); ?></div>
							<h1 class="entry-title text-black tracking-narrow pt-4"><?php echo get_the_title(); ?></h1>
							<?php
								if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb( '<p class="text-grey-dark font-thin breadcrumbs" style="font-size:13px;" id="breadcrumbs">','</p>' );
								}
							?>		
						</div>		
					</div>
					<div class="subheader__image md:w-1/2 flex align-center justify-center flex-col px-6">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
	</header><!-- .entry-header -->
	<article>
		<div class="the-content pb-4 pt-3 frame">
			<div class="typeset px-4">	
				<?php the_content();?>
			</div>	
		</div>
	</article>
</div>	