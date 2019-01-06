<?php
/**
 * Partial template for content in growpage.php
 *
 * @package understrap
 */

?>

<div class="container video-page">
	<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); $image = get_sub_field('section_image');?>
	<div class="page-section">

		<div class="page-section__image u-margin-bottom-big">
			<a href="http://www.youtu.be/<?php the_sub_field('section_link_url'); ?>&rel=0&autoplay=1&modestbranding=1" allowfullscreen class="play-video">
				<div class="play-video-button">
					<svg width="46" height="58" viewBox="0 0 46 58">
						<path fill="#000" fill-rule="evenodd" d="M0 0v57.477l45.199-28.739z"/>
					</svg>
				</div>
			</a>
			<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
		</div>

		<div class="page-section__copy sixty-right u-margin-bottom-huge">
			<?php if(get_sub_field('section_title')): ?>
				<h1 class="title u-margin-bottom-medium"><?php the_sub_field('section_title'); ?></h1>
			<?php endif; ?>

			<?php if(get_sub_field('section_text')): ?>
				<p class="section-text"><?php the_sub_field('section_text'); ?></p>
			<?php endif; ?>
		</div>

	</div>
	<?php endwhile; endif;?>
</div>
