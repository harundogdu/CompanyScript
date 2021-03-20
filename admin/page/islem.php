<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php
            if (isset($_GET['secim'])) {
                switch ($database->filterSyntax($_GET['secim'])):
                    case 'settingsUpdate':
                        if (isset($_POST)) {
                            extract($_POST);
                            $updateSettings = $database->setQuery("UPDATE settings SET ", "settings_base=?,settings_title=?,settings_keyw=?,settings_desc=?,settings_owner=?,settings_phone=?,settings_address=?,settings_mail=?,settings_work=?,settings_facebook=?,settings_twitter=?,settings_google=?,settings_instagram=?,settings_pinterest=?,settings_linkedin=?,settings_title_offer=?,settings_desc_offer=?,settings_title_team=?,settings_desc_team=?,settings_title_achiv=?,settings_desc_achiv=?,settings_title_comments=?,settings_desc_comments=?,settings_title_work=?,settings_desc_work=?,settings_title_partner=?,settings_desc_partner=?,settings_info_contact=?,settings_map_contact=?,settings_title_services=?,settings_desc_services=? WHERE settings_id=?", array($settings_base, $settings_title, $settings_keyw, $settings_desc, $settings_owner, $settings_phone, $settings_address, $settings_mail, $settings_work, $settings_facebook, $settings_twitter, $settings_google, $settings_instagram, $settings_pinterest, $settings_linkedin, $settings_title_offer, $settings_desc_offer, $settings_title_team, $settings_desc_team, $settings_title_achiv, $settings_desc_achiv, $settings_title_comments, $settings_desc_comments, $settings_title_work, $settings_desc_work, $settings_title_partner, $settings_desc_partner, $settings_info_contact, $database->filterSyntax($settings_map_contact, true), $settings_title_services, $settings_desc_services, $settings_id));
                            if ($updateSettings) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../settings.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız </div>';
                                header("Refresh:2,url=../../settings.html");
                            endif;
                        }
                        break;
                    case 'aboutUpdate':
                        if (isset($_POST)) {
                            extract($_POST);
                            $updateAbout = $database->setQuery("UPDATE mini_about SET ", "mini_about_title=?,mini_about_smallTitle=?,mini_about_desc=?,mini_about_button=?,mini_about_video=? WHERE mini_about_id=?", array($mini_about_title, $mini_about_smallTitle, $mini_about_desc, $mini_about_button, $mini_about_video, $mini_about_id));
                            if ($updateAbout) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../about.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız </div>';
                                header("Refresh:2,url=../../about.html");
                            endif;
                        }
                        break;
                    case 'achievmentsUpdate':
                        if (isset($_POST)) {
                            extract($_POST);
                            $updateAchievments = $database->setQuery("UPDATE mini_achievments SET ", "mini_achievments_icon=?,mini_achievments_name=?,mini_achievments_num=?  WHERE mini_achievments_id =?", array($mini_achievments_icon, $mini_achievments_name, $mini_achievments_num, $mini_achievments_id));
                            if ($updateAchievments) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../achievments.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız </div>';
                                header("Refresh:2,url=../../achievments.html");
                            endif;
                        }
                        break;
                    case 'servicesUpdate':
                        if (isset($_POST)) {
                            extract($_POST);
                            $servicesUpdate = $database->setQuery("UPDATE mini_services SET ", "mini_services_icon=?,mini_services_title=?,mini_services_desc=?  WHERE mini_services_id  =?", array($mini_services_icon, $mini_services_title, $mini_services_desc, $mini_services_id));
                            if ($servicesUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../services.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız </div>';
                                header("Refresh:2,url=../../services.html");
                            endif;
                        }
                        break;
                    case 'servicesAdd':
                        if (isset($_POST)) {
                            extract($_POST);
                            $servicesAdd = $database->setQuery("INSERT INTO mini_services ", "(mini_services_icon,mini_services_title,mini_services_desc) VALUES (?,?,?)", array($mini_services_icon, $mini_services_title, $mini_services_desc));
                            if ($servicesAdd) :
                                echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                                header("Refresh:2,url=../../services.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                                header("Refresh:2,url=../../services.html");
                            endif;
                        }
                        break;
                    case 'sliderAdd':
                        $filename = $database->uploadImage("slider_image", "slider", "slider");
                        extract($_POST);
                        $servicesAdd = $database->setQuery("INSERT INTO slider ", "(slider_image,slider_title,slider_smallTitle,slider_desc,slider_button) VALUES (?,?,?,?,?)", array(
                            $filename,
                            $database->filterSyntax($slider_title, true), $database->filterSyntax($slider_smallTitle, true), $database->filterSyntax($slider_desc, true),
                            $database->filterSyntax($slider_button, true)
                        ));
                        if ($servicesAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../slider.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../slider.html");
                        endif;
                        break;
                    case 'sliderUpdate':
                        if (isset($_FILES['slider_image']) && $_FILES['slider_image']['size'] > 0) :
                            $slider_image_old = $database->filterSyntax($_POST['slider_image_old']);
                            if (file_exists("../images/slider/" . $slider_image_old)) :
                                unlink("../images/slider/" . $slider_image_old);
                            endif;
                            $filename = $database->uploadImage("slider_image", "slider", "slider");
                            extract($_POST);
                            $servicesAdd = $database->setQuery("UPDATE slider ", " SET slider_image=?,slider_title=?,slider_smallTitle=?,slider_desc=?,slider_button=? WHERE slider_id=?", array(
                                $filename,
                                $database->filterSyntax($slider_title, true), $database->filterSyntax($slider_smallTitle, true), $database->filterSyntax($slider_desc, true),
                                $database->filterSyntax($slider_button, true),
                                $slider_id
                            ));
                            if ($servicesAdd && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../slider.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../slider.html");
                            endif;
                        else :
                            extract($_POST);
                            $servicesAdd = $database->setQuery("UPDATE slider SET ", "slider_title=?,slider_smallTitle=?,slider_desc=?,slider_button=? WHERE slider_id=?", array(
                                $database->filterSyntax($slider_title, true), $database->filterSyntax($slider_smallTitle, true), $database->filterSyntax($slider_desc, true),
                                $database->filterSyntax($slider_button, true),
                                $slider_id
                            ));
                            if ($servicesAdd) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı</div>';
                                header("Refresh:2,url=../../slider.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../slider.html");
                            endif;
                        endif;
                        break;
                    case 'offerAdd':
                        $filename = $database->uploadImage("mini_offer_image", "mini_offer", "offer");
                        extract($_POST);
                        $offerAdd = $database->setQuery("INSERT INTO mini_offer ", "(mini_offer_image,mini_offer_title,mini_offer_desc,mini_offer_icon) VALUES (?,?,?,?)", array(
                            $filename,
                            $database->filterSyntax($mini_offer_title, true), $database->filterSyntax($mini_offer_desc, true), $database->filterSyntax($mini_offer_icon, true)
                        ));
                        if ($offerAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../offer.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../offer.html");
                        endif;
                        break;
                    case 'offerUpdate':
                        if (isset($_FILES['mini_offer_image']) && $_FILES['mini_offer_image']['size'] > 0) :
                            $mini_offer_image_old = $database->filterSyntax($_POST['mini_offer_image_old']);
                            if (file_exists("../images/offer/" . $mini_offer_image_old)) :
                                unlink("../images/offer/" . $mini_offer_image_old);
                            endif;
                            $filename = $database->uploadImage("mini_offer_image", "mini_offer", "offer");
                            extract($_POST);
                            $offerUpdate = $database->setQuery("UPDATE mini_offer ", " SET mini_offer_image=?,mini_offer_title=?,mini_offer_desc=?,mini_offer_icon=? WHERE mini_offer_id =?", array(
                                $filename,
                                $database->filterSyntax($mini_offer_title, true), $database->filterSyntax($mini_offer_desc, true), $database->filterSyntax($mini_offer_icon, true),
                                $mini_offer_id
                            ));
                            if ($offerUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../offer.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../offer.html");
                            endif;
                        else :
                            extract($_POST);
                            $offerUpdate = $database->setQuery("UPDATE mini_offer SET ", "mini_offer_title=?,mini_offer_desc=?,mini_offer_icon=? WHERE mini_offer_id=?", array(
                                $database->filterSyntax($mini_offer_title, true), $database->filterSyntax($mini_offer_desc, true), $database->filterSyntax($mini_offer_icon, true),
                                $mini_offer_id
                            ));
                            if ($offerUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı</div>';
                                header("Refresh:2,url=../../offer.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../offer.html");
                            endif;
                        endif;
                        break;
                    case 'teamAdd':
                        $filename = $database->uploadImage("mini_team_img", "mini_team", "team");
                        extract($_POST);
                        $teamAdd = $database->setQuery("INSERT INTO mini_team ", "(mini_team_img,mini_team_name,mini_team_job,mini_team_facebook,mini_team_twitter,mini_team_linkedin) VALUES (?,?,?,?,?,?)", array(
                            $filename,
                            $database->filterSyntax($mini_team_name, true), $database->filterSyntax($mini_team_job, true), $database->filterSyntax($mini_team_facebook, true), $database->filterSyntax($mini_team_twitter, true), $database->filterSyntax($mini_team_linkedin, true)
                        ));
                        if ($teamAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../team.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../team.html");
                        endif;
                        break;
                    case 'teamUpdate':
                        if (isset($_FILES['mini_team_img']) && $_FILES['mini_team_img']['size'] > 0) :
                            $mini_team_img_old = $database->filterSyntax($_POST['mini_team_img_old']);
                            if (file_exists("../images/team/" . $mini_team_img_old)) :
                                unlink("../images/team/" . $mini_team_img_old);
                            endif;
                            $filename = $database->uploadImage("mini_team_img", "mini_team", "team");
                            extract($_POST);
                            $teamUpdate = $database->setQuery("UPDATE mini_team ", " SET mini_team_img=?,mini_team_name=?,mini_team_job=?,mini_team_facebook=?,mini_team_twitter=?,mini_team_linkedin=? WHERE mini_team_id  =?", array(
                                $filename,
                                $database->filterSyntax($mini_team_name, true), $database->filterSyntax($mini_team_job, true), $database->filterSyntax($mini_team_facebook, true), $database->filterSyntax($mini_team_twitter, true), $database->filterSyntax($mini_team_linkedin, true),
                                $mini_team_id
                            ));
                            if ($teamUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../team.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../team.html");
                            endif;
                        else :
                            extract($_POST);
                            $teamUpdate = $database->setQuery("UPDATE mini_team ", " SET mini_team_name=?,mini_team_job=?,mini_team_facebook=?,mini_team_twitter=?,mini_team_linkedin=? WHERE mini_team_id  =?", array(
                                $database->filterSyntax($mini_team_name, true), $database->filterSyntax($mini_team_job, true), $database->filterSyntax($mini_team_facebook, true), $database->filterSyntax($mini_team_twitter, true), $database->filterSyntax($mini_team_linkedin, true),
                                $mini_team_id
                            ));
                            if ($teamUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı</div>';
                                header("Refresh:2,url=../../team.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../team.html");
                            endif;
                        endif;
                        break;
                    case 'commentAdd':
                        $filename = $database->uploadImage("mini_comments_image", "mini_comments", "comments");
                        extract($_POST);
                        $commentAdd = $database->setQuery("INSERT INTO mini_comments ", "(mini_comments_image,mini_comments_name,mini_comments_job,mini_comments_desc) VALUES (?,?,?,?)", array(
                            $filename,
                            $database->filterSyntax($mini_comments_name, true), $database->filterSyntax($mini_comments_job, true), $database->filterSyntax($mini_comments_desc, true)
                        ));
                        if ($commentAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../comment.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../comment.html");
                        endif;
                        break;
                    case 'commentUpdate':
                        if (isset($_FILES['mini_comments_image']) && $_FILES['mini_comments_image']['size'] > 0) :
                            $mini_comments_image_old = $database->filterSyntax($_POST['mini_comments_image_old']);
                            if (file_exists("../images/comments/" . $mini_comments_image_old)) :
                                unlink("../images/comments/" . $mini_comments_image_old);
                            endif;
                            $filename = $database->uploadImage("mini_comments_image", "mini_comments", "comments");
                            extract($_POST);
                            $commentUpdate = $database->setQuery("UPDATE mini_comments ", " SET mini_comments_image=?,mini_comments_name=?,mini_comments_job=?,mini_comments_desc=? WHERE mini_comments_id=?", array(
                                $filename,
                                $database->filterSyntax($mini_comments_name, true), $database->filterSyntax($mini_comments_job, true), $database->filterSyntax($mini_comments_desc, true), $database->filterSyntax($mini_comments_id, true)
                            ));
                            if ($commentUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../comment.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../comment.html");
                            endif;
                        else :
                            extract($_POST);
                            $commentUpdate = $database->setQuery("UPDATE mini_comments ", " SET mini_comments_name=?,mini_comments_job=?,mini_comments_desc=? WHERE mini_comments_id=?", array(
                                $database->filterSyntax($mini_comments_name, true), $database->filterSyntax($mini_comments_job, true), $database->filterSyntax($mini_comments_desc, true), $database->filterSyntax($mini_comments_id, true)
                            ));
                            if ($commentUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../comment.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../comment.html");
                            endif;
                        endif;
                        break;
                    case 'infoUpdate':
                        if (isset($_POST)) {
                            extract($_POST);
                            $infoUpdate = $database->setQuery("UPDATE mini_info_area SET ", "mini_info_area_dark=?,mini_info_area_thin=?,mini_info_area_button=?,mini_info_area_link=? WHERE mini_info_area_id=?", array($mini_info_area_dark, $mini_info_area_thin, $mini_info_area_button, $mini_info_area_link, $mini_info_area_id));
                            if ($infoUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../info-area.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız </div>';
                                header("Refresh:2,url=../../info-area.html");
                            endif;
                        }
                        break;
                    case 'partnerAdd':
                        $filename = $database->uploadImage("mini_partner_image", "mini_partner", "partner");
                        extract($_POST);
                        $partnerAdd = $database->setQuery("INSERT INTO mini_partner ", "(mini_partner_image,mini_partner_name) VALUES (?,?)", array(
                            $filename,
                            $database->filterSyntax($mini_partner_name, true)
                        ));
                        if ($partnerAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../partner.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../partner.html");
                        endif;
                        break;
                    case 'partnerUpdate':
                        if (isset($_FILES['mini_partner_image']) && $_FILES['mini_partner_image']['size'] > 0) :
                            $mini_partner_image_old = $database->filterSyntax($_POST['mini_partner_image_old']);
                            if (file_exists("../images/partner/" . $mini_partner_image_old)) :
                                unlink("../images/partner/" . $mini_partner_image_old);
                            endif;
                            $filename = $database->uploadImage("mini_partner_image", "mini_partner", "partner");
                            extract($_POST);
                            $partnerUpdate = $database->setQuery("UPDATE mini_partner ", " SET mini_partner_image=?,mini_partner_name=? WHERE mini_partner_id=?", array(
                                $filename,
                                $database->filterSyntax($mini_partner_name, true),
                                $mini_partner_id
                            ));
                            if ($partnerUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../partner.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../partner.html");
                            endif;
                        else :
                            extract($_POST);
                            $partnerUpdate = $database->setQuery("UPDATE mini_partner ", " SET mini_partner_name=? WHERE mini_partner_id  =?", array(
                                $database->filterSyntax($mini_partner_name, true),
                                $mini_partner_id
                            ));
                            if ($partnerUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı</div>';
                                header("Refresh:2,url=../../partner.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../partner.html");
                            endif;
                        endif;
                        break;
                    case 'projectAdd':
                        $filename = $database->uploadImage("mini_work_image", "mini_work", "works");
                        extract($_POST);
                        $projectAdd = $database->setQuery("INSERT INTO mini_work ", "(mini_work_image,mini_work_title) VALUES (?,?)", array(
                            $filename,
                            $database->filterSyntax($mini_work_title, true)
                        ));
                        if ($projectAdd && $filename != false) :

                            echo '<div class="alert alert-success text-center">Ekleme Başarılı </div>';
                            header("Refresh:2,url=../../works.html");
                        else :
                            echo '<div class="alert alert-danger text-center">Ekleme Başarısız </div>';
                            header("Refresh:2,url=../../works.html");
                        endif;
                        break;
                    case 'projectUpdate':
                        if (isset($_FILES['mini_work_image']) && $_FILES['mini_work_image']['size'] > 0) :
                            $mini_work_image_old = $database->filterSyntax($_POST['mini_work_image_old']);
                            if (file_exists("../images/works/" . $mini_work_image_old)) :
                                unlink("../images/works/" . $mini_work_image_old);
                            endif;
                            $filename = $database->uploadImage("mini_work_image", "mini_work", "works");
                            extract($_POST);
                            $projectUpdate = $database->setQuery("UPDATE mini_work ", " SET mini_work_image=?,mini_work_title=? WHERE mini_work_id=?", array(
                                $filename,
                                $database->filterSyntax($mini_work_title, true),
                                $mini_work_id
                            ));
                            if ($projectUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../works.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../works.html");
                            endif;
                        else :
                            extract($_POST);
                            $projectUpdate = $database->setQuery("UPDATE mini_work ", " SET mini_work_title=? WHERE mini_work_id  =?", array(
                                $database->filterSyntax($mini_work_title, true),
                                $mini_work_id
                            ));
                            if ($projectUpdate) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı</div>';
                                header("Refresh:2,url=../../works.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../works.html");
                            endif;
                        endif;
                        break;
                    case 'logoUpdate':
                        if (isset($_FILES['logo_image']) && $_FILES['logo_image']['size'] > 0) :
                            $logo_image_old = $database->filterSyntax($_POST['logo_image_old']);
                            if (file_exists("../images/logo/" . $logo_image_old)) :
                                unlink("../images/logo/" . $logo_image_old);
                            endif;
                            $filename = $database->uploadImage("logo_image", "logo", "logo");
                            extract($_POST);
                            $projectUpdate = $database->setQuery("UPDATE logo ", " SET logo_image=? WHERE logo_id=?", array(
                                $filename,
                                $logo_id
                            ));
                            if ($projectUpdate && $filename != false) :
                                echo '<div class="alert alert-success text-center">Güncelleme Başarılı </div>';
                                header("Refresh:2,url=../../logo.html");
                            else :
                                echo '<div class="alert alert-danger text-center">Güncelleme Başarısız</div>';
                                header("Refresh:2,url=../../logo.html");
                            endif;
                        endif;
                        break;
                endswitch;
            }
            ?>
        </div>
    </div>
</section>