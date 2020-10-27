<div class="mobile-slide fixed top-0 left-0 w-full h-full z-30 p-4 bg-color1 border-box">
	<nav id="mobile-navigation" class="mobile-navigation lg-block pt-20 pb-5 pl-4 mb-5">	
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'mobile-menu',
			'menu_class' => 'mobile-nav-list uppercase',
		) );
		?>
	</nav>
	<?php dynamic_sidebar( 'sidebar-6' ); ?>
	<div class="mobile-social text-white pt-5">
			<?php echo do_shortcode('[social-icons]'); ?>
	</div>					
</div>