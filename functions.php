<?php

	define('ALLOW_UNFILTERED_UPLOADS', true);

	// Register styles and scripts
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_deregister_script('jquery-migrate');
	}
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

	function main_styles() {
	    wp_enqueue_style('wp-style', get_stylesheet_uri());
	};

	function main_scripts() {\
		wp_enqueue_script( 'template-jquery', get_template_directory_uri() . '/assets/js/libs/jquery-3.3.1.min.js', array(), null, true);
		wp_enqueue_script( 'template-jquery-migrate', get_template_directory_uri() . '/assets/js/libs/jquery-migrate-1.4.1.min.js', array('template-jquery'), null, true);
		wp_enqueue_script( 'template-slick', get_template_directory_uri() . '/assets/js/components/slick.js', array('template-jquery', 'template-jquery-migrate'), null, true);
		wp_enqueue_script( 'template-fitvids', get_template_directory_uri() . '/assets/js/components/fitvids.js', array('template-jquery', 'template-jquery-migrate'), null, true);
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/components/fancybox.js', array('template-jquery', 'template-jquery-migrate'), null, true);
		wp_enqueue_script( 'template-paroller', get_template_directory_uri() . '/assets/js/components/paroller.js', array('template-jquery', 'template-jquery-migrate'), null, true);
		wp_enqueue_script( 'template-aos', get_template_directory_uri() . '/assets/js/components/aos.js', array('template-jquery', 'template-jquery-migrate'), null, true);		
	    wp_enqueue_script( 'template-main', get_template_directory_uri() . '/assets/js/main.js', array('template-jquery', 'template-jquery-migrate'), null, true);
	};

	add_action('wp_enqueue_scripts', 'main_styles');
	add_action('wp_enqueue_scripts', 'main_scripts');

	// Add custom logo support
	add_theme_support('custom-logo');

	// Add thumbnails support
	add_theme_support('post-thumbnails');

	// Add custom menu support
	add_theme_support('menus');

	// Disable XML-RPC RSD link from WordPress Header
	remove_action ('wp_head', 'rsd_link');

	// Remove WordPress version number
	function crunchify_remove_version() {
		return '';
	}
	add_filter('the_generator', 'crunchify_remove_version');

	// Remove wlwmanifest link
	remove_action( 'wp_head', 'wlwmanifest_link');

	// Remove shortlink
	remove_action( 'wp_head', 'wp_shortlink_wp_head');

	// Remove query strings from all static resources
	function crunchify_cleanup_query_string( $src ){
		$parts = explode( '?', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
	add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );

	// Remove api.w.org relation link
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);

	// Remove emojis
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	// Remove DNS Prefetch
	remove_action( 'wp_head', 'wp_resource_hints', 2 );

	// Remove dashicons
	function wpdocs_dequeue_dashicon() {
		if (current_user_can( 'update_core' )) {
			return;
		}
		wp_deregister_style('dashicons');
	}

    add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

    // Remove Block Library
	function remove_gutenberg_styles() {
		if (current_user_can( 'update_core' )) {
			return;
		}
	    wp_dequeue_style( 'wp-block-library' );
	}

	add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );

	// Remove breaks from contact form
	add_filter('wpcf7_autop_or_not', '__return_false');

	// Add svg support
	 function wpcontent_svg_mime_type( $mimes = array() ) {
		  $mimes['svg']  = 'image/svg+xml';
		  $mimes['svgz'] = 'image/svg+xml';
		  return $mimes;
	}
	add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' ); 	

?>