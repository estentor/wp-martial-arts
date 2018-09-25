<?php 
register_nav_menus(
    array(
        'menu' => 'Main menu',
    ));


// Post Thumbnails
add_theme_support('post-thumbnails');
add_image_size('team_thumbs', 370,230, true);
add_image_size();
?>