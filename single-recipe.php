<?php
/**
 * Template Name: Taste - Product Detail
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$header_image_class = $header_image ? 'header-with-image' : '';
$recipe_image = get_field('recipe_image');
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div id="content" class="container-fluid">

		<div class="row <?php echo $header_image_class; ?>">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single-recipe' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
