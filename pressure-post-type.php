<?php 


function pressure_post_type() {

     // SERVICE POST TYPE
     register_post_type('service', array(
         'supports' => array('title','editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
         'menu_icon' => 'dashicons-admin-customizer'
    ));



    // GALLERTY POST TYPE
    register_post_type('realization', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'realizations'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Realizations',
            'add_new_item' => 'Add New Realization',
            'edit_item' => 'Edit Realization',
            'all_items' => 'All Realizations',
            'singular_name' => 'Realization'
        ),
         'menu_icon' => 'dashicons-format-gallery'
    ));
}

add_action('init', 'pressure_post_type');