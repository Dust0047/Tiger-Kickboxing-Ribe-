<?php 

function kickboxing_enqueue_style() {
    wp_enqueue_style("kickboxing-style", get_stylesheet_uri());
    wp_enqueue_style("responsive", get_stylesheet_directory_uri() . "/respons.css");
}  
add_action("wp_enqueue_scripts", "kickboxing_enqueue_style");

function kickboxing_register_menu() {
    register_nav_menu("main-menu", "Main menu");
}
add_action("init", "kickboxing_register_menu");
?>