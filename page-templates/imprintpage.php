<?php
/**
 * Template Name: Imprint Page
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$header_image = get_field('page_header_image');
$header_image_class = $header_image ? 'header-with-image' : '';
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row <?php echo $header_image_class; ?>">

        <header class="entry-header " style="background-image: url(<?php echo $header_image['url']; ?>)">

        </header><!-- .entry-header -->

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'imprint-page' ); ?>

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
