<footer class="mod mod-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <?php if(!function_exists("dynamic_sidebar") || !dynamic_sidebar("Footer_1")) : ?>
                    <p></p>
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3">
                <?php if(!function_exists("dynamic_sidebar") || !dynamic_sidebar("Footer_2")) : ?>
                    <p></p>
                <?php endif; ?>

            </div>
            <div class="col-xs-12 col-sm-3">
                <?php if(!function_exists("dynamic_sidebar") || !dynamic_sidebar("Footer_3")) : ?>
                    <p></p>
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3">
                <?php if(!function_exists("dynamic_sidebar") || !dynamic_sidebar("Footer_4")) : ?>
                    <p></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

</div>
<!--<div class="m-pikabu-sidebar m-pikabu-right">-->
<!--    <nav class="mod mod-nav-main skin-nav-main-mobile">-->
        <?php //wp_nav_menu(array('theme_location'=>'main_menu','menu_class'=>'mobile-menu', 'container' => '' )); ?>

<!--    </nav>-->
<!--</div>-->
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/app.js"></script>
<script>
    (function ($) {
        $(document).ready(function () {
            var config = {},
                $root = $('html'),
                application = new Tc.Application($root, config);

            application.registerModules();
            application.start();

        });
    })(Tc.$);
</script>


</body>
</html>
