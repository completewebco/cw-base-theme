<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
	<header id="js-header" class="site-header fixed top-0 left-0 w-full z-40 px-2">
		<div class="container-max flex justify-between">
			<div class="logo pl-2 py-3 md:w-auto">	
			 	<?php the_custom_logo(); ?>
			</div>	
			<div class="hidden lg:flex items-center md:auto justify-between">
				<div class="flex items-center">
					<nav id="site-navigation" class="main-navigation relative pt-1">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'main-menu',
							'menu_class' => 'main-nav-list font-heading nav-list flex w-full',

						) );
						?>
					</nav>
				</div>	
			</div>	
			<button id="js-mobile" class="lg:hidden flex items-center text-sm uppercase text-black ml-4 uppercase z-50 mr-2 menu-toggle menu-toggle--collapse pr-8" aria-controls="primary-menu" aria-expanded="false" type="button">
				<span id="js-mobile-btn-text">Menu</span>	
				<span class="menu-toggle-box ml-2">
					<span class="menu-toggle-inner"></span>
				</span>
			</button>				
		</div>		
	</header>
	<div id="content" class="site-content">
