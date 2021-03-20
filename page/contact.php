   <?php $lastContact = $database->getData("settings"); ?>
   <!-- Banner area -->
   <section class="banner_area" data-stellar-background-ratio="0.5">
       <h2>İletişim</h2>
       <ol class="breadcrumb">
           <li><a href="<?= SITE ?>">Anasayfa</a></li>
           <li><a href="#" class="active">İletişim</a></li>
       </ol>
   </section>
   <!-- End Banner area -->
   <!-- Map -->
   <div class="contact_map">      
   <iframe src="<?= $lastContact['settings_map_contact'] ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
   </div>
   <!-- End Map -->
   <!-- All contact Info -->
   <section class="all_contact_info">
       <div class="container">
           <div class="row contact_row">
               <div class="col-sm-6 contact_info">
                   <h2>İletişim Bilgileri</h2>
                   <?= $lastContact['settings_info_contact'] ?>
                   <div class="location">
                       <div class="location_laft">
                           <p>Lokasyon</p>
                           <p>Telefon</p>
                           <p>Email</p>
                       </div>
                       <div class="address">
                           <p>
                               <a><?= $lastContact['settings_address'] ?></a>
                           </p>
                           <p>
                               <a href="tel:<?= $lastContact['settings_phone'] ?>">
                                   <?= $lastContact['settings_phone'] ?></a>
                           </p>
                           <p>
                               <a href="mailto:<?= $lastContact['settings_mail'] ?>">
                                   <?= $lastContact['settings_mail'] ?></a>
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 contact_info send_message">
                   <h2>Bizimle İletişime Geçin !</h2>
                   <form action="" id="contactForm" method="POST" class="form-inline contact_box">
                       <input type="text" class="form-control input_box" placeholder="Adınız.." name="messages_name">
                       <input type="text" class="form-control input_box" placeholder="E-Mailiniz.." name="messages_mail">
                       <input type="text" class="form-control input_box" placeholder="Konu" name="messages_subject">
                       <textarea class="form-control input_box" placeholder="Mesajınız.." name="messages_message"></textarea>
                       <button type="button" class="btn btn-default" id="btnSave" name="btnSave">Mesaj Gönder</button>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!-- End All contact Info -->