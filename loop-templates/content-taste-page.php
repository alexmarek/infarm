<?php
/**
 * Partial template for content in tastepage.php
 *
 * @package understrap
 */

?>


<div class="container">
	<div class="taste-page-section">

		<div class="page-section__image"></div>

		<div class="page-section__copy">
			<h1 class="title"><?php the_content(); ?></h1>
		</div>

	</div>
</div>


<div class="container">
	<div class="row">
		<?php
		$args = array(
			'post_type'   => 'taste',
			'orderby' => 'title',
			'order'   => 'ASC',
		);
		
		$taste = new WP_Query( $args );
		if( $taste->have_posts() ) :
			$taste_url = '';
			$taste_title = '';
		?>
		<?php

			while( $taste->have_posts() ) :
				$taste->the_post();

				$taste_url = get_permalink();
				$taste_title = get_the_title();
				$taste_link = '<a href="' . $taste_url . '" title="' . $taste_title . '"><img src="' . get_field('taste_image')['url'] . '" alt=""></a>';

				if(get_field('inactive')) : $taste_link = '<img src="' . get_field('taste_image')['url'] . '" title="Details coming soon" alt="Details coming soon" class="taste--inactive">'; endif;
		?>
				<div class="col-1-of-6 taste__item">
				
					<?php echo $taste_link; ?>

					<h5><?php the_title()  ?></h5>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		<?php
		else :
		esc_html_e( 'No products in the taste type!', 'text-domain' );
		endif; ?>
	</div>
</div>

<div class="container">
	<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
	<div class="page-section">

		<div class="page-section__copy">
			<?php if(get_sub_field('section_title')): ?>
				<h1 class="title"><?php the_sub_field('section_title'); ?></h1>
			<?php endif; ?>

			<?php if(get_sub_field('section_text')): ?>
				<p class="section-text"><?php the_sub_field('section_text'); ?></p>
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