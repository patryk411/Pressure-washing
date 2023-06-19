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

}

add_action('init', 'pressure_post_type');