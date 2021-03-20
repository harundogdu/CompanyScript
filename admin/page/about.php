<?php $lastAbout = $database->getData("mini_about"); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Hakkımızda Ayarları</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Hakkımızda Ayarları</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/aboutUpdate" method="POST">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ayarlar Üst Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_about_title" required aria-required="true" value="<?= $lastAbout['mini_about_title'] ?>">

                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ayarlar Kalın Alt Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_about_smallTitle" required aria-required="true" value="<?= $lastAbout['mini_about_smallTitle'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ayarlar Video Embed Kodu</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_about_video" required aria-required="true" value="<?= $lastAbout['mini_about_video'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ayarlar Buton Yazısı</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_about_button" required aria-required="true" value="<?= $lastAbout['mini_about_button'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ayarlar Açıklaması</label>
                                    <div class="form-line">
                                        <textarea name="mini_about_desc" id="mini_about_desc" cols="30" class="form-control" rows="10" required><?= $lastAbout['mini_about_desc'] ?></textarea>
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_about_id" value="<?= $lastAbout['mini_about_id'] ?>">
                                <button class="btn btn-danger waves-effect" type="submit">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>