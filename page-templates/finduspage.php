<?php
/**
 * Template Name: Find Us Page
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<?php get_template_part( 'loop-templates/content', 'findus-page' ); ?>
	</div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
