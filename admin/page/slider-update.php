<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastSlider = $database->getData("slider", 0, " WHERE slider_id = $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Slider Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Slider Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/sliderUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Slider Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/slider/<?= $lastSlider['slider_image'] ?>" alt="Slider Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="slider_image">
                                            </p>
                                        </div>
                                        <br><br>
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Güncellemek İstemiyorsanız Boş Bırakın | Maksimum 5MB Olmalıdır | İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>

                                </div>

                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_title" required aria-required="true" value="<?= $lastSlider['slider_title'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Alt Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_smallTitle" required aria-required="true" value="<?= $lastSlider['slider_smallTitle'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Buton Yazısı</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_button" required aria-required="true" value="<?= $lastSlider['slider_button'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Açıklaması</label>
                                    <div class="form-line">
                                        <textarea name="slider_desc" id="slider_desc" cols="30" rows="10" required aria-required="true"><?= $lastSlider['slider_desc'] ?></textarea>
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="slider_id" value="<?= $lastSlider['slider_id'] ?>">
                                <input type="hidden" name="slider_image_old" value="<?= $lastSlider['slider_image'] ?>">
                                <!-- Buton -->
                                <button class="btn btn-danger waves-effect" type="submit">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>