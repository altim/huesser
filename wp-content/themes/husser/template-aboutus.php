<?php
/**
* Template Name: About Us
*/
?>
<?php get_header(); ?>
<body class="mod mod-layout">
	<div class="m-pikabu-viewport">
		<div class="m-pikabu-container">
			
			<header class="mod mod-header">

				<?php get_template_part("slider"); ?>

				<?php get_template_part("navigation"); ?>
				
			</header>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="mod mod-breadcrumb">
						<?php if(function_exists('bcn_display'))
					    	{
						        bcn_display();
						    }?>
						</div>
					</div>
					<div class="col-sm-6">
						
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
			<div class="container-fluid background-dark-gray">
				<div class="container">
					
					<?php
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                    ?>

                                <?php the_content(); ?>

                    <?php
                            } // end while
                        } // end if
                    ?>
					
				</div>
			</div>
			
			<div class="mod mod-divider-image top-dark bottom-normal">
				<div class="background-helper"></div>
				<div class="container-fluid">
					<div class="container">
						<div class="col-md-12">
							<img src="<?php the_field("big_image"); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-4 col-sm-6">
							
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
			
			<?php get_footer(); ?>