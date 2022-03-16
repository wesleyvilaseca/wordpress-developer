<?php

function ju_setup_theme()
{
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support('custom-log');

    register_nav_menu('primary', __('Primary Menu', 'codeVilaTheme'));
    register_nav_menu('secondary', __('Secondary Menu', 'codeVilaTheme'));

    if (function_exists('quads_register_ad')) {
        quads_register_ad(
            [
                'location' => 'codeVilaTheme_header',
                'description' => 'codeVilaTheme_header Header position'
            ]
        );
    }
}
