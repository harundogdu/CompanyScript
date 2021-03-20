<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Team Ekle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Team Ekle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/teamAdd" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Resim</label>
                                    <div class="form-line">
                                        <input type="file" name="mini_team_img" required aria-required="true">
                                        <div class="help-info">
                                            <span class="text-danger ml-2">Maksimum 5MB Olmalıdır. İzin Verilen Uzantılar "jpg,png"</span>
                                        </div>
                                    </div>
                                </div>
                                   <!-- item -->
                                   <div class="form-group form-float">
                                    <label class="form-label">Team İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_name" required aria-required="true" placeholder="İsim Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Görev</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_job" required aria-required="true" placeholder="Görev Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Facebook</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_facebook" required aria-required="true" placeholder="Facebook Adresi Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Twitter</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_twitter" required aria-required="true" placeholder="Twitter Adresi Giriniz..">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Linkedin</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_linkedin" required aria-required="true" placeholder="Linkedin Adresi Giriniz..">
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