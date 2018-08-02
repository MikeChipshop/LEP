<?php get_header(); ?>
<main>
	<section class="lep_cat-menu">
		<?php if( have_rows('genre_display') ): ?>
    		<ul>
				<?php while ( have_rows('genre_display') ) : the_row(); ?>
					<li>
						<?php
							$attachment_id = get_sub_field('genre_display_image');
							$size = "banner";
							$image = wp_get_attachment_image_src( $attachment_id, $size );

							$term = get_sub_field('genre_display_link');
						?>
						<div style="background:url(<?php echo $image[0] ?>) no-repeat center center;background-size:cover">
							<h2><a href="<?php echo get_term_link( $term ); ?>" class="lep_border-button"><span><?php the_sub_field('genre_display_label'); ?></span></a></h2>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section>

	<?php if ( have_posts() ) : ?>
    	<?php while ( have_posts() ) : the_post();?>
			<section class="lep_fp_welcome lep_copy-wrap">
				<h1 class="lep_copy-wrap-title"><?php the_title(); ?></h1>
				<div class="lep_fp-welcome-content">
					<?php the_content(); ?>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<section class="lep_fp-pos-banner">
		<?php
			$attachment_id_1 = get_field('one_banner_image');
			$size_1 = "banner";
			$image_1 = wp_get_attachment_image_src( $attachment_id_1, $size_1 );

			$attachment_id_2 = get_field('two_banner_image');
			$size_2 = "banner";
			$image_2 = wp_get_attachment_image_src( $attachment_id_2, $size_2 );
		?>
		<nav>
			<ul>
				<li>
					<img src="<?php echo $image_1[0] ?>" alt="Go to <?php the_field('one_banner_text'); ?>">
					<h1><a href="<?php the_field('one_banner_link'); ?>" class="lep_border-button"><span><?php the_field('one_banner_text'); ?></span></a></h1>
				</li>
				<li>
					<img src="<?php echo $image_2[0] ?>" alt="Go to <?php the_field('two_banner_text'); ?>">
					<h1><a href="<?php the_field('two_banner_link'); ?>" class="lep_border-button"><span><?php the_field('two_banner_text'); ?></span></a></h1>
				</li>
			</ul>
		</nav>
	</section>

	<section class="lep_fp-insta">
		<div id="instafeed"></div>
	</section>
</main>
<?php get_footer(); ?>
