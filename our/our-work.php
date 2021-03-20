<?php
$lastComments   = $database->getData("mini_work", 1);
$lastCom        = $database->getData("settings");
?>
<!-- Our Featured Works Area -->
<section class="featured_works row" data-stellar-background-ratio="0.3">
    <div class="tittle wow fadeInUp">
        <h2><?=$lastCom['settings_title_work']?></h2>
        <h4><?=$lastCom['settings_desc_work']?></h4>
    </div>
    <div class="featured_gallery">
        <?php foreach ($lastComments as $data) : ?>
            
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/works/<?=$data['mini_work_image']?>" alt="<?=$data['mini_work_title']?>">
                <div class="gallery_hover">
                    <h4><?=$data['mini_work_title']?></h4>                    
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</section>
<!-- End Our Featured Works Area -->