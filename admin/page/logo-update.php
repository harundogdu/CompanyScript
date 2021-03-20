<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastLogo = $database->getData("logo", 0, " WHERE logo_id= $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Logo Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Logo Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/logoUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Proje Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/logo/<?= $lastLogo['logo_image'] ?>" alt="Slider Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="logo_image">
                                            </p>
                                        </div>
                                        <br><br>
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Güncellemek İstemiyorsanız Boş Bırakın | Maksimum 5MB Olmalıdır | İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="logo_id" value="<?= $lastLogo['logo_id'] ?>">
                                <input type="hidden" name="logo_image_old" value="<?= $lastLogo['logo_image'] ?>">
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