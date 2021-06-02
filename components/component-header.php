<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
	<div class="bg-darkoneblue site-header left-0 w-full z-40">
		<div class="container-max flex lg:flex-grow items-center" id="example-navbar-info">
			<ul class="flex flex-col lg:flex-row list-none ml-auto py-3">
				<li class="nav-item pt-0 py-0">
					<a class="px-3 py-0 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="<?php echo get_theme_mod( 'top_link'); ?>"><?php echo get_theme_mod( 'bar_text'); ?></a>
				</li>
				<li class="nav-item pt-0 py-0">
					<a class="px-3 py-0 pt-0 pl-16 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">CALL <?php echo get_theme_mod( 'phone'); ?></a>
				</li>
			</ul>
		</div>
	</div>
	<header id="js-header" class="site-header left-0 w-full z-40">
		<div class="container-max flex justify-between">
			<div class="pl-2 py-3 md:w-auto">	
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
	<div id="alert" class="bg-orange hidden">
		  <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
		    <div class="flex items-center justify-between flex-wrap">
		      <div class="w-0 flex-1 flex items-center justify-center">
		        <a href="<?php echo get_theme_mod( 'alert_link'); ?>" class="m-0 font-medium text-white text-center items-center text-xs">
		          <span class="hidden md:inline">
					<?php echo get_theme_mod( 'alert_text'); ?>
		          </span>
				</a>
		      </div>
		      <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
		        <button type="button" class="alert_close -mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
		          <span class="sr-only">Dismiss</span>
		          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
		            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
		          </svg>
		        </button>
		      </div>
		    </div>
		  </div>
		</div>	
	<div id="content" class="site-content">
