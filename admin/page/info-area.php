<?php $lastArea = $database->getData("mini_info_area"); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Alt Bilgi Ayarları</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Alt Bilgi Ayarları</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/infoUpdate" method="POST">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Bilgi Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_info_area_dark" required aria-required="true" value="<?= $lastArea['mini_info_area_dark'] ?>">

                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Bilgi Alt Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_info_area_thin" required aria-required="true" value="<?= $lastArea['mini_info_area_thin'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Bilgi Buton Yazısı</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_info_area_button" required aria-required="true" value="<?= $lastArea['mini_info_area_button'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Bilgi Buton Link</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_info_area_link" required aria-required="true" value="<?= $lastArea['mini_info_area_link'] ?>">
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_info_area_id" value="<?= $lastArea['mini_info_area_id'] ?>">
                                <button class="btn btn-danger waves-effect" type="submit">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>