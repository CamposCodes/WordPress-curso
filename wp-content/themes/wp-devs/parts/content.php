<article>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title() ?>
        </a>
    </h2>
    <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(275, 275)); ?></a>
    <?php endif; ?>

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
    <?php the_excerpt(); ?><!--resumo do conteudo-->
    <!-- <?php the_content(); ?> -> conteudio todo -->
</article>