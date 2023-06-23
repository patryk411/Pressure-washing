<?php 

function pressure_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 650, true); 
    add_image_size('pressurePortrait', 480, 650, true);
    add_image_size('pressureLandscape', 400, 260, true);
}

function washing_menu() {
    register_nav_menu('WashingNewMenuLocation', 'WashingNew Menu Location');
    add_theme_support('title-tag');
}
  
add_action('after_setup_theme', 'washing_menu');

register_nav_menus(['primary_navigation' => __('Primary Navigation', 'sage')
]);

?>