<?php
$lastOffer        = $database->getData("mini_offer", 1);
$lastOff          = $database->getData("settings");
?>
<!-- What ew offer Area -->
<section class="what_we_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?= $lastOff['settings_title_offer'] ?></h2>
            <h4><?= $lastOff['settings_desc_offer'] ?></h4>
        </div>
        <div class="row construction_iner">
            <?php

            foreach ($lastOffer as $data) :
            ?>

                <div class="col-md-4 col-sm-6 construction">
                    <div class="cns-img">
                        <img style="width: 400px ; height:200px; object-fit:cover;" src="images/offer/<?= $data['mini_offer_image'] ?>" alt="">
                    </div>
                    <div class="cns-content" style="min-height: 200px;">
                        <i class="<?= $data['mini_offer_icon'] ?>" aria-hidden="true"></i>
                        <a href="#"><?= $data['mini_offer_title'] ?></a>
                        <p><?= $data['mini_offer_desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End What ew offer Area -->