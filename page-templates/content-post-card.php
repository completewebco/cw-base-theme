<?php $blog_category           = get_the_category( get_the_ID() ); ?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<a class="flex bg-grey-lightest hover:bg-grey-light p-3 pl-5 text-black mb-6 shadow-md" href="<?php the_permalink(); ?>">
						
						<div>
						<div class="featured-image pb-4">
						<?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large'); ?>
<?php endif; ?>
				</div>
							<p class="pb-0 mb-0 text-sm font-weight-bold text-color2 uppercase"><?php foreach ( $blog_category as $key => $value) { echo $value->category_nicename . " "; } ?></p>
							<h3 class="display text-xl leading-tight font-bold pb-1 text-color1"><?php the_title(); ?></h3>
							<p class="text-sm gray pb-3 mb-0"><?php echo get_the_date( 'F j, Y' ); ?></p>
							<p class="text-sm"><?php echo get_the_excerpt(); ?></p>
							<div class="w-full flex justify-center">
								<button class="py-2 px-4 hover:opacity-75 text-base text-center text-white bg-color1">Read More</button>
							</div>
						</div> 
					</a>  
				</li>