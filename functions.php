<?php 
register_nav_menus(
    array(
        'menu' => 'Main menu',
    ));


// Post Thumbnails
add_theme_support('post-thumbnails');
add_image_size('team_thumbs', 370,300, true);
add_image_size('portrait', 640, 480, true);
add_image_size('gallery-icon', 285, 160, true);
?>