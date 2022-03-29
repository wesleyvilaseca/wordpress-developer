<?php
//registro de posts customisados
if (!class_exists('WV_Slider_Post_Type')) {
    class WV_Slider_Post_Type
    {
        function __construct()
        {
            add_action('init', [$this, 'create_post_type']);
            add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
        }

        public function create_post_type(): void
        {
            register_post_type(
                'wv-slider',
                [
                    'label'         => 'Slider',
                    'description'   => 'Sliders',
                    'labels'        => [
                        'name'          => 'Sliders',
                        'singular_name' => 'Slider'
                    ],
                    'public'            => true,
                    //page-attributes serve para adicionar hierarquia dos posts  
                    'supports'              => ['title', 'editor', 'thumbnail', /*'page-attributes'*/],
                    'hierarchical'          => false,
                    'show_ui'               => true,
                    'show_in_menu'          => true,
                    'menu_position'         => 5,
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'show_in_rest'          => true,
                    'menu_icon'             => 'dashicons-images-alt2'
                ]
            );
        }

        public function add_meta_boxes(): void
        {

            //meta boxes dos postos do plugin
            add_meta_box(
                'wv_slider_meta_box',
                'Link Options',
                [$this, 'add_inner_meta_boxes'],
                'wv-slider',
                'normal',
                'high'
            );
        }

        //quais posts vão receber o metabox
        public function add_inner_meta_boxes($post)
        {
            require_once(WV_SLIDER_PATH . 'views/wv-slider_metabox.php');
        }
    }
}
