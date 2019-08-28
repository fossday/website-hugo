<?php
// Custom Theme Functions
if (!function_exists('panaceia_saetup')) {
    function panaceia_saetup() 
    {
        // Create menu
        register_nav_menu('header-menu',__( 'Menu principal' ));
        // Create Custom Size Logo
        add_theme_support('custom-logo', array(
            'height'      => 47,
            'width'       => 165,
            'flex-height' => true,
            'flex-width'  => true
        ));
        // Enable Thumbnail
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size( 750, 375, true );
    } add_action( 'init', 'panaceia_saetup' );
};
