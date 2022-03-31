<h3><?php echo !@$content ? WV_Slider_Settings::$options['wv_slider_title'] :  $content  ?></h3>
<div class="wv-slider flexslider">
    <ul class="slides">
        <?php

        $args = [
            'post_type' => 'wv-slider',
            'post_status' => 'publish',
            'post__in' => $id,
            'orderby' => $orderby
        ];

        $qry = new WP_Query($args);

        if ($qry->have_posts()) :
            while ($qry->have_posts()) :
                $qry->the_post();

                $button_text = get_post_meta(get_the_ID(), 'wv_slider_link_text', true);
                $url = get_post_meta(get_the_ID(), 'wv_slider_link_url', true);

        ?>
                <li>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
                    <div class="wvs-container">
                        <div class="slider-details-container">
                            <div class="wrapper">
                                <div class="slider-title">
                                    <h2><?php the_title() ?></h2>
                                </div>
                                <div class="slider-description">
                                    <div class="subtitle"><?php the_content() ?></div>
                                    <a href="<?php echo esc_attr($url) ?>" class="Link"><?php echo esc_html($button_text) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </ul>
</div>