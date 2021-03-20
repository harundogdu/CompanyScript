<?php
$lastSlider = $database->getData("slider","1");
?>
<!-- Slider area -->
<section class="slider_area row m0">
    <div class="slider_inner">

        <?php
        foreach ($lastSlider as $data):
        ?>
        <div data-thumb="images/slider-1.jpg" data-src="images/slider/<?=$data['slider_image']?>">
            <div class="camera_caption">
                <div class="container">
                    <h5 class="wow fadeInUp animated"><?=$data['slider_title']?></h5>
                    <h3 class="wow fadeInUp animated" data-wow-delay="0.5s"><?=$data['slider_smallTitle']?></h3>
                    <p class="wow fadeInUp animated" data-wow-delay="0.8s"><?=$data['slider_desc']?></p>
                    <a class="wow fadeInUp animated" data-wow-delay="1s" href="services.html"><?=$data['slider_button']?></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>
<!-- End Slider area -->