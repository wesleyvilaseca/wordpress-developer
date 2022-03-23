<?php

/**
 * Template Name: Full Width Page Home
 */

get_header()

?>
<?php
while (have_posts()) :
    the_post();
?>

    <section class="page-title">
        <div class="container clearfix">
            <h1><?php the_title() ?></h1>
            <span> <?php
                    if (function_exists('the_subtitle'))
                        the_subtitle();
                    ?>
            </span>
        </div>
    </section>

    <section id="slide">
        <?php echo do_shortcode('[recent_post_slider design="design-2" limit="5"]') ?>
    </section>

    <?php if (is_active_sidebar('ju_services1') || is_active_sidebar('ju_services2') || is_active_sidebar('ju_services3')) : ?>
        <div style="margin: 50px auto 20px auto; width: 100px; border-bottom:none; border-top: 4px solid #444; border-radius:5px;"></div>
        <section id="services_widgets" class="mt-5">
            <div class="container">
                <h3 class="text-center">Our Services</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services1'); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services2'); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services3'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div style="margin: 50px auto 20px auto; width: 100px; border-bottom:none; border-top: 4px solid #444; border-radius:5px;"></div>
    <section class="bg-light mt-5">
        <div class="ms-3 me-3 row">
            <h3 class="text-center ">Latest Posts</h3>
            <?php

            $featured = new WP_Query(['posts_per_page'    => 3]);

            if ($featured) :
                while ($featured->have_posts()) : $featured->the_post();
                    get_template_part('partials/post/content', 'featured');
                endwhile;
                wp_resolve_post_date();
            endif;

            ?>
        </div>
    </section>

    <style>
        .wppsac-post-slider .wppsac-post-image-bg {
            min-height: 500px;
        }

        .wppsac-post-content-left {
            display: flex;
            align-items: center;
        }
    </style>

<?php
endwhile;
rewind_posts();
?>

<?php get_footer() ?>