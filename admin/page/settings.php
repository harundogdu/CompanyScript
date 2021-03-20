<?php $lastSettings = $database->getData("settings"); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 20px !important;">Genel Ayarlar</h2>
                </div>
            </div>
            <div class="row clearfix mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Genel Site Ayarları</h2>
                        </div>
                        <div class="body">
                            <form action="page/islem/settingsUpdate" method="POST">
                                <!-- index.php?page=islem&secim=settingsUpdate -->
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Base URL</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_base" required aria-required="true" value="<?= $lastSettings['settings_base'] ?>">

                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Title</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title" required aria-required="true" value="<?= $lastSettings['settings_title'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Anahtar Kelimeleri</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_keyw" required aria-required="true" value="<?= $lastSettings['settings_keyw'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Açıklaması</label>
                                    <div class="form-line">
                                        <textarea name="settings_desc" id="settings_desc" cols="30" class="form-control" rows="10" required><?= $lastSettings['settings_desc'] ?></textarea>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Kurucu</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_owner" required aria-required="true" value="<?= $lastSettings['settings_owner'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Numarası</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_phone" required aria-required="true" value="<?= $lastSettings['settings_phone'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_address" required aria-required="true" value="<?= $lastSettings['settings_address'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Mail Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_mail" required aria-required="true" value="<?= $lastSettings['settings_mail'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Çalışma Saatleri</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_work" required aria-required="true" value="<?= $lastSettings['settings_work'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Facebook Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_facebook" required aria-required="true" value="<?= $lastSettings['settings_facebook'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Twitter Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_twitter" required aria-required="true" value="<?= $lastSettings['settings_twitter'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Google + Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_google" required aria-required="true" value="<?= $lastSettings['settings_google'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site İnstagram Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_instagram" required aria-required="true" value="<?= $lastSettings['settings_instagram'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Pinterest Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_pinterest" required aria-required="true" value="<?= $lastSettings['settings_pinterest'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Linkedin Adresi</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_linkedin" required aria-required="true" value="<?= $lastSettings['settings_linkedin'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ne Yapıyoruz Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_offer" required aria-required="true" value="<?= $lastSettings['settings_title_offer'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ne Yapıyoruz İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_offer" required aria-required="true" value="<?= $lastSettings['settings_desc_offer'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ekip Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_team" required aria-required="true" value="<?= $lastSettings['settings_title_team'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ekip İçerik</label>
                                    <div class="form-line">
                                        <textarea name="settings_desc_team" id="settings_desc_team" cols="30" class="form-control" rows="10" required><?= $lastSettings['settings_desc_team'] ?></textarea>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Neler Yaptık Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_achiv" required aria-required="true" value="<?= $lastSettings['settings_title_achiv'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Neler Yaptık İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_achiv" required aria-required="true" value="<?= $lastSettings['settings_desc_achiv'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Yorumlar Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_comments" required aria-required="true" value="<?= $lastSettings['settings_title_comments'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Yorumlar İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_comments" required aria-required="true" value="<?= $lastSettings['settings_desc_comments'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Çalışmalar Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_work" required aria-required="true" value="<?= $lastSettings['settings_title_work'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Çalışmalar İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_work" required aria-required="true" value="<?= $lastSettings['settings_desc_work'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ortaklarımız Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_partner" required aria-required="true" value="<?= $lastSettings['settings_title_partner'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Ortaklarımız İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_partner" required aria-required="true" value="<?= $lastSettings['settings_desc_partner'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Hizmetler Başlık</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_title_services" required aria-required="true" value="<?= $lastSettings['settings_title_services'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site Hizmetler İçerik</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="settings_desc_services" required aria-required="true" value="<?= $lastSettings['settings_desc_services'] ?>">
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site İletişim İçerik</label>
                                    <div class="form-line">
                                        <textarea name="settings_info_contact" id="settings_info_contact" cols="30" class="form-control" rows="10" required><?= $lastSettings['settings_info_contact'] ?></textarea>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="form-group form-float">
                                    <label class="form-label">Site İletişim Harita</label>
                                    <div class="form-line">
                                        <textarea name="settings_map_contact" id="settings_map_contact" cols="30" class="form-control" rows="10" required><?= $lastSettings['settings_map_contact'] ?></textarea>
                                    </div>
                                </div>

                                <!-- end item -->
                                <input type="hidden" name="settings_id" value="<?= $lastSettings['settings_id'] ?>">
                                <!-- buton -->
                                <button class="btn btn-danger waves-effect" type="submit">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>