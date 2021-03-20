<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastMessages = $database->getData("messages", 0, " WHERE messages_id= $userId ");
$lastMessagesRead = $database->setQuery("UPDATE messages SET ", "messages_see=? WHERE messages_id=? ", array(1, $userId));
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Mesaj Oku</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Mesaj Oku</h2>
                        </div>
                        <div class="body">
                            <form action="">
                                <!-- item -->
                                <div class="form-row">
                                    <!-- item inner -->
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Mesaj Gönderici İsmi</label>
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" name="messages_name" required aria-required="true" value="<?= $lastMessages['messages_name'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item inner -->
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Mesaj Mail Adresi</label>
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" name="messages_mail" required aria-required="true" value="<?= $lastMessages['messages_mail'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-row">
                                    <!-- item inner -->
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Mesaj Konusu</label>
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" name="messages_subject" required aria-required="true" value="<?= $lastMessages['messages_subject'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item inner -->
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Mesaj Zamanı</label>
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" name="messages_time" required aria-required="true" value="<?= $lastMessages['messages_time'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-row">
                                    <!-- item inner -->
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <label class="form-label">Mesaj</label>
                                            <div class="form-line">
                                                <textarea disabled name="messages_message" id="messages_message" cols="30" rows="10" required aria-required="true" class="form-control"><?= $lastMessages['messages_message'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Buton -->
                                <a href="messages.html" class="btn btn-danger waves-effect">Mesajlara Dön</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>