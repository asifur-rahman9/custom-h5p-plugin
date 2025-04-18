<?php
/*
Plugin Name: Custom H5P Styles
Description: Apply custom styles to H5P content in Pressbooks or WordPress.
Version: 1.0
Author: Asifur Rahman
License: MIT
License URI: https://opensource.org/licenses/MIT
*/

defined( 'ABSPATH' ) || exit;

function custom_h5p_styles_enqueue() {
    wp_enqueue_style('custom-h5p-styles', plugin_dir_url(__FILE__) . 'h5p-styles.css');
}
add_action('wp_enqueue_scripts', 'custom_h5p_styles_enqueue');
?>
