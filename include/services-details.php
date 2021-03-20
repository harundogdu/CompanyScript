<?php
$lastServices = $database->getData("mini_services", 1);
$lastAch = $database->getData("settings");
?>
<!-- Professional Builde -->
<section class="professional_builder row" style="padding: 0;margin:0;">
    <div class="container">
        <div class="row" style="padding: 0;margin:0 0 30px 0;">
            <div class="col-12" style="padding: 0;margin:0 0 30px 0;">
                <div class="tittle wow fadeInUp">
                    <h2><?= $lastAch['settings_title_services'] ?></h2>
                    <h4><?= $lastAch['settings_desc_services'] ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row builder_all">
            <?php
            foreach ($lastServices as $data) :
            ?>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="<?= $data['mini_services_icon'] ?>" aria-hidden="true"></i>
                    <h4><?= $data['mini_services_title'] ?></h4>
                    <p><?= $data['mini_services_desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Professional Builde -->