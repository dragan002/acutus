<?php
function wpdevs_load_scripts() {
    $style_file = get_template_directory() . '/style.css';
    $style_mtime = filemtime($style_file);
    
    $style_mtime_formatted = date('Y-m-d H:i:s', $style_mtime);
    
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), $style_mtime_formatted, 'all');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,600&display=swap', array(), null);

    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts'); 

register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );
?>
