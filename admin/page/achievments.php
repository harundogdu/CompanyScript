<?php $lastAchievments = $database->getData("mini_achievments", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Hakkımızda Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Hakkımızda Ayarları</h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>İkon</th>
                                        <th>İş</th>
                                        <th>Sayı</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastAchievments as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['mini_achievments_id'] ?></th>
                                            <td><i class="<?= $data['mini_achievments_icon'] ?>"></i> </td>
                                            <td><?= $data['mini_achievments_name'] ?></td>
                                            <td><?= $data['mini_achievments_num'] ?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/ach-update/<?= $data['mini_achievments_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
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