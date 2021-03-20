<?php $lastTeam = $database->getData("mini_team", 1); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Ekip Ayarları</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Ekip Ayarları
                            <a href="team-add.html" class="btn btn-info pull-right">Ekip Ekle</a>
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
                                        <th>Görev</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lastTeam as $data) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $data['mini_team_id'] ?></th>
                                            <td style="width: 25%;">
                                                <img style="width:40%" src="<?= SITE ?>/images/team/<?= $data['mini_team_img'] ?>" alt="">
                                            </td>
                                            <td><?php echo wordwrap($data['mini_team_name'], 75, "\n", "true");  ?></td>
                                            <td ><?= $data['mini_team_job']?></td>
                                            <td>
                                                <p>
                                                    <a href="operation/team-delete/<?= $data['mini_team_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                    <a href="operation/team-update/<?= $data['mini_team_id'] ?>" class="btn btn-info btn-sm">Düzenle</a>
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