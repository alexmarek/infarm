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
		
		<?php if(get_sub_field('section_title')): ?>
			<div class="page-heading">
				<h1 class="title"><?php the_sub_field('section_title'); ?></h1>
			</div>
		<?php endif; ?>
		
		<div class="page-section__flex">
			<?php 
				$image = get_sub_field('section_image');
				$image_mobile = get_sub_field('section_image_mobile');
				if (wp_is_mobile() && $image_mobile){
					$image = $image_mobile;
				}
				if($image):
					if( get_sub_field('section_image_full_width') ): 
			?>
				<div class="page-section__image page-section__image--bg">
					<div style="background-image: url(<?php echo $image['url'] ?>)"></div>
				</div>
				<?php
					elseif( get_sub_field('section_image_small') ): ?>
				<div class="page-section__image page-section__image--small">
					<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
				</div>
					<?php else: ?>
				<div class="page-section__image">
					<img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
				</div>
			<?php  endif; endif ; ?>


			<div class="page-section__copy">
				<?php if(get_sub_field('section_text')): ?>
					<p class="section-text"><?php the_sub_field('section_text'); ?></p>
				<?php endif; ?>
			</div>
		</div>

	</div>
	<?php endwhile; endif;?>
</div>
