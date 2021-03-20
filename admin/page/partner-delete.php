<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("mini_partner", 0, " WHERE mini_partner_id=$userId ");
                $deleteServices = $database->setQuery("DELETE FROM mini_partner WHERE ", "mini_partner_id=?", array($userId));
                if ($deleteServices) :
                    if (file_exists("../images/partner/" . $deleteLast['mini_partner_image'])) :
                        unlink("../images/partner/" . $deleteLast['mini_partner_image']);
                    endif;
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../partner.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../partner.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>