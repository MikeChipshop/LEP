<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
		$attachment_id = get_field('page_hero_image');
		$size = "banner";
		$image = wp_get_attachment_image_src( $attachment_id, $size );
	?>
	<header class="lep_global-header" style="background:url(<?php echo $image[0] ?>) no-repeat center center;background-size:cover;">
		<div class="lep_global-header-content">
			<div class="lep_global-logo">
				Logo
			</div>
			<nav class="lep_global-nav">
				<ul>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>