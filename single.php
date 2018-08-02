<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();?>

        <div class="lep_single-blog-wrap">
            <h2><?php the_title(); ?></h2>
            <div class="rte">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; ?>

    <div class="lep_single-blog-no-content">
        <h2>Oops</h2>
        <h3>No content here, return to the home page and try again</h3>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
