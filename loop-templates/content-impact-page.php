<?php
/**
 * Partial template for content in growpage.php
 *
 * @package understrap
 */

?>

<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid page-section page-section--2">
		<div class="row container-fluid--boxed content-item">
			<?php if( have_rows('impact_section_content') ): while ( have_rows('impact_section_content') ) : the_row(); ?>
				<div class="col-md-12">
					<img src="<?php the_sub_field('impact_section_image'); ?>" alt="">
				</div>
				<div class="col-md-5 d-flex align-items-start">
					<h1 class="main-heading"><?php the_sub_field('impact_section_title'); ?></h1>	
				</div>
				<div class="col-md-7 d-flex align-items-start flex-column">
					<?php the_sub_field('impact_section_text'); ?>
				</div>
			<?php endwhile; endif;?>

		</div>

	</div>

	<div class="container-fluid page-section page-section--3">
		<div class="row container-fluid--boxed content-item impact-more">

			<?php if( have_rows('box') ): while ( have_rows('box') ) : the_row(); ?>
				<div class="col-md-6 background">
					<a href="<?php the_sub_field('box_button_link') ?>">
						<img src="<?php the_sub_field("box_image") ?>" alt="">
					</a>
				</div>
				<div class="col-md-6 impact-more__text justify-content-top align-items-start flex-column d-flex mt-2" >
					<div>
						<h3>
							<?php the_sub_field('box_title') ?>  
						</h3>
						<p>
							<?php the_sub_field('box_text') ?>
						</p>
						<a class="button button--black button--arrow" href="<?php the_sub_field('box_button_link') ?>"><?php the_sub_field('box_button_text') ?></a>
					</div>
					
					
				</div>
			<?php endwhile; endif;?>
				
		</div>
	</div>

</article><!-- #post-## -->
