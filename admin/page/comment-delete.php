<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("mini_comments", 0, " WHERE mini_comments_id=$userId ");
                $deleteServices = $database->setQuery("DELETE FROM mini_comments WHERE ", "mini_comments_id=?", array($userId));
                if ($deleteServices) :
                    if (file_exists("../images/comments/" . $deleteLast['mini_comments_image'])) :
                        unlink("../images/comments/" . $deleteLast['mini_comments_image']);
                    endif;
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../comment.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../comment.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>