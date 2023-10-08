<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
                <h1>BLOGG</h1>
                <div class="container">
                    <div class="blog-items">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <br>
                            <hr>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category(' '); ?></p>
                                        <p>Tags: <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>No posts found.</p>
                        <?php endif; ?>
                    </div>
                </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
