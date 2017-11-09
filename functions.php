<?php
// Sample code  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
// Custom Coding
function ftscripts(){
	wp_enqueue_style('futurabt-font', get_stylesheet_directory_uri().'/fonts/fonts.css', array(), false);
	wp_enqueue_style('owl-carouselmc', get_stylesheet_directory_uri().'/libs/owl_carousel/css/owl.carousel.css', array(), false);
	wp_enqueue_style('owl-carouseltrn', get_stylesheet_directory_uri().'/libs/owl_carousel/css/owl.transitions.css', array(), false);
	wp_enqueue_style('owl-carouselthems', get_stylesheet_directory_uri().'/libs/owl_carousel/css/owl.theme.css', array(), false);
	wp_enqueue_style('animate-css', get_stylesheet_directory_uri().'/libs/animate/animate.css', array(), false);	
	wp_enqueue_style('ltbox-css', get_stylesheet_directory_uri().'/libs/lightbox/jquery.fancybox.css', array(), false);
	wp_enqueue_style('clock-css', get_stylesheet_directory_uri().'/css/clockanim.css', array(), false);	
	wp_enqueue_style('tgalleri-css', get_stylesheet_directory_uri().'/libs/galleryplus/gallery.css', array(), false);	
}
add_action('wp_enqueue_scripts','ftscripts');
function ftscripts_jquery(){
	wp_enqueue_script('owljs', get_stylesheet_directory_uri().'/libs/owl_carousel/js/owl.carousel.min.js', array(), false);
	wp_enqueue_script('animate-js', get_stylesheet_directory_uri().'/libs/animate/wow.min.js', array(), false);
	wp_enqueue_script('ltbox-js', get_stylesheet_directory_uri().'/libs/lightbox/jquery.fancybox.pack.js', array(), false);
	wp_enqueue_script('tgallri-js', get_stylesheet_directory_uri().'/libs/galleryplus/gallery.js', array(), false);
	wp_enqueue_script('owljscus', get_stylesheet_directory_uri().'/libs/custom.js', array(), false);
}
add_action('wp_enqueue_scripts','ftscripts_jquery');

// Header widgets
function twhwidgets(){
	register_sidebar(array(
		'name' => 'Header Contact info',
		'id' => 'hdcont',
		'before_widget' => '<div class="headwidts">',
		'after_widget' => '</div>',
		'before_title' => '<h2 style="display:none">',
		'after_title' => '<h2>'
	));
}
add_action('widgets_init','twhwidgets');

// Custom post for Carousel
function caro2row_slider(){
	register_post_type('caro2rowpost', array(
		'labels' => array(
			'name' => 'Reviews',
			'singular_name' => 'Review',
			'add_new ' => 'Add New Review',
			'edit_item ' => 'Edit Review',
			'new_item' => 'New Review'
		),
		'menu_icon' =>'dashicons-format-gallery',
		'supports' => array('title','editor','thumbnail','revisions'),
		'public' => true,
		'has_archive' => true

	));

}
add_action('init','caro2row_slider');

// Woocommerce ajax add to cart
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <a class="cart-customlocation" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    $fragments['a.cart-customlocation'] = ob_get_clean();
    return $fragments;
}
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

// Add metabox
require_once('libs/caroptions/init.php');
require_once('libs/caroptions/functions.php');