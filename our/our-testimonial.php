<?php
$lastComments   = $database->getData("mini_comments", 1);
$lastCom        = $database->getData("settings");
?>

<!-- Our Testimonial Area -->
<section class="testimonial_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?= $lastCom['settings_title_comments'] ?></h2>
            <h4><?= $lastCom['settings_desc_comments'] ?></h4>
        </div>
        <div class="testimonial_carosel">
            <?php foreach ($lastComments as $data) : ?>

                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img height="100" class="media-object" src="images/comments/<?=$data['mini_comments_image']?>" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$data['mini_comments_name']?></h4>
                            <h6><?=$data['mini_comments_job']?></h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i><?=$data['mini_comments_desc']?><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>

            <?php endforeach; ?>



        </div>
    </div>
</section>
<!-- End Our testimonial Area -->