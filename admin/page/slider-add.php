<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Slider Ekle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Slider Ekle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/sliderAdd" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Resim</label>
                                    <div class="form-line">
                                        <input type="file" name="slider_image" required aria-required="true">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Maksimum 5MB Olmalıdır. İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>
                                </div>
                                   <!-- item -->
                                   <div class="form-group form-float">
                                    <label class="form-label">Slider Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_title" required aria-required="true" placeholder="Başlık Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Alt Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_smallTitle" required aria-required="true" placeholder="Başlık Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Buton Yazısı</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_button" required aria-required="true" placeholder="Başlık Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->                              
                                <div class="form-group form-float">
                                    <label class="form-label">Slider Açıklaması</label>
                                    <div class="form-line">
                                        <textarea name="slider_desc" id="slider_desc" cols="30" rows="10" required aria-required="true" placeholder="Açıklama Ekleyiniz.."></textarea>
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