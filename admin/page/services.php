<?php $lastServices = $database->getData("mini_services", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Hizmetler Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Hizmetler Ayarları
                            <a href="services-add.html" class="btn btn-info pull-right">Hizmet Ekle</a>
                        </h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>İkon</th>
                                        <th>Hizmet Adı</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastServices as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['mini_services_id'] ?></th>
                                            <td><i class="<?= $data['mini_services_icon'] ?>"></i> </td>
                                            <td><?= $data['mini_services_title'] ?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/services-delete/<?= $data['mini_services_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                    <a href="operation/services-update/<?= $data['mini_services_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
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