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
						?>
						<a href="<?php the_sub_field(''); ?>" style="background:url(<?php echo $image[0] ?>) no-repeat center center;background-size:cover">
							<h1><?php the_sub_field('genre_display_label'); ?></h1>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section>
	
	<section class="lep_fp_welcone lep_copy-wrap">
		<h1 class="lep_copy-wrap-title">Welcome Title</h1>
		<div class="lep_fp-welcome-content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a cursus est. Sed a diam in est efficitur bibendum. Cras sed vestibulum nisi. Aenean aliquet lectus velit, ut vestibulum elit pretium ac. Suspendisse sed odio at nisi volutpat gravida. Donec nisi tellus, ullamcorper sed venenatis et, elementum sed purus
		</div>
	</section>
	
	<section class="lep_fp-about-banner">
		<?php
			$attachment_id = get_field('about_banner_image','option');
			$size = "banner";
			$image = wp_get_attachment_image_src( $attachment_id, $size );
		?>
		<img src="<?php echo $image[0] ?>" alt="Go to <?php the_field('about_banner_text','option'); ?>">
		<h1><a href="<?php the_field('about_banner_link','option'); ?>" class="lep_border-button"><span><?php the_field('about_banner_text','option'); ?></span></a></h1>
	</section>
	
	<section class="lep_fp-insta">
		<ul>
			<li>
				<a href="#">
					<img src="#">
				</a>
			</li>
		</ul>
	</section>
</main>

<?php get_footer(); ?>