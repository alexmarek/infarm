<?php
/**
 * Template Name: Single Recipe
 */

get_header();
$recipe_image = get_field('recipe_image');
?>


<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'loop-templates/content', 'single-recipe' ); ?>

<?php endwhile; // end of the loop. ?>

			
<?php get_footer(); ?>
