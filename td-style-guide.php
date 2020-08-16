<?php

/*
Plugin Name: Style Guide
Plugin URI: http://www.thirteendigital.com.au
Description: Front end style guide
Version: 0.1
Author: Thirteen Digital

/*------------------------------------*\
    $ACTIVATION
\*------------------------------------*/

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Flush rewrite rules

register_activation_hook( __FILE__, 'tdsg_activation' );

function tdsg_activation() {
    flush_rewrite_rules();
}

/*------------------------------------*\
    $CREATE STYLE GUIDE PAGE
\*------------------------------------*/

add_action('init', 'tdsg_rewrite_rule');

function tdsg_rewrite_rule() {
    add_rewrite_rule( '^style-guide$', 'index.php?style-guide=1', 'top' );    
}

// Add query var

add_filter( 'query_vars', 'tdsg_query_vars' );

function tdsg_query_vars($vars) {
    $vars[] = 'style-guide';
    return $vars;
}

// Template redirect

add_action( 'template_include', 'tdsg_template_include' );

function tdsg_template_include( $template ) {
    if( get_query_var( 'style-guide', false ) !== false ) {
        //Check theme directory first
        $newTemplate = locate_template( array( 'style-guide.php' ) );
        if( '' != $newTemplate )
            return $newTemplate;
        //Check plugin directory next
        $newTemplate = plugin_dir_path( __FILE__ ) . 'style-guide.php';
        if( file_exists( $newTemplate ) )
            return $newTemplate;
    }
    //Fall back to original template
    return $template;
}

/*------------------------------------*\
    $ADD LINK IN ADMIN BAR
\*------------------------------------*/
 
function td_style_guide_toolbar_link($wp_admin_bar) {
    $site_url = trailingslashit(site_url());
    $args = array(
        'id'    => 'td-style-guide',
        'title' => 'Style Guide', 
        'href'  => $site_url . 'style-guide/', 
        'meta'  => array(
            'class'  => 'td-style-guide', 
            'title'  => 'View Style Guide',
            'target' => '_blank'
        )
    );
    $wp_admin_bar->add_node($args);
}
 
add_action('admin_bar_menu', 'td_style_guide_toolbar_link', 999);

/*------------------------------------*\
    $ADMIN BAR ICON
\*------------------------------------*/

add_action('admin_head', 'td_style_guide_toolbar_icon');
add_action('wp_head', 'td_style_guide_toolbar_icon');

function td_style_guide_toolbar_icon() {
    echo '<style>
        #wp-admin-bar-td-style-guide .ab-item:before {
            content: "\f177";
            top: 2px;
        }
    </style>';
}

/*------------------------------------*\
    $SCRIPT
\*------------------------------------*/

add_action( 'wp_enqueue_scripts', 'tdsg_enqueue_script' );

function tdsg_enqueue_script() {

    wp_register_script('tdsg-script', plugins_url( '/js/style-guide-functions.js', __FILE__ ), false, '1.0', true);
	
	if( get_query_var( 'style-guide', false ) !== false ) {
		wp_enqueue_script( 'tdsg-script' );
	}

}

/*------------------------------------*\
    $STYLE
\*------------------------------------*/

add_action( 'wp_enqueue_scripts', 'tdsg_enqueue_style' ); 

function tdsg_enqueue_style() {
    $rand = rand(0,999);
    wp_register_style( 'tdsg-style', plugins_url( '/css/style.css', __FILE__ ), '', $rand);
    wp_register_style( 'tdsg-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i|Source+Code+Pro');

    if( get_query_var( 'style-guide', false ) !== false ) {
		wp_enqueue_style( 'tdsg-style' );  
        wp_enqueue_style( 'tdsg-font' );  

        if ( is_admin_bar_showing() ) {
            wp_enqueue_style( 'dashicons' );
        }
	}

}  

?>