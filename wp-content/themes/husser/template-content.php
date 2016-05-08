<?php
/**
* Template Name: Content
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
			<div class="container-fluid background-light">
				<div class="container background-light">
					<div class="row">
						<div class="col-sm-4">
							<div class="mod mod-breadcrumb">
							<?php if(function_exists('bcn_display'))
						    	{
							        bcn_display();
							    }?>
							</div>
						</div>
						<div class="col-sm-8 col-md-6">
							
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
				<div class="container">
					<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-sm-8 col-md-6">
							<img class="img-responsive" src="<?php the_field("big_image"); ?>" alt="">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-6 col-sm-offset-4">
							
							<div class="mod mod-content">
								
								<p><?php the_field("box_2_text"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid background-dark-gray wood-pattern-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<img class="rounded" src="<?php the_field("box_3_image"); ?>" alt="">
						</div>
						<div class="col-sm-8 col-md-6">
							
							<div class="mod mod-content">
								<blockquote>
									<?php the_field("box_3_title"); ?>
								</blockquote>
								<p class="contact">
									<?php the_field("box_3_contact"); ?>
								</p>
								<p>
									<?php the_field("box_3_text"); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php get_footer(); ?>