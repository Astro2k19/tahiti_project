<?php

function tahiti_script_enqueue() {
	wp_enqueue_style('font-awesome',  get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '1.0');
	wp_enqueue_style('font-awesome-brands',  get_template_directory_uri() . '/assets/css/brands.min.css', array(), '1.0');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/tahiti.css');
	wp_enqueue_style('swiper-style',  get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0');
	wp_enqueue_script('swiper-js',  get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0', true);
	wp_enqueue_script('swiper-init',  get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0', true);
	if( is_front_page() ){
		wp_enqueue_script('dropdown-template',  get_template_directory_uri() . '/assets/js/dropdown.template.js', array(), '1.0', true);
		wp_enqueue_script('dropdown-functions',  get_template_directory_uri() . '/assets/js/dropdown.functions.js', array(), '1.0', true);
		wp_enqueue_script('dropdown-init',  get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true);
	 }
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}

function register_menus() {
	register_nav_menus(
	  array(
		'header_menu' => __( 'Header navigation'),
	  )
	);
  }


  function register_my_widgets(){
  
	  register_sidebars(1,  array(
		  'name'          => 'Footer icons',
		  'id'            => "footer_icons",
		  'description'   => '',
		  'class'         => 'footer__social',
		  'before_widget' => '<div id="%1$s" class="widget %2$s">',
		  'after_widget'  => "</div>\n",
		  'before_title'  => '',
		  'after_title'   => "",
		  'before_sidebar' => '', 
		  'after_sidebar'  => '', 
	  ));
  }

function section_title($title_class, $bold, $thin) {
	
	if ($bold && $thin) {
		$class = 'title '.$title_class.' section-title';
		
		return '<h2 class="'.$class.'"><span>'.$bold.'</span> '.$thin.'</h2>';
	}
	
	return '';
	
}

  add_action( 'widgets_init', 'register_my_widgets' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
		
}

function custom_nav_menu_css_class($classes, $item, $args) {
	if ($args->theme_location == 'header_menu') {
		$classes[] = 'header__nav-item';
	} 
	return $classes;
}

add_theme_support('post-thumbnails', array(island));

add_action('wp_enqueue_scripts', 'tahiti_script_enqueue');

add_action('init', 'register_menus' );

add_filter( 'nav_menu_css_class', 'custom_nav_menu_css_class', 10, 3);
