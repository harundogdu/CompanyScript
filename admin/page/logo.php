<?php $lastLogo = $database->getData("logo",1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Logo Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Logo Ayarları</h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logo İsim</th>
                                        <th>Logo Resim</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastLogo as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['logo_id'] ?></th>
                                            <td>
                                                <?=$data['logo_name']?>
                                            </td>
                                            <td style="width: 25%;">
                                                <img style="width:40%" src="<?= SITE ?>/images/logo/<?= $data['logo_image'] ?>" alt="">
                                            </td>                                          
                                            <td>
                                                <p>                                                    
                                                    <a href="operation/logo-update/<?= $data['logo_id'] ?>" class="btn btn-info btn-sm">Değiştir</a>
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