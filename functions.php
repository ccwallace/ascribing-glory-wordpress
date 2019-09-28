<?php
/**
 * ascribing-glory functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ascribing-glory
 */

if ( ! function_exists( 'ascribing_glory_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ascribing_glory_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ascribing-glory, use a find and replace
		 * to change 'ascribing-glory' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ascribing-glory', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ascribing-glory' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ascribing_glory_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ascribing_glory_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ascribing_glory_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ascribing_glory_content_width', 640 );
}
add_action( 'after_setup_theme', 'ascribing_glory_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ascribing_glory_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ascribing-glory' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ascribing-glory' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ascribing_glory_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ascribing_glory_scripts() {
	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	wp_enqueue_style( 'materialize-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css');

	wp_enqueue_style( 'ascribing-glory-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ascribing-glory-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ascribing-glory-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.2.1.min.js', true );

	wp_enqueue_script( 'materialize-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ascribing_glory_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
/**
 * Change several of the breadcrumb defaults
 */


function override_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb transparent z-depth-0" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'override_woocommerce_breadcrumbs' );

/*
add_filter( 'woocommerce_product_tabs', 'ag_remove_product_tabs', 98 );

function ag_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
*/
/*
add_filter('woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text');
function custom_woocommerce_product_add_to_cart_text(){
		global $product;
		if($product->get_type() == 'variable')
			return __('View Options', 'woocommerce');
		else
			return __('Add to Cart', 'woocommerce');


}
*/
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );

add_action( 'woocommerce_after_add_to_cart_form', 'product_enquiry_custom_form' );
function product_enquiry_custom_form() {

    global $product, $post;
		if(strpos($product->get_title(), 'Invitations') == true){
			// Set HERE your Contact Form 7 shortcode:
			$contact_form_shortcode = '[contact-form-7 id="1008" title="Semi-Custom Inquiry"]';

			// compatibility with WC +3
			$product_id = method_exists( $product, 'get_id' ) ? $product->get_id() : $product->id;
			$product_title = $post->post_title;

			// The email subject for the "Subject Field"
			$email_subject = __( 'Enquire about', 'woocommerce' ) . ' ' . $product_title;

			foreach($product->get_available_variations() as $variation){
				$variation_id = $variation['variation_id'];
				foreach($variation['attributes'] as $key => $value){
					$key = ucfirst( str_replace( 'attribute_pa_', '', $key ) );
					$variations_attributes[$variation_id][$key] = $value;
				}
			}
			// Just for testing the output of $variations_attributes
			// echo '<pre>'; print_r( $variations_attributes ); echo '</pre>';


			## CSS INJECTED RULES ## (You can also remve this and add the CSS to the style.css file of your theme
			?>
			<style>
			.wpcf7-form-control-wrap.your-product{ opacity:0;width:0px;height:0px;overflow: hidden;display:block;margin:0;padding:0;}
			</style>

			<?php


			// Displaying the title for the form (optional)
			echo '<h3>'.$email_subject.'</h3><br>
			<div class="enquiry-form">' . do_shortcode( $contact_form_shortcode ) . '</div>';


			## THE JQUERY SCRIPT ##
			?>
			<script>
			(function($){

				<?php
				// Passing the product variations attributes array to javascript
				$js_array = json_encode($variations_attributes);
				echo 'var $variationsAttributes = '. $js_array ;
				?>

				// Displaying the subject in the subject field
				$('.product_name').val('<?php echo $email_subject; ?>');

				////////// ATTRIBUTES VARIATIONS SECTION ///////////

				var $attributes;

				$('td.value select').blur(function() {
					var $variationId = $('input[name="variation_id"]').val();
					// console.log('variationId: '+$variationId);
					if (typeof $variationId !== 'undefined' ){
						for(key in $variationsAttributes){
							if( key == $variationId ){
								$attributes = $variationsAttributes[key];
								break;
							}
						}

					}
					if ( typeof $attributes !== 'undefined' ){
						// console.log('Attributes: '+JSON.stringify($attributes));
						var $attributesString = '';
						for(var attrKey in $attributes){
							$attributesString += ' ' + attrKey + ': ' + $attributes[attrKey] + ' — ';
						}
						$('.product_details').val( 'Product <?php echo $product_title; ?> (ID <?php echo $product_id; ?>): ' + $attributesString );
					}
				});

			})(jQuery);
		</script>
		<?php
		}
	}

	// Update WooCommerce Flexslider options

add_filter( 'woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options' );

function ud_update_woo_flexslider_options( $options ) {

    $options['directionNav'] = true;

    return $options;
}
