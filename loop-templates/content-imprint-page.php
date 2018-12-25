<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<div class="container-fluid">
		<div class="row container-fluid--boxed content-item">
				<div class="col-md-6">
				<h1 class="main-heading"><?php the_title(); ?></h1>
				</div>
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<?php the_content(); ?>
				</div>

        </div>

	</div><!-- .section-1 -->

	</div><!-- .entry-content -->

</article><!-- #post-## -->
