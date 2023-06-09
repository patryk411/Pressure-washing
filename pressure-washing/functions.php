<?php 

function washing_menu() {
    register_nav_menu('WashingNewMenuLocation', 'WashingNew Menu Location');
    add_theme_support('title-tag');
}
  
add_action('after_setup_theme', 'washing_menu');

register_nav_menus(['primary_navigation' => __('Primary Navigation', 'sage')
]);

?>