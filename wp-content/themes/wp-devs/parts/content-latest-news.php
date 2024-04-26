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