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
                get_template_part('parts/content', 'latest-news');
            endwhile;
            wp_reset_postdata(); //função que reseta pesquisa
        else: ?>
            <p>Nothing yet to be displayed !</p>
        <?php endif; ?>
    </div>
</section>