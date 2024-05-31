<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $hero_title = get_theme_mod('set_hero_title', 'Please, type some title');
            $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please, type some subtitle');
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
            $hero_height = get_theme_mod('set_hero_height', 800);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
            ?>

            <section class="hero" style="background-image: url('<?php echo $hero_background; ?>');">
                <div class="overlay" style="min-height: <?php echo $hero_height; ?>px">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo $hero_title; ?></h1>
                            <p><?php echo nl2br($hero_subtitle); ?>
                            </p>
                            <a href="<?php echo $hero_button_link ?>"><?php echo $hero_button_text; ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            get_template_part('parts/content', 'home-services');
            get_template_part('parts/content', 'home-blog');
            ?>

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