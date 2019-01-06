<?php
/**
 * Template Name: Taste Page
 */

get_header();
?>


					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'taste-page' ); ?>

		
					<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
