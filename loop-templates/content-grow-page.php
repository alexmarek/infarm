<?php
/**
 * Partial template for content in growpage.php
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

	<div class="container-fluid ">
		<div class="row container-fluid--boxed content-item grow-steps">
			<?php if( have_rows('growth_steps') ): while ( have_rows('growth_steps') ) : the_row(); ?>
				<div class="col-lg-4 col-md-6 text-center">
					<img src="<?php echo get_sub_field('grow_step_image') ?>" alt="" />
					<h4><?php the_sub_field('grow_step_heading'); ?></h4>
					<p><?php the_sub_field('grow_step_text'); ?></p>
				</div>
			<?php endwhile; endif;?>

		</div>

	</div>

	<div class="container-fluid page-section page-section--3">
		<div class="row container-fluid--boxed content-item grow-more">

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
					<a href="<?php the_sub_field('box_button_link') ?>">
						<img src="<?php the_sub_field("box_image") ?>" alt="">
					</a>
				</div>
			<?php endwhile; endif;?>
				
		</div>
	</div>

</article><!-- #post-## -->
