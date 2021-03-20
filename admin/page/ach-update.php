<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastAchievments = $database->getData("mini_achievments", 0, " WHERE mini_achievments_id = $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Neler Yaptık Ayarları</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Neler Yaptık</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/achievmentsUpdate" method="POST">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Neler Yaptık İkon</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_achievments_icon" required aria-required="true" value="<?= $lastAchievments['mini_achievments_icon'] ?>">
                                        <div class="help-info">
                                            <span class="mr-4">Geçerli İkon :
                                                <i class="<?= $lastAchievments['mini_achievments_icon'] ?>">
                                                </i>
                                            </span><span class="text-danger ml-2">Font awesome dan ekleyiniz.</span></div>
                                    </div>

                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Neler Yaptık Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_achievments_name" required aria-required="true" value="<?= $lastAchievments['mini_achievments_name'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Neler Yaptık Sayı</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_achievments_num" required aria-required="true" value="<?= $lastAchievments['mini_achievments_num'] ?>">
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_achievments_id" value="<?= $lastAchievments['mini_achievments_id'] ?>">
                                <button class="btn btn-danger waves-effect" type="submit">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>