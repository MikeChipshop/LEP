<?php get_header(); ?>
<main>
	<section class="lep_blog-landing-wrap">
        <div class="lep_main-wrap">
            <?php if ( have_posts() ) : ?>
                <ul>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
                                    <?php the_post_thumbnail('archive-squares'); ?>
                                    <div class="lep_archive-landing-overlay">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                </a>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <nav class="lep_pagination">
					<?php echo paginate_links(); ?>
				</nav>
            <?php else: ?>
                <div class="lep_no-content">
                    <h1>Apologies, no content found</h1>
                </div>
            <?php endif; ?>
        </div>
    </section>

	<section class="lep_fp-insta">
		<div id="instafeed"></div>
	</section>
</main>
<?php get_footer(); ?>
