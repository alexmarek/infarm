<?php
/**
 * Template Name: Career Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'career-page' ); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
