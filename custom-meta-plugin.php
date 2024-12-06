<?php
/*
Plugin Name: Custom Meta Tags Plugin
Plugin URI: https://github.com/lfelipegg/wordpress-plugin-meta
Description: Adds meta description and keywords from custom fields to the page head.
Version: 1.0
Author: Your Name
Author URI: https://github.com/lfelipegg
License: GPL2
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Hook to add meta tags to the <head>
add_action('wp_head', 'custom_meta_tags');

function custom_meta_tags() {
    // Only proceed if it's a singular post or page
    if (is_singular()) {
        global $post;

        // Get custom field values
        $meta_description = get_post_meta($post->ID, 'meta-description', true);
        $meta_keywords = get_post_meta($post->ID, 'meta-palabras', true);

        // Output meta description if available
        if (!empty($meta_description)) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . PHP_EOL;
        }

        // Output meta keywords if available
        if (!empty($meta_keywords)) {
            echo '<meta name="keywords" content="' . esc_attr($meta_keywords) . '">' . PHP_EOL;
        }
    }
}
?>

