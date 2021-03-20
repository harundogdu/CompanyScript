<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET)) {
                $userId = $_GET['id'];
                $deleteLast = $database->getData("mini_team", 0, " WHERE mini_team_id=$userId ");
                $deleteServices = $database->setQuery("DELETE FROM mini_team WHERE ", "mini_team_id=?", array($userId));
                if ($deleteServices) :
                    if (file_exists("../images/team/" . $deleteLast['mini_team_img'])) :
                        unlink("../images/team/" . $deleteLast['mini_team_img']);
                    endif;
                    echo '<div class="alert alert-success text-center">Silme Başarılı </div>';
                    header("Refresh:2,url=../../team.html");
                else :
                    echo '<div class="alert alert-danger text-center">Silme Başarısız </div>';
                    header("Refresh:2,url=../../team.html");
                endif;
            } else {
                header("Location:homepage.html");
            }
            ?>
        </div>
    </div>
</section>