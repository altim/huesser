<?php
/**
* Template Name: Product 2
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

            <div class="container-fluid wood-pattern-top">
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
            </div>
            <div class="container-fluid background-light">
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
            
            
            
            
            <?php get_footer(); ?>