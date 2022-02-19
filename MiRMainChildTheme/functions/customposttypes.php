<?php 

/* add_action( 'init', 'create_custom_posttype' );
function create_custom_posttype() {
    register_post_type(
        'custom_posttype', 
        array(
            'labels' => array(
                'name'               => __( 'Products', 'mir-theme' ), //Edit
                'singular_name'      => __( 'Product', 'mir-theme' ), //Edit	
                'add_new'            => __( 'Add new', 'mir-theme' ),
                'add_new_item'       => __( 'Add new', 'mir-theme' ),
                'edit_item'          => __( 'Edit', 'mir-theme' ),
                'new_item'           => __( 'New', 'mir-theme' ),
                'view_item'          => __( 'View', 'mir-theme' ),
                'search_items'       => __( 'Search', 'mir-theme' ),
                'not_found'          => __( 'Not found', 'mir-theme' ),
                'not_found_in_trash' => __( 'Not found in trash', 'mir-theme' ),
            ),
           'supports' => array(
                'title',
                //'editor',
                //'thumbnail',
                'custom-fields',
                //'revisions',
            ),
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'products'), //EDIT
            'menu_position'   => 5,
            'menu_icon' => 'dashicons-products', //https://developer.wordpress.org/resource/dashicons
            'public' => true,
            'show_ui' => true, 
            'show_in_nav_menus' => true,
            'exclude_from_search' => false, 
            'has_archive' => true,            
            'show_in_rest' => true,
            'taxonomies'   => array( 'custom_tax' ),
        )
    );
}

register_taxonomy( 
    'custom_tax', 
    array('cpt'), 
    array(
        'labels' => array(
                'name'                       => __( 'Custom tax', 'mir-theme' ), //EDIT
                'singular_name'              => __( 'Custom tax', 'mir-theme' ), //EDIT
                'menu_name'                  => __( 'Custom tax', 'mir-theme' ), //EDIT
                'edit_item'                  => __( 'Rediger', 'mir-theme' ),
                'update_item'                => __( 'Opdater', 'mir-theme' ),
                'add_new_item'               => __( 'Tilføj ny', 'mir-theme' ),
                'new_item_name'              => __( 'Ny', 'mir-theme' ),
                'parent_item'                => __( 'Forældre kategori', 'mir-theme' ),
                'parent_item_colon'          => __( 'Forældre kategori:', 'mir-theme' ),
                'all_items'                  => __( 'Alle Kategorier', 'mir-theme' ),
                'search_items'               => __( 'Søg i kategori', 'mir-theme' ),
                'popular_items'              => __( 'Populærer kategorier', 'mir-theme' ),
                'separate_items_with_commas' => __( 'Adskil kategorier med kommaer', 'mir-theme' ),
                'add_or_remove_items'        => __( 'Tilføj eller fjern kategorier', 'mir-theme' ),
                'choose_from_most_used'      => __( 'Vælg blandt de mest brugte kategorier', 'mir-theme' ),
                'not_found'                  => __( 'Ingen kategorier fundet.', 'mir-theme' ), 
        ),
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_ui'           => true,
        'show_tagcloud'     => false,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'custom_tax' ), //EDIT
        'show_admin_column' => true,
        'query_var'         => true,
    )
    );  

add_filter( 'enter_title_here', 'op_cpt_title_text' );
function op_cpt_title_text( $title ){
    $screen = get_current_screen();
 
    if  ( 'cpt' == $screen->post_type ) {
         $title = 'Navn'; //EDIT
    }
 
    return $title; 
} */
 
?>