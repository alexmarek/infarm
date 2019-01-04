<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

	<div class="find-us u-margin-top-huge">
		<div class="row">
			<div class="col-1-of-2 find-us__left">
				<h1 class="main-heading"><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
			<div class="col-1-of-2 find-us__right findus-form">
				<select id="sel" onchange='changePlace(this.value)'>
					<option value="all">Stores &amp; Restaurants</option>
					<option value="STORE">Stores</option>
					<option value="RESTAURANT">Restaurants</option>
				</select>
				<div class="location-input">
					<input type="text" id="location-input" class="form-control form-control-lg" aria-describedby="basic-addon1" placeholder="Search city, address, etc." />
					<button class="" id="location-submit" type="submit" onclick="runAutocomplete(event)">Submit</button>
				</div>
				<button class="button btn-locate-me" id="location-getMylocation" onclick="getMyLocation(event)">OR USE CURRENT LOCATION</button>
			</div>
		</div>
	</div>
	
	
			
			
    <div class="container-map u-margin-top-big">

		<div class="map-results">
			<div class="map-results__left">
				<h4 class="results-number">
					<div class="spinner">
						<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
					</div>
					<span id="results-number"></span> 
				RESULTS</h4>
			</div>
			<div class="map-results__right">
				<span class="active" id="showMapResults" onclick="showMapResults(event)"> MAP</span>
				<span id="showListResults" onclick="showListResults(event)">LIST </span> 
			</div>
		</div>

		<div id="map"></div>

		<div id="mapList"></div>

		<div id="noResults">
			<p>OOOPS, WE CAN NOT FIND THE LOCATION YOU WERE LOOKING FOR. <br>BUT WE ARE LIVE IN THESE EUROPEAN COUNTRIES:</p>
			<p id="showAvailableCities"></p>
		</div>
	</div>