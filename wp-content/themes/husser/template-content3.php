<?php
/**
* Template Name: Content 3
*/
?>
<?php get_header(); ?>
<body>
	<div class="m-pikabu-viewport">
		<div class="m-pikabu-container">
			
			<header class="mod mod-header">

				<?php get_template_part("slider"); ?>

				<?php get_template_part("navigation"); ?>
				
			</header>

			<div class="container-fluid wood-pattern-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="mod mod-breadcrumb">
							<?php if(function_exists('bcn_display'))
						    	{
							        bcn_display();
							    }?>
							</div>
						</div>
						<div class="col-md-6">
							
							<div class="mod mod-content">
								<h1>
								<small><?php the_field("box_1_title"); ?></small><br>
								<?php the_field("box_1_subtitle"); ?>
								</h1>
								<p><?php the_field("box_1_text"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="mod mod-divider-image bottom-light">
				<div class="background-helper"></div>
				<div class="container-fluid">
					<div class="container">
						<div class="col-md-12">
							<div class="image-wrapper">
								<img src="<?php the_field("big_image"); ?>" class="animated" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="container-fluid background-light">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-6">
							
							<div class="mod mod-content">
								<h1>
								<small>Wir stellen uns vor</small><br>
								Ihre Ansprechpartner für alle Fälle
								</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis consequatur corporis cum dolore earum error fugiat, fugit id non odit pariatur placeat praesentium quas quasi repudiandae? Nihil, voluptate!</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			
			<!-- <div class="mod mod-divider-image top-light bottom-normal">
				<div class="background-helper"></div>
				<div class="container-fluid">
					<div class="container">
						<div class="col-md-12">
							
							<div class="mod mod-slider content-slider">
								<div class="js-slider">
									<div class="slide">
										<img data-lazy="img/slider/5.jpg" src="" alt="">
									</div>
									<div class="slide">
										<img data-lazy="img/slider/2.jpg" src="" alt="">
									</div>
									<div class="slide">
										<img data-lazy="img/slider/3.jpg" src="" alt="">
									</div>
									<div class="slide">
										<img data-lazy="img/slider/4.jpg" src="" alt="">
									</div>
									<div class="slide">
										<img data-lazy="img/slider/1.jpg" src="" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="container-fluid background-light">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-6">
							
							<div class="mod mod-content">
								<h1>
								<small><?php the_field("box_2_title"); ?></small><br>
								<?php the_field("box_2_subtitle"); ?>
								</h1>
								<p><?php the_field("box_2_text"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="mod mod-map" id="map"></div>

			<script src="https://maps.googleapis.com/maps/api/js?key="></script>

			<script>

				var map;
				var address = '<?php the_field("map_address"); ?>';

				var map = new google.maps.Map(document.getElementById('map'), { 
				   mapTypeId: google.maps.MapTypeId.TERRAIN,
				   zoom: 16,
				   scrollwheel: false,
				   styles : [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
				   icon: 'http://localhost/husser/wp-content/themes/husser/img/map_marker.png'

				});

				var markerImage = new google.maps.MarkerImage(
					"http://huesser-innenausbau.ch/wp-content/themes/husser/img/map_marker.png",
					null,
					null,
					/* Offset x axis 33% of overall size, Offset y axis 100% of overall size */
					new google.maps.Point(64, 80), 
					new google.maps.Size(64, 80)); 


				var geocoder = new google.maps.Geocoder(),
					marker;

				geocoder.geocode({
				  'address': address
				}, 
				function(results, status) {
				  if(status == google.maps.GeocoderStatus.OK) {
				     marker = new google.maps.Marker({
				        position: results[0].geometry.location,
				        map: map,
				        icon : markerImage,
				        title : "Husser"
				     });
				     map.setCenter(results[0].geometry.location);
				     marker.addListener('click', function() {
					    infowindow.open(map, marker);
					  });
				  }
				});


				var contentString = '<div id="content">'+
			      '<div id="siteNotice">'+
			      '</div>'+
			      '<h1 id="firstHeading" class="firstHeading">Hüsser Innenausbau AG</h1>'+
			      '<div id="bodyContent">'+
			      '<p>Hüsser Innenausbau AG<br/>' +
				  'Oberebenestrasse 20<br/>' +
					'5620 Bremgarten<br/>' +
					'+41 56 648 30 70<br/>' +
					'<a href="mailto:innenausbau@huesser.com">innenausbau@huesser.com</a></p><br/>'
			      '</div>'+
			      '</div>';

			      var infowindow = new google.maps.InfoWindow({
				    content: contentString
				  });

			   
			</script>
			
			
	<?php get_footer(); ?>