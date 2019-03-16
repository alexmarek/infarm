<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<div class="container-fluid black-box home-section home-section--1">
		<div class="row container-fluid--boxed content-item">
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
				<div class="col-md-6 d-flex align-items-start">
					<h1 class="main-heading"><?php the_sub_field('heading'); ?></h1>
				</div>
				<div class="col-md-6 d-flex align-items-start">
					<span><?php the_sub_field('content'); ?></span>
				</div>
			<?php endwhile; endif;?>
			
			<div class="col-md-6 offset-md-6">
				<?php if( have_rows('icons') ): while ( have_rows('icons') ) : the_row(); ?>
					<span class="content-item__icons ">
						<img src="<?php the_sub_field('icon'); ?>" />
						<h5><?php the_sub_field('title'); ?></h5> 
					</span>
				<?php endwhile; endif;?>
			</div>

        </div>

	</div><!-- .section-1 -->

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
