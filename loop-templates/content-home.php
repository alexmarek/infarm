<header class="entry-header">

	<div class="bg-video">
		<video class="bg-video__content" preload="none" autoplay muted loop poster="<?php $image = get_field('page_header_image'); echo $image['url']; ?>">
			<source src="/video/infarm-homepage.mp4" type="video/mp4">
			<source src="/video/infarm-homepage.webm" type="video/webm">
		</video>

		<div class="bg-video__poster" style="background-image: url(<?php  $image = get_field('page_header_image'); echo $image['url']; ?>)"></div>

		<div class="container">
			<h1 class="bg-video__title"><?php the_field('header_title'); ?></h1>
			<a class="button home-slider__button" href="<?php the_field('header_button_link'); ?>"><?php the_field('header_button_text'); ?></a>	
		</div>
			
	</div>

</header>

<div class="row">
	<div class="container">
		<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
		<div class="page-section">
			<?php 
				$image = get_sub_field('section_image');
				if($image):
			?>

			<?php if( get_sub_field('section_image_full_width') ): ?>
				<div class="page-section__image__bg home-imagebg" style="background-image: url(<?php echo $image['url'] ?>)"></div>
			<?php else: ?>
				<img class="u-margin-top-huge" src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
			<?php  endif; endif ; ?>

			<?php if(get_sub_field('section_text')): ?>
				<h2 class="home-text"><?php the_sub_field('section_text'); ?></h2>
			<?php endif; ?>
			
			<?php if(get_sub_field('section_link_url')): ?>
				<a class="button u-margin-bottom-big u-margin-top-medium" href="<?php the_sub_field('section_link_url'); ?>" title="<?php the_sub_field('section_link_text'); ?>"><?php the_sub_field('section_link_text'); ?></a>
			<?php endif; ?>
		</div>
		<?php endwhile; endif;?>
	</div>
</div>

<div class="container home-taste u-margin-bottom-huge">
	<div class="row">
		<?php if( have_rows('taste_home_carousel') ): while ( have_rows('taste_home_carousel') ) : the_row(); ?>
			<a href="<?php the_sub_field("Taste_home_carousel_link") ?>" class="col-1-of-4">
				<div class="home-taste__item" style="background-image: url(<?php the_sub_field("Taste_home_carousel_image") ?>)"></div>	
				<h4 class="home-taste__item__subtitle"><?php the_sub_field("taste_home_carousel_subtitle") ?></h4>	
				<h2 class="home-taste__item__title"><?php the_sub_field("taste_home_carousel_title") ?></h2>
			</a>
		<?php endwhile; endif;?>
	</div>		
</div>

<div class="container u-margin-bottom-huge">
	<div class=" owl-carousel home-press-carousel">
		<?php if( have_rows('homepage_press_images') ): while ( have_rows('homepage_press_images') ) : the_row(); ?>
			<a href="<?php the_sub_field('homepage_press_link') ?>" target="_blank" rel="noreferrer noopener" title="Go to <?php the_sub_field('homepage_press_link') ?>">
				<img src="<?php the_sub_field('homepage_press_image') ?>" alt="Go to <?php the_sub_field('homepage_press_link') ?>" />
			</a>
		<?php endwhile; endif;?>
	</div>
</div>
