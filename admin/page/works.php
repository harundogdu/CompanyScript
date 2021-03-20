<?php $lastWork = $database->getData("mini_work", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Projeler Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Projeler Ayarları
                            <a href="works-add.html" class="btn btn-info pull-right">Proje Ekle</a>
                        </h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Resim</th>
                                        <th>İsim</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastWork as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['mini_work_id'] ?></th>
                                            <td style="width: 25%;">
                                                <img style="width:40%" src="<?= SITE ?>/images/works/<?= $data['mini_work_image'] ?>" alt="">
                                            </td>
                                            <td><?php echo wordwrap($data['mini_work_title'], 75, "\n", "true");  ?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/works-delete/<?= $data['mini_work_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                    <a href="operation/works-update/<?= $data['mini_work_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
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