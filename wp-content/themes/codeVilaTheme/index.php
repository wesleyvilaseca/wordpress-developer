<?php get_header() ?>
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <div id="posts">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            //content-excerpt.php
                            // get_template_part('partials/post/content-excerpt');

                            //1) content-excerpt.php 2) content.php
                            get_template_part('partials/post/content', 'excerpt');
                        }
                    }
                    ?>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <?php
                        next_posts_link('&larr; Older');

                        previous_posts_link('Newer &rarr;');
                        ?>
                        <!--<a href="#" class="btn btn-outline-secondary float-left"></a>
                        <a href="#" class="btn btn-outline-dark float-right"></a>-->
                    </div>
                </div>

            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>