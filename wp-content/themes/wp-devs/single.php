<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div style="flex-direction: column;" class="container">
            <?php
            while (have_posts()):
                the_post();
                get_template_part('parts/content', 'single');
                ?>
                <!-- <?php post_class(); ?> -->
                <div class="wpdevs-pagination">
                    <div class="pages next">
                        <?php next_post_link('&laquo; %link'); ?>
                    </div>
                    <div class="pages previous">
                        <?php previous_post_link('%link &raquo;'); ?>
                    </div>
                </div>

                <?php
                if (comments_open() || get_comments_number()) {

                    comments_template();
                }

            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>