<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="containerSearch">

            <h1>Search results for:
                <?php echo get_search_query(); ?>
            </h1>

            <?php

            get_search_form();

            while (have_posts()):
                the_post();
                get_template_part('parts/content', 'search');
            endwhile;

            the_posts_pagination();

            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>