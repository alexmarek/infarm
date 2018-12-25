<?php
/**
 * Partial template for content in single-taste.php
 *
 * @package understrap
 */
$header_image = get_field('header_image');
$header_image_class = $header_image ? 'header-with-image' : '';
$taste_profile = get_field('taste_profile_title');
if ($taste_profile) {
	$taste_profile_title = $taste_profile;
} else {
	$taste_profile_title = 'Taste Profile';
}
?>

<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid black-box taste-section--1">
		<div class="row container-fluid--boxed content-item header-flex">
			<div class="col-md-5 d-flex align-items-start flex-column header-flex__text">
				<h1 class="main-heading"><?php the_title(); ?></h1>
				<p><?php the_field('short_description') ?></p>
			</div>
			<div class="col-md-2 header-flex__filler"></div>
			<div class="col-md-5 d-flex align-items-start taste-section--1__header-image header-flex__image">
				<img src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>" title="<?php echo $header_image['title']; ?>"></span>
			</div>
        </div>

	</div><!-- .section-1 -->

	<div class="container-fluid taste-section--2">
		<div class="row container-fluid--boxed content-item">
			<div class="col-md-6 d-flex align-items-start flex-column">
				<h3><?php echo $taste_profile_title; ?></h3>
				<img src="<?php the_field('taste_profile_image'); ?>" alt="">
				<p><?php the_field('taste_profile_text') ?></p>
			</div>
			<div class="col-md-6 d-flex align-items-start flex-column taste-section--2__features">
				<?php if( have_rows('taste_features') ): while ( have_rows('taste_features') ) : the_row(); ?>
					<div class="taste-section--2__features__block">
						<span class="d-block"><img src="<?php the_sub_field('taste_feature_icon'); ?>" alt=""></span>
						<h3><?php the_sub_field('taste_feature_heading'); ?></h3>
						<p><?php the_sub_field('taste_feature_text'); ?></p>
					</div>
				<?php endwhile; endif;?>
			</div>
        </div>

	</div><!-- .section-2 -->

	<div class="container-fluid taste-section--3">
		<div class="row container-fluid--boxed content-item">
			<?php

				$post_object = get_field('taste_recipes');

				if( $post_object ): 

					// override $post
					$post = $post_object;
					setup_postdata( $post ); 
					$recipe_image = get_field('recipe_image');

					?>
						<div class="col-md-12">	
							<a href="<?php the_permalink() ?>">						
								<img class="" src="<?php echo $recipe_image['url'] ?>" alt="<?php echo $recipe_image['alt'] ?>" title="Open <?php the_title(); ?> recipe">
							</a>
							<div class="row">
								<div class="col-md-6">
									<h3 ><?php the_title(); ?></h3>
								</div>
							</div>
							
							<a class="button button--black" href="<?php the_permalink() ?>">
								Open Recipe
							</a>
						</div>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
        </div>

	</div><!-- .section-3 -->

	<div class="container-fluid taste-box taste-section--4">
			<div class="container-fluid--boxed content-item">

					<?php if( have_rows('Taste_home_title') ): while ( have_rows('Taste_home_title') ) : the_row(); ?>
						<h1 class="col-md-6 main-title" ><?php the_sub_field('homepage_taste_section_title') ?>  </h3>
						<div class="col-md-6"></div>
					<?php endwhile; endif;?>
				
				<div class="slider--home-taste"  >
					<div class="container container--boxed">
						<div class="owl-carousel home-taste-carousel">
							<?php if( have_rows('taste_home_carousel') ): while ( have_rows('taste_home_carousel') ) : the_row(); ?>
								<div class="home-taste-carousel__item" style="background-image: url(<?php the_sub_field("Taste_home_carousel_image") ?>)">
									<h2 class="home-taste-carousel__item__title"><a href="<?php the_sub_field("Taste_home_carousel_link") ?>"><?php the_sub_field("Taste_home_carousel_link_text") ?></a></h2>
								</div>	 
								
								
							<?php endwhile; endif;?>
							
						</div>
					</div>
				</div>

				<?php if( have_rows('Taste_home_title') ): while ( have_rows('Taste_home_title') ) : the_row(); ?>
					<a class="button button--black" href="<?php the_sub_field('homepage_taste_section_button_link') ?>">
						<?php the_sub_field('homepage_taste_section_button_text') ?>
					</a>
				<?php endwhile; endif;?>
				
			</div>
	</div>

</article><!-- #post-## -->
