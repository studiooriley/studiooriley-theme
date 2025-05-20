<?php get_header(); ?>

<!-- DEBUG: SINGLE.PHP is being used -->

<main id="main-content">
    <section id="primary" class="content-area">
        <div id="content" class="site-content">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <header class="entry-header">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        echo get_the_post_thumbnail(null, 'full');
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <p class="post-meta">
                                Posted on <?php the_date(); ?> by <?php the_author(); ?>
                            </p>
                        </header>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php
                    // Display comments if available
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>