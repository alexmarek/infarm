<?php
/**
 * Template Name: Taste - Product Detail
 *
 * @package understrap
 */

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'single-taste' ); ?>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
