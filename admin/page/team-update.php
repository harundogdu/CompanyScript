<?php
if (isset($_GET['id'])) :
    $userId = $_GET['id'];
endif;
$lastTeam = $database->getData("mini_team", 0, " WHERE mini_team_id= $userId "); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Team Güncelle</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Team Güncelle</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/teamUpdate" method="POST" enctype="multipart/form-data">
                                <!-- item -->
                                <div class="form-group" style="margin: 10px !important;">
                                    <label class="form-label">Team Resim</label>
                                    <div class="form-line">
                                        <div class="form-group" style="display: flex;align-items: center;justify-content: space-around;">
                                            <p style="margin: 0 15px 0 0 !important;">
                                                Güncel Resim
                                                <br>
                                                <img height="52" src="<?= SITE ?>images/team/<?= $lastTeam['mini_team_img'] ?>" alt="Slider Resim">
                                            </p>
                                            <p style="margin: 0 0 0 15px !important;">
                                                Resmi Güncelle
                                                <br>
                                                <input type="file" name="mini_team_img">
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
                                    <label class="form-label">Team İsim</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_name" required aria-required="true" value="<?= $lastTeam['mini_team_name'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Görev</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_job" required aria-required="true" value="<?= $lastTeam['mini_team_job'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Facebook Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_facebook" required aria-required="true" value="<?= $lastTeam['mini_team_facebook'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Twitter Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_twitter" required aria-required="true" value="<?= $lastTeam['mini_team_twitter'] ?>">
                                    </div>
                                </div><!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Team Twitter Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mini_team_linkedin" required aria-required="true" value="<?= $lastTeam['mini_team_linkedin'] ?>">
                                    </div>
                                </div>
                                <!-- end item -->
                                <input type="hidden" name="mini_team_id" value="<?= $lastTeam['mini_team_id'] ?>">
                                <input type="hidden" name="mini_team_img_old" value="<?= $lastTeam['mini_team_img'] ?>">
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