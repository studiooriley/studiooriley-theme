<?php get_header(); ?>

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
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>