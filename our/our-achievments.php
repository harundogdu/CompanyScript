<?php
$lastAchievments = $database->getData("mini_achievments" , 1);
$lastAch = $database->getData("settings");
?>
<!-- Our Achievments Area -->
<section class="our_achievments_area" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?=$lastAch['settings_title_achiv']?></h2>
            <h4><?=$lastAch['settings_desc_achiv']?></h4>
        </div>
        <div class="achievments_row row">
            <?php foreach ($lastAchievments as $data): ?>

            <div class="col-md-3 col-sm-6 p0 completed">
                <i class="<?=$data['mini_achievments_icon']?>" aria-hidden="true"></i>
                <span class="counter"><?=$data['mini_achievments_num']?></span>
                <h6><?=$data['mini_achievments_name']?></h6>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Our Achievments Area -->
