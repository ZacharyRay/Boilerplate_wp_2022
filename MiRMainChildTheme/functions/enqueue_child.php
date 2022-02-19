<?php 
function mir_enqueue_child() {
    // Filetime for versions
    $themecsspath = get_stylesheet_directory().'/build/style.min.css';
    $themescriptpath = get_stylesheet_directory().'/build/script.min.js';
    $style_version = filemtime($themecsspath);
    $script_version = filemtime($themescriptpath);
	// Enqueue child styles
	wp_enqueue_style('child_css', get_stylesheet_directory_uri() . '/build/style.min.css', array('parent-style'), $style_version, 'all');
     // Enqueue child scripts
    wp_enqueue_script('child_js', get_stylesheet_directory_uri() . '/build/script.min.js', array('jquery'), $script_version, false);
}
    add_action( 'wp_enqueue_scripts', 'mir_enqueue_child' );
?>