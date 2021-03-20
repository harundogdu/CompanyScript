<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastOffer = $database->getData("mini_offer", 0, " WHERE mini_offer_id = $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Ne Yapıyoruz Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ne Yapıyoruz Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/offerUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Ne Yapıyoruz Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/offer/<?= $lastOffer['mini_offer_image'] ?>" alt="mini_offer Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="mini_offer_image">
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
                                    <label class="form-label">Ne Yapıyoruz Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_offer_title" required aria-required="true" value="<?= $lastOffer['mini_offer_title'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ne Yapıyoruz İkon</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_offer_icon" required aria-required="true" value="<?= $lastOffer['mini_offer_icon'] ?>">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Font awesome dan 'fab fa-500px' şeklinde ekleyiniz.</span>
                                            <span>Geçerli İkon : <i class="<?= $lastOffer['mini_offer_icon'] ?>"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Ne Yapıyoruz Açıklama</label>
                                    <div class="form-line">
                                        <textarea name="mini_offer_desc" id="mini_offer_desc" cols="30" rows="10" required aria-required="true"><?= $lastOffer['mini_offer_desc'] ?></textarea>
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_offer_id" value="<?= $lastOffer['mini_offer_id'] ?>">
                                <input type="hidden" name="mini_offer_image_old" value="<?= $lastOffer['mini_offer_image'] ?>">
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