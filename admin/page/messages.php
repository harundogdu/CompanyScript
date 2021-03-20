<?php $lastMessages = $database->getData("messages", 1, " WHERE messages_see = 0 ORDER BY messages_id DESC"); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Okunmamış Mesajlar</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Mesajlar Ayarları</h2>
                    </div>
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gönderici İsmi</th>
                                        <th>Gönderim Konusu</th>
                                        <th>Gönderim Tarihi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (count($lastMessages) == 0) :
                                    ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-warning text-center"> Okunmamış Mesaj Yok </div>
                                            </td>
                                        </tr>
                                        <?php
                                    else :
                                        foreach ($lastMessages as $data) :
                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <?= $data['messages_id'] ?>

                                                </th>
                                                <td>
                                                    <?php echo wordwrap($data['messages_name'], 75, "\n", "true"); ?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($data['messages_subject'], 75, "\n", "true"); ?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($data['messages_time'], 75, "\n", "true"); ?>
                                                </td>
                                                <td>
                                                    <p>
                                                        <a href="operation/messages-delete/<?= $data['messages_id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                                                        <a href="operation/messages-read/<?= $data['messages_id'] ?>" class="btn btn-info btn-sm">Oku</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;                                     
                                    endif;
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