<?php //joffreyauditionsfinder -Admin Menu

//exit if file is called directly
if ( !defined('ABSPATH')){
    exit;
    
}
//add top-level administrative menu
function joffreyauditionsfinder_add_toplevel_menu(){
    /*
     add_menu_page(
     string $page_title,
     string $menu_title,
     string $capability,
     string $menu_slug,
     callable $function ='',
     string $icon_url='',
     int $position = null
     )
     */
    
    add_menu_page(
            'Joffrey Auditions Finder',
            'Auditions',
            'manage_options',
            'joffreyauditionsfinder',
            'joffreyauditionsfinder_display_settings_page',
            'dashicons-admin-generic',
            null);
}

add_action('admin_menu','joffreyauditionsfinder_add_toplevel_menu');
