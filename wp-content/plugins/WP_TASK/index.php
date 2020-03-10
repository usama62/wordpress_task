<?php
/*
Plugin Name: WP_TASK
Plugin URI: https://demo.com/
Description:Users fetch the details of a user through an API.
Author: Shahzaib mehfooz
Version: 0.1
*/
add_shortcode('show_users', 'render_shortcode_users');
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    add_menu_page(
        'WP_TASK',
        'WP_TASK',
        'manage_options',
        'wp_task',
        'render_users'
    );
}

function render_users() {
    echo '<h3><a href="'.get_site_url().'" >click here to see the users </a></h3>';
}

function render_shortcode_users() {
    include 'frontend.php';
}

?>
