<?php 

function my_theme_enqueue_styles2() {
    wp_enqueue_style('style-nowadays', get_template_directory_uri() . '/dist/nowadays.styles.css');
}
add_action('wp_head', 'my_theme_enqueue_styles2');

function my_theme_enqueue_styles()
{
	wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
	wp_enqueue_style('style-nowadays', get_template_directory_uri() . '/dist/nowadays.styles.css');

    wp_enqueue_script('slick-slider', get_template_directory_uri() . '/src/js/slick.js', array('jquery'), '1.0.2', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/src/js/scripts.js', array('jquery'), '1.0.20', true);

	wp_enqueue_script('script-nowadays', get_template_directory_uri() . '/dist/nowadays.scripts.js', array('jquery'), '1.0.2', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'menu-left' => __('Menu Left'),
			'menu-right' => __('Menu Right'),
			'menu-mobile' => __('Menu Mobile'),
			'footer-first' => __('Footer First'),
			'footer-secondary' => __('Footer Secondary'),
			'extra-menu' => __('Extra Menu')
		)
	);
}
add_action('init', 'register_my_menus');



