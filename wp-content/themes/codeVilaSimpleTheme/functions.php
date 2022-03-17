<?php

/**
 * setup
 */
define('JU_DEV_MODE', true);

/**
 * includes
 */
include(get_theme_file_path('includes/front/enqueue.php'));

/**
 * hooks
 */
add_action('wp_enqueue_scripts',        'ju_enqueue');

/**
 * shortcodes
 */