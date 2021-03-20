<?php $lastOffer = $database->getData("mini_offer", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Ne Yapıyoruz Ayarları</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Ne Yapıyoruz Ayarları
                            <a href="offer-add.html" class="btn btn-info pull-right">Ne Yapıyoruz Ekle</a>
                        </h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Resim</th>
                                        <th>Ne Yapıyoruz Başlık</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastOffer as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['mini_offer_id'] ?></th>
                                            <td style="width: 20%;">
                                                <img style="width:90%" src="<?= SITE ?>/images/offer/<?= $data['mini_offer_image'] ?>" alt=""></td>
                                            <td style="width: 30%;"><?php echo wordwrap($data['mini_offer_title'], 35, "\n", "true");  ?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/offer-delete/<?= $data['mini_offer_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                    <a href="operation/offer-update/<?= $data['mini_offer_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
                                                </p>
                                            </td>
                                        </tr>

                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>