<?php
$lastPartner    = $database->getData("mini_partner", 1);
$lastCom        = $database->getData("settings");
$lastBook       = $database->getData("mini_info_area");
?>
<!-- Our Partners Area -->
<section class="our_partners_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?=$lastCom['settings_title_partner']?></h2>
            <h4><?=$lastCom['settings_desc_partner']?></h4>
        </div>
        <div class="partners">
            <?php foreach($lastPartner as $data): ?>

                <div class="item"><img src="images/partner/<?=$data['mini_partner_image']?>" alt="<?=$data['mini_partner_name']?>"></div>

            <?php endforeach; ?>

        </div>
    </div>
    <div class="book_now_aera">
        <div class="container">
            <div class="row book_now">
                <div class="col-md-10 booking_text">
                    <h4><?=$lastBook['mini_info_area_dark']?></h4>
                    <p><?=$lastBook['mini_info_area_thin']?></p>
                </div>
                <div class="col-md-2 p0 book_bottun">
                    <a href="<?=$lastBook['mini_info_area_link']?>" class="button_all"><?=$lastBook['mini_info_area_button']?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->