<?php 
/* 
Template name: General Template
*/

?>

<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
                <div class="container">
                    <div class="general-template">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <br>
                            <hr>
                                <article>
                                    <h1><?php the_title(); ?></h1>
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
