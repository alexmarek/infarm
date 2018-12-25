<?php
/**
 * Partial template for content in tastepage.php
 *
 * @package understrap
 */

?>

<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid page-section page-section--1">
		<div class="row container-fluid--boxed content-item">
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
				<div class="col-md-6 d-flex align-items-start">
					<h1 class="main-heading"><?php the_sub_field('heading'); ?></h1>
				</div>
				<div class="col-md-6 d-flex align-items-start">
					<span><?php the_sub_field('content'); ?></span>
				</div>
			<?php endwhile; endif;?>

		</div>

	</div>

	<div class="container-fluid page-section page-section--2">
		<div class="row container-fluid--boxed content-item">

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
					$taste_link = '<a href="' . $taste_url . '" title="' . $taste_title . '"><img src="' . get_field('featured_image') . '" alt=""></a>';

					if(get_field('inactive')) : $taste_link = '<img src="' . get_field('featured_image') . '" title="Details coming soon!" alt="" class="taste--inactive">'; endif;
			?>
					<div class="col-md-2 col-sm-4 col-6 text-center taste__item">
					
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

	<div class="container-fluid page-section page-section--3">
		<div class="row container-fluid--boxed content-item grow-more taste-more">

			<?php if( have_rows('box') ): while ( have_rows('box') ) : the_row(); ?>
				<div class="col-md-6 justify-content-top align-items-start flex-column d-flex mt-2" >
					<h3>
						<?php the_sub_field('box_title') ?>  
					</h3>
					<p>
						<?php the_sub_field('box_text') ?>
					</p>
					<a class="button button--black button--arrow" href="<?php the_sub_field('box_button_link') ?>"><?php the_sub_field('box_button_text') ?></a>
					
				</div>
				<div class="col-md-6 background">
					<img src="<?php the_sub_field("box_image") ?>" alt="">
				</div>
			<?php endwhile; endif;?>
				
		</div>
	</div>

</article><!-- #post-## -->
