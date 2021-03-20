<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("slider ", 0, " WHERE slider_id=$userId ");
                if (file_exists("../images/slider/" . $deleteLast['slider_image'])) :
                    unlink("../images/slider/" . $deleteLast['slider_image']);
                endif;
                $deleteServices = $database->setQuery("DELETE FROM slider WHERE ", "slider_id=?", array($userId));
                if ($deleteServices) :
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../slider.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../slider.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>