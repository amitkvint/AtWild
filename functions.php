<?php

// The height and width of your custom header.
	// Add a filter to twentyeleven_header_image_width and twentyeleven_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyeleven_header_image_width', 700 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 525 ) );
	
	function quitar_Cabeceras() {
	unregister_default_headers(array(
	'wheel','shore'));	
	}
	
	add_action('after_setup_theme', 'quitar_Cabeceras', 11);
	
	register_nav_menu( 'header', __( 'Header Menu', 'twentyeleven' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'twentyeleven' ) );
	
	function quitar_Menu() {
	unregister_nav_menu('primary');	
	}
	
	add_action('after_setup_theme', 'quitar_Menu', 11);
	
	function quitar_Widget(){
		unregister_sidebar('sidebar-2');	
	}
	
	add_action('widgets_init', 'quitar_Widget', 11);
	
	function crear_Widget (){
		register_sidebar( array(
		'name' => __( 'Footer Area Four', 'twentyeleven' ),
		'id' => 'footer-four',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Header Sidebar', 'twentyeleven' ),
		'id' => 'header-sidebar',
		'description' => __( 'the sidebar for the header area', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	

	}
	
	add_action('widgets_init', 'crear_Widget');
	
	add_image_size( 'small', 75, 75, true); // name, size, and crop
	add_image_size( 'medium', 280, 280, true); // name, size, and crop
	
	function mas_Contactos($metodoscontacto) {
		//añadir Twitter
		$metodoscontacto['twitter'] = 'Twitter';
		return $metodoscontacto;	
	}
	add_filter('user_contactmethods', 'mas_Contactos', 10,1);


?>