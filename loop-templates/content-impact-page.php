<?php
/**
 * Partial template for content in growpage.php
 *
 * @package understrap
 */

?>

<div class="container">
	<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
	<div class="page-section">

		<div class="page-section__image">

			<?php $image = get_sub_field('section_image');
				if($image): 
				if( get_sub_field('section_image_full_width') ): 
			?>
				<div class="page-section__image__bg" style="background-image: url(<?php echo $image['url'] ?>)"></div>
			<?php else: ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
			<?php  endif; endif ; ?>
		</div>

		<div class="page-section__copy">
			<?php if(get_sub_field('section_title')): ?>
				<h1 class="title"><?php the_sub_field('section_title'); ?></h1>
			<?php endif; ?>

			<?php if(get_sub_field('section_text')): ?>
				<p class="section-text"><?php the_sub_field('section_text'); ?></p>
			<?php endif; ?>
		</div>

	</div>
	<?php endwhile; endif;?>
</div>
