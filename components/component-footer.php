<div class="main_footer">
  <footer id="colophon" class="bg-gray-200 text-gray-600 pt-16 pb-2 px-5 md:px-0 relative overflow-hidden">
    <div class="container sm:flex mb-10">
      <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
       
      </div>  
      <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
         
      </div>
      <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
         
      </div>
      <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
          <?php dynamic_sidebar( 'sidebar-4' ); ?> 
      </div>
    </div>

    <div class="container border-t border-gray-400 pt-3 copyright text-center md: text-left md:flex">
       <p class="md:mr-12 text-sm">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?></p> <a class="underline text-sm" href="/privacy-policy">Privacy Policy</a>
    </div>
   
  </footer><!-- #colophon -->
</div>
</div><!-- #page -->

<!-- Mobile Menu -->
<?php get_template_part('components/component', 'mobile-menu'); ?>

<!-- Back to Top -->
<?php get_template_part('components/component', 'back-to-top'); ?>