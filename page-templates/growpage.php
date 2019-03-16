<?php
/**
 * Template Name: Grow Page
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'grow-page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
