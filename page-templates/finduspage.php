<?php
/**
 * Template Name: Find Us Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<?php get_template_part( 'loop-templates/content', 'findus-page' ); ?>
	</div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
