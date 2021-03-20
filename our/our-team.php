<?php
$lastTeam = $database->getData("mini_team", 1);
$lastTm = $database->getData("settings");
?>

<!-- Our Team Area -->
<section class="our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?= $lastTm['settings_title_team'] ?></h2>
            <h4><?= $lastTm['settings_desc_team'] ?></h4>
        </div>
        <div class="row team_row">
            <?php foreach ($lastTeam as $data): ?>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team_membar">
                        <img src="images/team/<?= $data['mini_team_img'] ?>" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="<?= $data['mini_team_facebook'] ?>">
                                        <i class="fab fa-facebook"
                                           aria-hidden="true"></i></a></li>
                                <li><a href="<?= $data['mini_team_twitter'] ?>">
                                        <i class="fab fa-twitter"
                                           aria-hidden="true"></i></a></li>
                                <li><a href="<?= $data['mini_team_linkedin'] ?>">
                                        <i class="fab fa-linkedin"
                                           aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name"><?= $data['mini_team_name'] ?></a>
                            <h6><?= $data['mini_team_job'] ?></h6>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Our Team Area -->
