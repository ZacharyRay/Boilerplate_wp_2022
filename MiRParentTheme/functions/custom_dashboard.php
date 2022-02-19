<?php 

// Remove welcome panel
remove_action( 'welcome_panel', 'wp_welcome_panel' );

// Add custom welcome panel
function wpex_wp_welcome_panel() { 
    global $current_user;
    wp_get_current_user();
    $username = $current_user->user_login;
    $first_name = $current_user->user_firstname;
    
    ?>



	<div class="custom-welcome-panel-content">
        <?php  
        if($first_name) {
            printf( '<h1>' . esc_html('Hi ' . $first_name ) . '</h1>'); 
        } else {
            printf( '<h1>' . esc_html('Hi ' . $username ) . '</h1>'); 
        }
       
        ?>
	<div>

<?php }
add_action( 'welcome_panel', 'wpex_wp_welcome_panel' );

// Remove widgets

add_action('wp_dashboard_setup', 'wpse_73561_remove_all_dashboard_meta_boxes', 9999 );

function wpse_73561_remove_all_dashboard_meta_boxes()
{
    global $wp_meta_boxes;
    $wp_meta_boxes['dashboard']['normal']['core'] = array();
    $wp_meta_boxes['dashboard']['side']['core'] = array();
    
}

// hide help tab

/* add_filter( 'contextual_help', 'mytheme_remove_help_tabs', 999, 3 );
function mytheme_remove_help_tabs($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
} */

// remove admin footer

add_filter( 'admin_footer_text', '__return_false' );


// dahsboard css

add_action( 'admin_head-index.php', 'wpse_73561_dashboard_scripts' );

function wpse_73561_dashboard_scripts() {
    ?>
        <style>
            /*
            css
            */
            #dashboard-widgets-wrap {
                display: none;
            }
            #screen-options-wrap p {
                display: none;
            }
        </style>
        <script language="javascript" type="text/javascript">
            // js
        </script>   
    <?php
}





  
?>