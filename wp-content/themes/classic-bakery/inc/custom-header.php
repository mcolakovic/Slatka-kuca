<?php
/**
 * @package Classic Bakery
 * Setup the WordPress core custom header feature.
 *
 * @uses classic_bakery_header_style()
 */
function classic_bakery_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'classic_bakery_custom_header_args', array(		
		'default-text-color'     => 'fff',
		'width'                  => 300,
		'height'                 => 2000,
		'wp-head-callback'       => 'classic_bakery_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'classic_bakery_custom_header_setup' );

if ( ! function_exists( 'classic_bakery_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see classic_bakery_custom_header_setup().
 */
function classic_bakery_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.bg-color {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php 
}
endif;