<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post(); ?>
        <article class="chamber-article">
            <h1 class="chamber-article__title">
                <?php the_title(); ?>
            </h1>
            <div class="chamber-article__content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php else: ?>
    <p class="chamber-no-content"> No content found. </p>
<?php endif; ?>