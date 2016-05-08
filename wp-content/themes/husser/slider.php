<div class="mod mod-slider">
    <div class="js-slider">

        <?php
            $sliderImagesField = get_field('slider_images');
            $sliderImages = explode(",",$sliderImagesField);

            $sliderTextField = get_field('slider_text');
            $sliderTexts = explode(",",$sliderTextField);

            for($i=0;$i<count($sliderImages);$i++){
                ?>

                <div class="slide">
                    <img data-lazy="<?php echo $sliderImages[$i]; ?>" src="" alt="">

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-sm-offset-8">
                                <h1><?php echo $sliderTexts[$i]; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }

        ?>




    </div>
</div>