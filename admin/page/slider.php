<?php $lastSlider = $database->getData("slider", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Slider Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Slider Ayarları
                            <a href="slider-add.html" class="btn btn-info pull-right">Slider Ekle</a>
                        </h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Resim</th>
                                        <th>Slider Başlık</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastSlider as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['slider_id'] ?></th>
                                            <td style="width: 25%;">
                                                <img style="width:100%" src="<?= SITE ?>/images/slider/<?= $data['slider_image'] ?>" alt=""></td>
                                            <td style="width: 40%;"><?php echo wordwrap($data['slider_title'], 75,"\n","true");  ?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/slider-delete/<?= $data['slider_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                    <a href="operation/slider-update/<?= $data['slider_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
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