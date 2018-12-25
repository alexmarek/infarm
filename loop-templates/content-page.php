<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid home-section home-section--1 page-section page-section--1">
		<div class="row container-fluid--boxed content-item">
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
				<div class="col-md-6 d-flex align-items-start">
					<h1 class="main-heading"><?php the_sub_field('heading'); ?></h1>
				</div>
				<div class="col-md-6 d-flex align-items-start">
					<span><?php the_sub_field('content'); ?></span>
				</div>
			<?php endwhile; endif;?>
			
			<div class="col-md-6 offset-md-6">
				<?php if( have_rows('icons') ): while ( have_rows('icons') ) : the_row(); ?>
					<span class="content-item__icons ">
						<img src="<?php the_sub_field('icon'); ?>" />
						<h5><?php the_sub_field('title'); ?></h5> 
					</span>
				<?php endwhile; endif;?>
			</div>

		</div>

	</div><!-- .section-1 -->

</article><!-- #post-## -->
