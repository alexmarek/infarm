<?php
/**
 * Template Name: Full Width Page
 */

get_header();

?>


<div class="container u-margin-top-huge u-margin-bottom-huge" id="primary">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
