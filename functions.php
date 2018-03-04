<?php


function sheffieldstreets_scripts() {
	//Add footer and header stylesheets 

		wp_enqueue_style( 'sheffieldstreets-storytemplate-css', get_template_directory_uri() . '/css/storytemplate.css' );
		wp_enqueue_style( 'sheffieldstreets-stories-css', get_template_directory_uri() . '/css/stories.css' );
		wp_enqueue_style( 'sheffieldstreets-style-css', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'sheffieldstreets-news-css', get_template_directory_uri() . '/css/news.css' );
		wp_enqueue_style( 'sheffieldstreets-footer-css', get_template_directory_uri() . '/css/footer.css' );		
	}


add_action( 'wp_enqueue_scripts', 'sheffieldstreets_scripts' );

function sheffield_streets_setup () {
	
add_theme_support ('menus');
register_nav_menu ('secondary','secondary_footer_navigation');

}
add_action('init','sheffield_streets_setup'); 

//Add theme support 
add_theme_support('html5', array('search-form'));
add_theme_support ('post-thumbnails');
add_theme_support( 'custom-logo', array(

	'flex-height' => false,
	'flex-width'  => false,
	'header-text' => array( 'site-title', 'site-description' ),
) );

//custom logo 
function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
 
}

add_filter('get_custom_logo','change_logo_class');


function change_logo_class($html)
{
	$html = str_replace('class="custom-logo"', '', $html);
	$html = str_replace('class="custom-logo-link"', 'class="nav-image-left"', $html);
	return $html;
}
?>