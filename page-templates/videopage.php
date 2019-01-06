<?php
/**
 * Template Name: Video Page
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'video-page' ); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>