<?php

/**
 * Jin Child Theme Functions
 */

/**
 * Enqueue parent and child theme styles
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/**
 * Change priority for shortcode processing
 */
function priority_change_delete()
{
    remove_filter('the_content', 'do_shortcode', 1);
    add_filter('the_content', 'do_shortcode', 11);
}
add_action('init', 'priority_change_delete', 9999);
