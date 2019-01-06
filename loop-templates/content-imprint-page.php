<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class="container">
	<div class="col-md-6">
	<h1 class="main-heading"><?php the_title(); ?></h1>
	</div>
	<div class="col-md-6"></div>
	<div class="col-md-6">
		<?php the_content(); ?>
	</div>

</div><!-- .section-1 -->

