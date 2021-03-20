<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Yorum Ekle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Yorum Ekle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/commentAdd" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum Resim</label>
                                    <div class="form-line">
                                        <input type="file" name="mini_comments_image" required aria-required="true">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Maksimum 5MB Olmalıdır. İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_comments_name" required aria-required="true" placeholder="İsim Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum Görev</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_comments_job" required aria-required="true" placeholder="Görev Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Yorum Açıklama</label>
                                    <div class="form-line">
                                        <textarea name="mini_comments_desc" id="mini_comments_desc" cols="30" rows="10" class="form-control" required aria-required="true"></textarea>                                        
                                    </div>
                                </div>
                                <!-- end item -->
                                <button class="btn btn-danger waves-effect" type="submit">Ekle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>