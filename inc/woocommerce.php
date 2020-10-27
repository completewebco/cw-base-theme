<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package _s
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function _s_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', '_s_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * Custom Category Image Size Archive
 */
add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
	return array(
		'width'  => 500,
		'height' => 500,
		'crop'   => 0,
	);
} );





/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function _s_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', '_s_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function _s_woocommerce_products_per_page() {
	return 20;
}
add_filter( 'loop_shop_per_page', '_s_woocommerce_products_per_page' );

/** Remove Add to Cart on Archive **/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


/** Remove Related Products 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
*/
/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function _s_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', '_s_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function _s_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', '_s_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function _s_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', '_s_woocommerce_related_products_args' );

if ( ! function_exists( '_s_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function _s_woocommerce_product_columns_wrapper() {
		$columns = _s_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', '_s_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( '_s_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function _s_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', '_s_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( '_s_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function _s_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', '_s_woocommerce_wrapper_before' );

if ( ! function_exists( '_s_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function _s_woocommerce_wrapper_after() {
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', '_s_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( '_s_woocommerce_header_cart' ) ) {
			_s_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( '_s_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function _s_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		_s_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', '_s_woocommerce_cart_link_fragment' );

if ( ! function_exists( '_s_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function _s_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', '_s' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), '_s' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( '_s_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function _s_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php _s_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to Wishlist', 'woocommerce' ); 
}


/**
 * Hide category product count in product archives
 */
add_filter( 'woocommerce_subcategory_count_html', '__return_false' );

/**

 * Hide loop read more buttons for out of stock items 

 */

if (!function_exists('woocommerce_template_loop_add_to_cart')) {

    function woocommerce_template_loop_add_to_cart() {

        global $product;

        if (! $product->is_in_stock() || ! $product->is_purchasable() ) {

         echo '<a href="' . home_url( 'contact' ) . '">Contact To Order</a>';

    }

        else {

            wc_get_template('loop/add-to-cart.php');

        }

    }

}


/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}


/**
 * Manual Category Display Shortcode No Children (Click link to See how to display Children)
 * https://wordpress.stackexchange.com/questions/190264/display-category-thumbnail-and-links-in-woo-commerce/248036
 */
function home_category_view() {
$taxonomyName = "product_cat";
//This gets top layer terms only.  This is done by setting parent to 0.  
    $parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false,'hide_empty' => 1));
	$output = '';
		$out = '<ul class="cat-home list-reset p-0 m-0 flex flex-wrap">';
    foreach ($parent_terms as $pterm) {

        
        $thumbnail_id = get_woocommerce_term_meta($pterm->term_id, 'thumbnail_id', true);
        // get the image URL for parent category
        $image = wp_get_attachment_url($thumbnail_id);
        // print the IMG HTML for parent category
		
		$out .= '<li class="w-full mb-6 text-center md:w-1/2 hover:underline lg:w-1/3 p-4 overflow-hidden"><a class="block hover:opacity-75" href="#">';
		$out .= "<img class='h-64 w-full object-cover shadow-md' src='{$image}' alt='' width='400' height='400' />";
		$out .= '<h4 class="text-base pt-6">'. $pterm->name .'</h4>';
		$out .= "</a></li>";
		//show parent categories
        
    }
	$out .= '</ul>';
	return html_entity_decode($out);
}
add_shortcode('home-category-view','home_category_view');

/**
 *  Hide Price!!
 */
add_filter( 'woocommerce_get_price_html', 'react2wp_woocommerce_hide_product_price' );
function react2wp_woocommerce_hide_product_price( $price ) {
    return '';
}

/**
 * Hide SKUs !!!
 */
add_filter( 'wc_product_sku_enabled', '__return_false' );
?>


 


