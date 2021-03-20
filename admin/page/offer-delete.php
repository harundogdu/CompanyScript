<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("mini_offer", 0, " WHERE mini_offer_id=$userId ");
                if (file_exists("../images/offer/" . $deleteLast['mini_offer_image'])) :
                    unlink("../images/offer/" . $deleteLast['mini_offer_image']);
                endif;
                $deleteServices = $database->setQuery("DELETE FROM mini_offer WHERE ", "mini_offer_id=?", array($userId));
                if ($deleteServices) :
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../offer.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../offer.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>