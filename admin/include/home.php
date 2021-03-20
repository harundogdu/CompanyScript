<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <div class="row clearfix">
            <?php
            $arrHome = array("admin", "messages", "mini_about", "mini_achievments", "mini_comments", "mini_offer", "mini_partner", "mini_services", "mini_team", "mini_work");

            foreach ($arrHome as $key => $data) :

                if ($key > 1) {
                    $last = explode("_", $data);
                    $last = $last[1];
                }
                if ($key < 2) {
                    $last = $data;
                }

            ?>
                <!-- Widgets -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text"><?=strtoupper($last)?></div>
                            <div class="number count-to" data-from="0" data-to="<?= $database->rowCountTable($data) ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- #END# Widgets -->
        </div>
    </div>
</section>