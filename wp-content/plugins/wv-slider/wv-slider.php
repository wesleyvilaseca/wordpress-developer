<?php

/**
 * Plugin Name:       wv-slider
 * Plugin URI:        https://codevila.com.br/wv-slider
 * Description:       Slider Plugin WordPress
 * Version:           1.0
 * Author:            Wesley Vila Seca 
 * Requires at least: 5.8
 * Author URI:        https://github.com/wesleyvilaseca
 * Text Domain:       wv-slider
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WV_Slider')) {
    class WV_Slider
    {
        function __construct()
        {
            self::define_constants();
            require_once(WV_SLIDER_PATH . 'post-types/class.wv-slider-cpt.php');
            $WV_Slider_Post_Type = new WV_Slider_Post_Type();
        }

        public static function define_constants()
        {
            define('WV_SLIDER_PATH', plugin_dir_path(__FILE__));
            define('WV_SLIDER_URL', plugin_dir_url(__FILE__));
            define('WV_SLIDER_VERSION', '1.0.0');
        }

        public static function activate(): void
        {
            update_option('rewrite_rules', '');
        }

        public static function deactivate(): void
        {
            flush_rewrite_rules();

            //unregister the plugin when desativated
            unregister_post_type('wv-slider');
        }

        public static function uninstall()
        {
        }
    }
}

if (class_exists('WV_Slider')) {
    register_activation_hook(__FILE__,      ['WV_Slider', 'activate']);
    register_deactivation_hook(__FILE__,    ['WV_Slider', 'deactivate']);
    register_uninstall_hook(__FILE__,       ['WV_Slider', 'uninstall']);

    $wv_slider = new WV_Slider();
}
