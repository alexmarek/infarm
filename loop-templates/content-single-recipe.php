<?php
/**
 * Partial template for content in single-taste.php
 */

$recipe_image = get_field('recipe_image');
?>

<div class="container">
	<img src="<?php echo $recipe_image['url'] ?>" alt="<?php echo $recipe_image['alt'] ?>" title="<?php the_title(); ?> recipe image">

	<div class="sixty-right u-margin-top-big">
		<h1 class="title u-margin-bottom-medium"><?php the_title(); ?></h1>
		<?php the_field('recipe_ingredients'); ?>
		<div class="u-margin-bottom-medium"></div>
		<?php the_field('recipe_preparation'); ?>
		<div id="share" class="share">
		
		<p>
			<!-- facebook -->
			<a class="share__facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="blank"></a>

			<!-- twitter -->
			<a class="share__twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" target="blank"></a>

			<!-- email -->
			<a class="share__email" href="mailto:?subject=Recipe from Infarm: <?php the_title() ?>&body=<?php the_permalink() ?>" target="blank"></a>

		</p>
	
	</div>
		<div class="u-margin-bottom-huge"></div>
	</div>
</div>
