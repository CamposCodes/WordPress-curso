<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <!-- <?php post_class(); ?> -->
                <article id="post-<?php the_ID(); ?>">
                    <header>
                        <h1>
                            <?php the_title() ?>
                        </h1>
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
                    </header>
                    <div class="content">
                        <?php the_content(); ?> <!-- conteudio todo -->
                    </div>

                    <?php
                    if (comments_open() || get_comments_number()) {

                        comments_template();
                    }
                    ?>
                </article>



                <?php
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>