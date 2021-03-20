<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Proje Ekle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Proje Ekle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/projectAdd" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Proje Resim</label>
                                    <div class="form-line">
                                        <input type="file" name="mini_work_image" required aria-required="true">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Maksimum 5MB Olmalıdır. İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Proje İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_work_title" required aria-required="true" placeholder="İsim Giriniz..">
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