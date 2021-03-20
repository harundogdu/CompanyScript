<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastComment = $database->getData("mini_comments", 0, " WHERE mini_comments_id= $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Yorum Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Yorum Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/commentUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Yorum Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/comments/<?= $lastComment['mini_comments_image'] ?>" alt="Slider Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="mini_comments_image">
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
                                    <label class="form-label">Yorum İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_comments_name" required aria-required="true" value="<?= $lastComment['mini_comments_name'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum Görev</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_comments_job" required aria-required="true" value="<?= $lastComment['mini_comments_job'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum Açıklama</label>
                                    <div class="form-line">
                                        <textarea name="mini_comments_desc" id="mini_comments_desc" cols="30" rows="10" class="form-control" required aria-required="true"><?= $lastComment['mini_comments_desc'] ?></textarea>
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_comments_id" value="<?= $lastComment['mini_comments_id'] ?>">
                                <input type="hidden" name="mini_comments_image_old" value="<?= $lastComment['mini_comments_image'] ?>">
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