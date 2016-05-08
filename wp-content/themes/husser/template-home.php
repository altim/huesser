<?php
/**
 * Template Name: Home
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