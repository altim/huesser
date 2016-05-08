<?php
/**
* Template Name: Content 4
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
			
		<!-- 	<div class="mod mod-divider-image top-light bottom-normal">
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
			
			<div class="mod mod-divider-image top-light bottom-dark">
				<div class="background-helper"></div>
				<div class="container-fluid">
					<div class="container">
						<div class="col-md-12">
							<div class="image-wrapper">
								<img src="<?php the_field("big_image_2"); ?>" alt="aniamted" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>




			<div class="container-fluid background-dark-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-6">
							
							<div class="mod mod-content">
								<h1>
								<small><?php the_field("box_3_title"); ?></small><br>
								<?php the_field("box_3_subtitle"); ?>
								</h1>
								<p><?php the_field("box_3_text"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="mod mod-map" data-zoom="12" data-address="<?php the_field("map_address"); ?>"></div>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVls3JX78GvZr6CB5WUDpvyc9c_3g077g"></script>
			
	<?php get_footer(); ?>