<?php
/**
 * Partial template for content in single-taste.php
 */
?>

<div class="container">
	<div class="page-section">

		<div class="page-section__image">

			<?php $image = get_field('taste_image') ;
				if($image): 
			?>
				<img src="<?php echo $image['url'] ?>" alt="Infarm <?php the_title(); ?>">
			<?php endif; ?>
		</div>

		<div class="page-section__copy">
			<h1 class="title"><?php the_title(); ?></h1>

			<p class="section-text"><?php the_field('taste_description'); ?></p>
		</div>

	</div>
</div>

<div class="taste-section container u-margin-bottom-big">
	<div class="taste-section__spacer"></div>
	<div class="taste-section__content">
		<?php if( have_rows('taste_details') ): while ( have_rows('taste_details') ) : the_row(); ?>
			<div class="taste-section__copy">
				<?php if(get_sub_field('taste_details_title')): ?>
					<h4 class="title"><?php the_sub_field('taste_details_title'); ?></h4>
				<?php endif; ?>

				<?php if(get_sub_field('taste_details_text')): ?>
					<p class="section-text"><?php the_sub_field('taste_details_text'); ?></p>
				<?php endif; ?>
			</div>
		<?php endwhile; endif;?>

		<div class="taste-profile__image">
			<?php $image = get_field('taste_profile_image');
				if($image): 
			?>
				<img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?> taste profile">
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">
	<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
	<div class="taste-section--taste-more">

		<div class="page-section__copy">
			<?php if(get_sub_field('section_title')): ?>
				<h1 class="title"><?php the_sub_field('section_title'); ?></h1>
			<?php endif; ?>

			<?php if(get_sub_field('section_text')): ?>
				<h1 class="section-text"><?php the_sub_field('section_text'); ?></h1>
			<?php endif; ?>

			<?php if(get_sub_field('section_link_url')): ?>
				<a class="button" href="<?php the_sub_field('section_link_url'); ?>" title="<?php the_sub_field('section_link_text'); ?>"><?php the_sub_field('section_link_text'); ?></a>
			<?php endif; ?>
		</div>

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

	</div>
	<?php endwhile; endif;?>
</div>