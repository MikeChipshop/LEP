<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();?>

        <article class="lep_single-blog-wrap">
            <h2 class="lep_single-blog-title"><?php the_title(); ?></h2>
            <div class="lep_single-blog-meta">
                <div class="lep_single-blog-date">
                    <?php printf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
                </div>
                <div class="lep_single-blog-cat"><?php the_category(' '); ?></div>
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
