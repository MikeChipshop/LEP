<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();?>

        <article class="lep_single-blog-wrap">
            <h2 class="lep_single-blog-title"><?php the_title(); ?></h2>
            <div class="lep_single-blog-meta">
                <div class="lep_single-blog-date"><?php the_time(); ?></div>
                <div class="lep_single-blog-cat"><a href="#">Photography</a>, <a href="#">Services</a>, <a href="#">Thoughts</a></div>
            </div>
            <div class="rte">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; ?>

<?php else: ?>

    <div class="lep_single-blog-no-content">
        <h2>Oops</h2>
        <h3>No content here, return to the home page and try again</h3>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
