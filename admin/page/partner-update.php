<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastPartner = $database->getData("mini_partner", 0, " WHERE mini_partner_id= $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Ortak Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ortak Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/partnerUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Team Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/partner/<?= $lastPartner['mini_partner_image'] ?>" alt="Slider Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="mini_partner_image">
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
                                    <label class="form-label">Team İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_partner_name" required aria-required="true" value="<?= $lastPartner['mini_partner_name'] ?>">
                                    </div>
                                </div>

                                <!-- end item -->
                                <input type="hidden" name="mini_partner_id" value="<?= $lastPartner['mini_partner_id'] ?>">
                                <input type="hidden" name="mini_partner_image_old" value="<?= $lastPartner['mini_partner_image'] ?>">
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