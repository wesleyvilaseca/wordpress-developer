<?php get_header() ?>
<section id="content">

    <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
                <div class="container clearfix">
                    <span class="badge bg-danger bnews-title">Breaking News:</span>

                    <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        global $post;
                        $author_id          = $post->post_author;
                        $author_url         = get_author_posts_url($author_id);
                ?>

                        <div class="single-post nobottommargin">


                            <div class="entry clearfix">


                                <div class="entry-title">
                                    <h2><?php the_title() ?></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php get_the_date() ?></li>
                                    <li>
                                        <a href="<?php $author_url ?>">
                                            <i class="icon-user"></i> <?php the_author() ?>
                                        </a>
                                    </li>
                                    <li><i class="icon-folder-open"></i> <?php the_category() ?>
                                    </li>
                                    <li><a href="#"><i class="icon-comments"></i> <?php comments_number() ?> </a></li>
                                </ul>

                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="entry-image">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail('full') ?>
                                        </a>
                                    </div>
                                <?php } ?>


                                <div class="entry-content notopmargin">
                                    <?php
                                    the_content();
                                    $defaults = [
                                        'before'           => '<p class="text-center">' . __('Pages:', 'CodeVilaTheme'),
                                        'after'            => '</p>',
                                    ];
                                    wp_link_pages($defaults);
                                    ?>

                                    <div class="tagcloud clearfix bottommargin">
                                        <?php the_tags('', ' ') ?>
                                    </div>

                                    <div class="clear"></div>

                                </div>
                            </div>
                            <div class="post-navigation clearfix">

                                <div class="col_half nobottommargin">
                                    <?php previous_post_link() ?>
                                </div>

                                <div class="col_half col_last tright nobottommargin">
                                    <?php next_post_link() ?>
                                </div>

                            </div>

                            <div class="line"></div>


                            <div class="card">
                                <div class="card-header">
                                    <strong>
                                        Posted by
                                        <a href="#">John Doe</a>
                                    </strong>
                                </div>
                                <div class="card-body">
                                    <div class="author-image">
                                        <img src="images/author/1.jpg" class="rounded-circle">
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dolores, eveniet, eligendi et nobis neque minus mollitia sit
                                    repudiandae ad repellendus recusandae blanditiis praesentium v
                                    itae ab sint earum voluptate velit beatae alias fugit
                                    accusantium laboriosam nisi reiciendis deleniti tenetur
                                    molestiae maxime id quaerat consequatur fugiat aliquam
                                    laborum nam aliquid. Consectetur, perferendis?
                                </div>
                            </div>

                            <div class="line"></div>

                            <h4>Related Posts:</h4>

                            <div class="related-posts clearfix">

                                <div class="mpost clearfix">
                                    <div class="entry-image">
                                        <a href="#">
                                            <img src="images/blog/small/10.jpg">
                                        </a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4>
                                                <a href="#">
                                                    This is an Image Post
                                                </a>
                                            </h4>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 10th July 2014</li>
                                            <li><i class="icon-comments"></i> 12</li>
                                        </ul>
                                        <div class="entry-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Mollitia nisi perferendis.
                                        </div>
                                    </div>
                                </div>

                                <div class="mpost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">This is a Video Post</a></h4>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 24th July 2014</li>
                                            <li><i class="icon-comments"></i> 16</li>
                                        </ul>
                                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Mollitia nisi perferendis.</div>
                                    </div>
                                </div>

                            </div>


                            <?php
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }
                            ?>

                        </div>
                <?php
                    }
                }
                ?>



            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>