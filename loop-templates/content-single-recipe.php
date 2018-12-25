<?php
/**
 * Partial template for content in single-taste.php
 *
 * @package understrap
 */
$recipe_image = get_field('recipe_image');
?>

<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid single-recipe-section--1">
		<div class="row container-fluid--boxed content-item">
			<div class="col-md-12">
				<p class="single-recipe-section--1__related">
					<?php $post_object = get_field('related_taste');

					if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); ?>
							
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				</p>
				<h1 class="main-heading" ><?php the_title(); ?></h3>					
				<img src="<?php echo $recipe_image['url'] ?>" alt="<?php echo $recipe_image['alt'] ?>" title="<?php the_title(); ?> recipe image">
				<div id="share" class="share">
					
					<p>SHARE
						<!-- facebook -->
						<a class="share__facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="blank"></a>

						<!-- twitter -->
						<a class="share__twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" target="blank"></a>

						<!-- email -->
						<a class="share__email" href="mailto:?subject=Recipe from Infarm: <?php the_title() ?>&body=<?php the_permalink() ?>" target="blank"></a>

					</p>

					
					
				</div>
			</div>
			<div class="col-md-6 recipe-ingredients">
				<h3>Ingredients</h3>
				<?php the_field('recipe_ingredients'); ?>
			</div>
			<div class="col-md-6 recipe-preparation">
				<h3>Preparation</h3>
				<?php the_field('recipe_preparation'); ?>
			</div>
        </div>

	</div><!-- .section-1 -->

</article><!-- #post-## -->
