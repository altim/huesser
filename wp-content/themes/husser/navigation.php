<div class="header-wrapper">

    <div class="container">



        <div class="navigation-wrapper">

            <div id="dl-menu" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>

                <?php wp_nav_menu(array('theme_location'=>'main_menu','menu_class'=>'dl-menu', 'container' => '' )); ?>
            </div>

        <div class="row">
            <div class="col-xs-12">
                <nav class="mod mod-nav-service pull-right visible-md visible-lg">
                    <?php wp_nav_menu(array('theme_location'=>'top_right_menu','menu_class'=>'navigation', 'container' => '' )); ?>
                </nav>

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a class="logo_link" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                         alt="Hüsser Innenausbau AG">
                </a>
            </div>
            <div class="col-md-9">

                <nav class="mod mod-nav-main pull-right ">
                    <?php wp_nav_menu(array('theme_location'=>'main_menu','menu_class'=>'visible-md visible-lg', 'container' => '' )); ?>
                </nav>

            </div>



        </div>



        </div>



    </div>
</div>

