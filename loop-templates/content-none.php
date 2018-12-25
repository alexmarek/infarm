<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

?>

<section class="no-results not-found">

	<header class="page-header">

		<div class="row">
			<div class="col-md-6"><img src="<?php get_stylesheet_directory() ?>/images/404.svg" alt=""></div>
			<div class="col-md-6">
				<h1 class="page-title main-title">PAGE NOT FOUND</h1>
			</div>
		</div>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'understrap' ); ?></p>
			<?php
				get_search_form();
		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'understrap' ); ?></p>
			<?php
				get_search_form();
		endif; ?>
	</div><!-- .page-content -->
	
</section><!-- .no-results -->
