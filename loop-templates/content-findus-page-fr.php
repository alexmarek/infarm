<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article id="post-<?php the_ID(); ?>">

	<div class="container-fluid home-section home-section--1 page-section page-section--1">
		<div class="row container-fluid--boxed content-item">
			
				<div class="col-md-6 d-flex align-items-start flex-column">
					<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<h1 class="main-heading"><?php the_sub_field('heading'); ?></h1>
						<p><?php the_sub_field('content'); ?></p>
					<?php endwhile; endif;?>
				</div>
				<div class="col-md-6 d-flex align-items-start flex-column findus-form">
					<select id="sel" onchange='changePlace(this.value)'>
						<option value="all">Magasins et restaurants</option>
                		<option value="STORE">Magasins</option>
                		<option value="RESTAURANT">Restaurants</option>
					</select>
					<input type="text" id="location-input" class="form-control form-control-lg" aria-describedby="basic-addon1" placeholder="Saisir une ville, une adresse, etc." />
					
					<button class="btn btn-outline-secondary" id="location-submit" type="submit" onclick="runAutocomplete(event)">Submit</button>
					<button class="button button--black btn-locate-me" id="location-getMylocation" onclick="getMyLocation(event)">Utiliser mon emplacement actuel</button>
					
				</div>
			
			
    <div class="container container-map">
	<div class="row">
			<div class="col-md-6">
				<h4 class="results-number">
					<div class="spinner">
						<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
					</div>
					<span id="results-number"></span> 
					résultats
				</h4>
			</div>
			<div class="col-md-6">
				<span id="showListResults" onclick="showListResults(event)">LISTE </span> 
				<span class="active" id="showMapResults" onclick="showMapResults(event)"> CARTE</span>
			</div>
        <div id="map"></div>
		<div id="noResults">
					<p>OUPS, NOUS N'AVONS PAS PU TROUVER L'EMPLACEMENT QUE VOUS AVEZ SAISI.<br>NOUS SOMMES PRÉSENTS DANS LES PAYS EUROPÉENS SUIVANTS :</p>
					<p id="showAvailableCities"></p>
				</div>
		<div id="mapList"></div>
    </div>

		</div>

	</div><!-- .section-1 -->

</article><!-- #post-## -->
