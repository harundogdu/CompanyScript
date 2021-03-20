<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Hizmet Ekle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Hizmet Ekle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/servicesAdd" method="POST">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Hizmet İkon</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_services_icon" required aria-required="true" placeholder="İkon Ekleyin">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Font awesome dan 'fab fa-500px' şeklinde ekleyiniz.</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Hizmet Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_services_title" required aria-required="true" placeholder="Başlık Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Hizmet Açıklaması</label>
                                    <div class="form-line">
                                        <textarea name="mini_services_desc" id="mini_services_desc" cols="30" rows="10" required aria-required="true" placeholder="Açıklama Ekleyiniz.."></textarea>
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