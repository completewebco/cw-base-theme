<footer id="colophon" class="footer bg-color1 text-gray-600 pt-12 pb-10 px-5 md:px-0 relative overflow-hidden">
			<div class="flex justify-center flex-col items-center w-full">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<?php echo do_shortcode('[social-icons]'); ?>
			</div>			
		<div class="copyright container text-center px-12 pt-8 text-gray-100 text-sm relative z-20">
		&copy <?php echo bloginfo(); ?> All Rights Reserved <?php echo date('Y'); ?> | <a class="underline text-gray-100 text-sm" href="/privacy-statement/">Privacy Policy</a>
		</div>		
			<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Mobile Menu -->
<?php get_template_part('components/component', 'mobile-menu'); ?>

<!-- Back to Top -->
<?php get_template_part('components/component', 'back-to-top'); ?>