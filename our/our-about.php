<?php $lastAbout = $database->getData("mini_about"); ?>
<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?=$lastAbout['mini_about_title']?></h2>
        </div>
        <div class="row about_row">
            <div class="who_we_area col-md-7 col-sm-6">
                <div class="subtittle">
                    <h2><?=$lastAbout['mini_about_smallTitle']?></h2>
                </div>
                <?=$lastAbout['mini_about_desc']?>
                <a href="contact.html" class="button_all"><?=$lastAbout['mini_about_button']?></a>
            </div>
            <div class="col-md-5 col-sm-6 about_client">
                <iframe width="450" height="260" src="https://www.youtube.com/embed/<?=$lastAbout['mini_about_video']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->