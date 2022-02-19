<?php 
function mir_enqueue_parent() {
    // Filetime for versions
    $themecsspath = get_stylesheet_directory().'/build/style.min.css';
    $themescriptpath = get_stylesheet_directory().'/build/script.min.js';
    $style_version = filemtime($themecsspath);
    $script_version = filemtime($themescriptpath);
    // Enqueue parent style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/build/style.min.css', array(), $style_version, 'all');
    // Enqueue parent script
    wp_enqueue_script('parent-script', get_template_directory_uri() . '/build/script.min.js', array('jquery'), $script_version, false);
}
    add_action('wp_enqueue_scripts', 'mir_enqueue_parent');
?>