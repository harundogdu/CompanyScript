<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("mini_work ", 0, " WHERE mini_work_id=$userId ");
                $deleteServices = $database->setQuery("DELETE FROM mini_work WHERE ", "mini_work_id=?", array($userId));
                if ($deleteServices) :
                    if (file_exists("../images/works/" . $deleteLast['mini_work_image'])) :
                        unlink("../images/works/" . $deleteLast['mini_work_image']);
                    endif;
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../works.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../works.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>