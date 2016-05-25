<?php

//подключаем требуемые стили
function enqueue_styles() {
    wp_enqueue_style( 'bootTheme', get_stylesheet_uri());//основная css

    wp_register_style('bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap.min');
    
    wp_register_style('font-awesome.min', get_template_directory_uri().'/css/font-awesome/font-awesome.min.css');
    wp_enqueue_style('font-awesome.min');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

//подключаем требуемые js
function enqueue_scripts () {
    wp_enqueue_script("jquery");
    
    wp_register_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap.min');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//отключаем функцию
remove_filter('the_content', 'wpautop');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

// Отключаем админ панель для всех пользователей.
show_admin_bar(false);

?>