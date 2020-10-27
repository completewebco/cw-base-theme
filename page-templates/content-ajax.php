<?php
/**
 * The Template File for AJAX Load More Posts
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>


<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <a class="block bg-grey-lightest hover:bg-grey-light p-3 pl-5 text-black mb-6 border-l-2 border-blue shadow-md" href="<?php the_permalink(); ?>">
        
        <div class="prm plm ptm pbm">
            <p class="pb-3 text-sm font-weight-bold text-blue uppercase "><?php foreach ( $blog_category as $key => $value) { echo $value->category_nicename . " "; } ?></p>
            <h3 class="display black font-weight-bold pb-1"><?php the_title(); ?></h3>
            <p class="text-sm gray pb-4"><?php echo get_the_date( 'F j, Y' ); ?></p>
            <p class="pb-2"><?php  the_excerpt(); ?></p>
            <button class="pt-4 text-right">Read More</button>
        </div> 
    </a>  
</li>
				
