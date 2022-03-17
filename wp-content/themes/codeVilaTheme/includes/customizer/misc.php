<?php

function ju_misc_customizer_section($wp_customize)
{
    $wp_customize->add_setting('ju_header_show_search', [
        'default'   => 'yes',
        'transport' => 'postMessage'
    ]);

    $wp_customize->add_setting('ju_header_show_cart', [
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);

    $wp_customize->add_setting('ju_footer_cpoyright_text', [
        'default' => 'Copyrights &copy; 2022 all Rights Reserved'
    ]);

    $wp_customize->add_setting('ju_footer_tos_page', [
        'default' => 0
    ]);

    $wp_customize->add_setting('ju_footer_privacy_page', [
        'default' => 0
    ]);

    $wp_customize->add_setting('ju_read_more_color', [
        'default' => '#1abc9c'
    ]);

    $wp_customize->add_setting('ju_post_title_color', [
        'default' => '#555'
    ]);

    $wp_customize->add_setting('ju_post_title_color_hover', [
        'default' => '#1abc9c'
    ]);

    $wp_customize->add_setting('ju_report_file', [
        'default' => ''
    ]);

    $wp_customize->add_setting('ju_show_header_popular_posts_title', [
        'default' => 'Breaking News'
    ]);

    $wp_customize->add_setting('ju_show_header_popular_posts', [
        'default' => false
    ]);

    $wp_customize->add_section('ju_misc_section', [
        'title'         => __('Code Vila Theme Misc Settings', 'codeVilaTheme'),
        'priority'      => 30,
        'panel'         => 'codeVilaTheme'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_search_input',
        [
            'label'     => __('Show search button in header', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_header_show_search',
            'type'      => 'checkbox',
            'choices'   => [
                'yes'   => 'Yes'
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_cart_input',
        [
            'label'     => __('Show cart button in header', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_header_show_cart',
            'type'      => 'checkbox',
            'choices'   => [
                'yes'   => 'Yes'
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_cpoyright_text_input',
        [
            'label'     => __('Copyright', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_footer_cpoyright_text',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        [
            'label'     => __('Footer tos', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_footer_tos_page',
            'type'      => 'dropdown-pages'
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        [
            'label'     => __('Footer Privacy Policy Page', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_footer_privacy_page',
            'type'      => 'dropdown-pages'
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ju_read_more_color_input',
        [
            'label'     => __('Read more color', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_read_more_color',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ju_post_title_color_input',
        [
            'label'     => __('Post title color', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_post_title_color',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ju_post_title_color_hover_input',
        [
            'label'     => __('Post title color hover', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_post_title_color_hover',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ju_report_file_input',
        [
            'label'     => __('File report', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_report_file',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_show_header_popular_posts_title_input',
        [
            'label'     => __('Title popular post', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_show_header_popular_posts_title',
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_show_header_popular_posts_input',
        [
            'label'     => __('Show most popular posts', 'codeVilaTheme'),
            'section'   => 'ju_misc_section',
            'settings'  => 'ju_show_header_popular_posts',
            'type'      => 'checkbox',
            'choices'   => [
                'yes'   => __('Yes', 'codeVilaTheme')
            ]
        ]
    ));
}
