<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section class="home-blog ">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'post_per_page' => 7,
                        'category__in' => array(8, 7, 13),
                        'category__not_in' => array(1)
                    );

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()):
                            $postlist->the_post();
                            ?>
                            <article class="latest-news">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(array(500, 500)); ?>
                                </a>
                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title() ?>
                                    </a>
                                </h3>
                                <div class="meta-info">
                                    <p style="font-size: 14px;">
                                        <span>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </p>
                                    <p style=" font-size: 12px;">by
                                        <span>
                                            <?php the_author_posts_link(); ?>
                                        </span>
                                        Categories: <span>
                                            <?php the_category(' '); ?>
                                        </span>
                                        Tags:
                                        <?php the_tags('', ', '); ?>
                                    </p>
                                </div>
                                <!-- Não traz texto todo do post , só traz um resumo  -->
                                <?php the_excerpt(); ?>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata(); //função que reseta pesquisa
                    else: ?>
                    <p>Nothing yet to be displayed !</p>
                    <?php endif; ?>
                </div>
            </section>
            <!-- <section class="home-blog ">
                <h2>Latest News</h2>
                <div class="container">
                    <div class="blog-items">
                        <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();
                                ?>
                                <article>
                                    <h2>
                                        <?php the_title() ?>
                                    </h2>
                                    <div class="meta-info">
                                        <p>posted in
                                            <?php echo get_the_date(); ?> by
                                            <?php the_author_posts_link(); ?>
                                        </p>
                                        <p>Categories:
                                            <?php the_category(' '); ?>
                                        </p>
                                        <p>Tags:
                                            <?php the_tags('', ', '); ?>
                                        </p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                            <?php endwhile;
                        else: ?>
                        <p>Nothing yet to be displayed !</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section> -->
        </main>
    </div>
</div>
<?php get_footer(); ?>