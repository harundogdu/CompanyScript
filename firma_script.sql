-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eyl 2020, 20:17:24
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `firma_script`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `admin_password` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_image` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `logo_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_image`, `logo_name`) VALUES
(1, 'logo_5f5bb4a418362.png', 'Header Logo'),
(2, 'logo_5f5bb2f4180e3.png', 'Footer Logo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL,
  `messages_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `messages_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `messages_subject` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `messages_message` text COLLATE utf8_turkish_ci NOT NULL,
  `messages_see` int(11) NOT NULL DEFAULT 0,
  `messages_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`messages_id`, `messages_name`, `messages_mail`, `messages_subject`, `messages_message`, `messages_see`, `messages_time`) VALUES
(1, 'Harun', 'harundogdu06@gmail.com', 'Selamlar', 'Deneme mesajı', 0, '2020-09-07 22:31:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_about`
--

CREATE TABLE `mini_about` (
  `mini_about_id` int(11) NOT NULL,
  `mini_about_title` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `mini_about_smallTitle` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `mini_about_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `mini_about_button` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mini_about_video` varchar(75) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_about`
--

INSERT INTO `mini_about` (`mini_about_id`, `mini_about_title`, `mini_about_smallTitle`, `mini_about_desc`, `mini_about_button`, `mini_about_video`) VALUES
(1, 'Hakkımızda', 'Biz Kimiz ?', '<p><strong>23 Yıllık tecrübemizle siz değerli müşterilerimize hizmet veriyoruz.Müşterilerimize tutkuyla en iyi hizmetleri vermek ve daima firmamızı bir adım ileriye taşımak ve hedeflerimizi en üst seviyeye çıkartmak için biz ve çalışanlarımız hizmet vermeye devam edeceğiz.Firmamızın kazancını düşündüğümüz kadar müşterilerimize kazandırmayı , kaliteli hizmet vermeye devam edeceğiz.</strong></p>\r\n', 'İletişime Geç', 'dhYOPzcsbGM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_achievments`
--

CREATE TABLE `mini_achievments` (
  `mini_achievments_id` int(11) NOT NULL,
  `mini_achievments_icon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_achievments_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_achievments_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_achievments`
--

INSERT INTO `mini_achievments` (`mini_achievments_id`, `mini_achievments_icon`, `mini_achievments_name`, `mini_achievments_num`) VALUES
(1, 'fab fa-connectdevelop', 'Tamamlanmış Proje', 1200),
(2, 'fa fa-home', ' EV TADİLATLARI', 450),
(3, 'fa fa-child', 'Çalışan İşçi', 1800),
(4, 'fa fa-trophy', 'Kazandığımız Ödül', 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_comments`
--

CREATE TABLE `mini_comments` (
  `mini_comments_id` int(11) NOT NULL,
  `mini_comments_image` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_comments_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_comments_job` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_comments_desc` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_comments`
--

INSERT INTO `mini_comments` (`mini_comments_id`, `mini_comments_image`, `mini_comments_name`, `mini_comments_job`, `mini_comments_desc`) VALUES
(1, 'mini_comments_5f5b8918ef57d.jpg', 'Harun Doğdu', 'Mühendis', 'Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.'),
(2, 'mini_comments_5f5b8921a1bb9.jpg', 'Ahmet Doğdu', 'Mühendis', 'Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.'),
(3, 'mini_comments_5f5b89343fcd4.jpg', 'Orhan Doğdu', 'Mühendis', 'Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_info_area`
--

CREATE TABLE `mini_info_area` (
  `mini_info_area_id` int(11) NOT NULL,
  `mini_info_area_dark` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `mini_info_area_thin` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `mini_info_area_button` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_info_area_link` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_info_area`
--

INSERT INTO `mini_info_area` (`mini_info_area_id`, `mini_info_area_dark`, `mini_info_area_thin`, `mini_info_area_button`, `mini_info_area_link`) VALUES
(1, 'İnşaa işi mi var ?', 'İşi yaptıracaksınız ama güvenebilecek birilerine mi ihtiyacınız var , Uzman bir kadro mu arıyorsunuz  , O halde ne bekliyorsunuz ?', 'İletişime Geç', 'contact.html');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_offer`
--

CREATE TABLE `mini_offer` (
  `mini_offer_id` int(11) NOT NULL,
  `mini_offer_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_offer_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `mini_offer_image` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_offer_icon` varchar(75) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_offer`
--

INSERT INTO `mini_offer` (`mini_offer_id`, `mini_offer_title`, `mini_offer_desc`, `mini_offer_image`, `mini_offer_icon`) VALUES
(1, 'Bina İnşaatı', 'Binanızın İnşaatında Kusursuz Dizayn ve G&ouml;rsel Tasarım&nbsp;Kullanıyoruz.', 'mini_offer_5f5b8654353cd.jpg', 'fa fa-home'),
(2, 'Proje Planlama', 'Projeye Başlamadan &Ouml;nce Projenin Her Detayını Sizinle Paylaşıyoruz.', 'mini_offer_5f5b866d0312f.jpg', 'fas fa-keyboard'),
(3, 'Ev Yenileme', 'Evinizi T&uuml;m Hasarıyla ve T&uuml;m Eksiklikleri ile Alıp&nbsp;G&uuml;ncel Tekniklerle&nbsp;Restore Ediyoruz.', 'mini_offer_5f5b8678c623e.jpg', 'fa fa-gavel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_partner`
--

CREATE TABLE `mini_partner` (
  `mini_partner_id` int(11) NOT NULL,
  `mini_partner_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_partner_image` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_partner`
--

INSERT INTO `mini_partner` (`mini_partner_id`, `mini_partner_name`, `mini_partner_image`) VALUES
(1, 'Logo 1', 'mini_partner_5f5b835506962.png'),
(2, 'Logo 2', 'mini_partner_5f5b835fe8a56.png'),
(3, 'Logo 3', 'mini_partner_5f5b836a7bee3.png'),
(4, 'Logo 4', 'mini_partner_5f5b8375eea5e.png'),
(5, 'Logo 5', 'mini_partner_5f5b8381a3ad9.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_services`
--

CREATE TABLE `mini_services` (
  `mini_services_id` int(11) NOT NULL,
  `mini_services_icon` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `mini_services_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_services_desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_services`
--

INSERT INTO `mini_services` (`mini_services_id`, `mini_services_icon`, `mini_services_title`, `mini_services_desc`) VALUES
(1, 'fa fa-home', 'Profesyonel Ekip', '<p>Alanında Uzman Başarılı ve Dinamik Kadromuz Var.</p>\r\n'),
(2, 'fa fa-building', 'Kaliteye Önem', '<p>B&uuml;t&uuml;n Hizmetlerimizde Son Teknoloji&nbsp; ve &Uuml;st Seviye Kalite Kullanıyoruz.</p>\r\n'),
(3, 'fas fa-clock', 'Zamanlama', '<p>Her Zaman Size S&ouml;z Verdiğimiz Gibi Zamanında Teslim Ediyoruz.</p>\r\n'),
(4, 'fa fa-thumbs-up', 'İş Güvenliği', '<p>İş ve İş&ccedil;ilerimizin G&uuml;venliği İ&ccedil;in Her Şeyi D&uuml;ş&uuml;nd&uuml;k.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_team`
--

CREATE TABLE `mini_team` (
  `mini_team_id` int(11) NOT NULL,
  `mini_team_img` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_team_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_team_job` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_team_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_team_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_team_linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_team`
--

INSERT INTO `mini_team` (`mini_team_id`, `mini_team_img`, `mini_team_name`, `mini_team_job`, `mini_team_facebook`, `mini_team_twitter`, `mini_team_linkedin`) VALUES
(1, 'mini_team_5f5b8843d0271.jpg', 'Harun Doğdu', 'Yazılım Mühendisi', '#', '#', '#'),
(2, 'mini_team_5f5b884cd5a60.jpg', 'Ahmet Doğdu', 'CTO', '#1', '#1', '#1'),
(3, 'mini_team_5f5b8855bec6b.jpg', 'Seyit Doğdu', 'CEO - FOUNDER', '#', '#', '#'),
(4, 'mini_team_5f5b8860d3029.jpg', 'Orhan Doğdu', 'Kıdemli Mühendis', '#', '#', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini_work`
--

CREATE TABLE `mini_work` (
  `mini_work_id` int(11) NOT NULL,
  `mini_work_image` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mini_work_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini_work`
--

INSERT INTO `mini_work` (`mini_work_id`, `mini_work_image`, `mini_work_title`) VALUES
(1, 'mini_work_5f5ba05042c78.jpg', 'Proje 1'),
(2, 'mini_work_5f5ba05d6019c.jpg', 'Proje 2'),
(3, 'mini_work_5f5ba069298f6.jpg', 'Proje 3'),
(4, 'mini_work_5f5ba074aa22d.jpg', 'Proje 4'),
(5, 'mini_work_5f5ba081bf42e.jpg', 'Proje 5'),
(6, 'mini_work_5f5ba08eb2690.jpg', 'Proje 6'),
(7, 'mini_work_5f5ba099d6aee.jpg', 'Proje 7'),
(8, 'mini_work_5f5ba0a584fc1.jpg', 'Proje 8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_base` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_keyw` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_owner` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_phone` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_address` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `settings_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_work` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `settings_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_pinterest` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_offer` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_offer` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_team` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_team` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_achiv` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_achiv` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_comments` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_comments` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_work` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_work` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_partner` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_partner` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_info_contact` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_map_contact` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_title_services` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc_services` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_base`, `settings_title`, `settings_keyw`, `settings_desc`, `settings_owner`, `settings_phone`, `settings_address`, `settings_mail`, `settings_work`, `settings_facebook`, `settings_twitter`, `settings_google`, `settings_instagram`, `settings_pinterest`, `settings_linkedin`, `settings_title_offer`, `settings_desc_offer`, `settings_title_team`, `settings_desc_team`, `settings_title_achiv`, `settings_desc_achiv`, `settings_title_comments`, `settings_desc_comments`, `settings_title_work`, `settings_desc_work`, `settings_title_partner`, `settings_desc_partner`, `settings_info_contact`, `settings_map_contact`, `settings_title_services`, `settings_desc_services`) VALUES
(1, 'http://localhost/FirmaScript/', 'Firma Script', 'firma script , harun dogdu', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır.</p>\r\n', 'Harun Doğdu', '+1 234 456 78 90', 'Uzay Mahallesi 256.Cadde 155/10 Altındağ / Ankara', 'harundogdu06@gmail.com', 'Pazartesi - Cuma 10:00 - 17:00', '#1', '#1', '#1', '#1', '#1', '#1', 'Ne Yapıyoruz ?', 'Sizin için Özenle Neler Yaptığımızı İnceleyin', 'Uzman Kadromuz', '<p>M&uuml;şterilerimize G&uuml;ven Veren İşinde Uzman Kadromuz.</p>\r\n', 'Neler Yaptık ?', 'Şuana Kadar Neler Yaptığımızın Kısa Bir Özeti..', 'Müşteri Yorumları', 'Değerli Müşterilerimizin Yorumları', 'Çalışmalarımız', 'Yaptığımız Çalışmalara Yakından Bakın ', 'İş Ortaklarımız', 'Beraber Çalışmaktan Gurur Duyduğumuz İş Ortaklarımızı İnceleyin', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391771.367609911!2d32.48257982641939!3d39.90303941891153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara!5e0!3m2!1str!2str!4v1599841853249!5m2!1str!2str', 'Hizmetler', 'Sunduğumuz Hizmetlerden Bazıları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slider_title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_smallTitle` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `slider_button` varchar(75) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_title`, `slider_smallTitle`, `slider_desc`, `slider_button`) VALUES
(1, 'slider_5f5b85a52de37.jpg', 'SİTEMİZE HOŞGELDİNİZ', 'Firma Scripti - Harun Doğdu', 'Bu Script Harun Doğdu Tarafından Geliştirmiştir.', 'Daha Fazla'),
(2, 'slider_5f5b85af079b4.jpg', 'SİTEMİZE HOŞGELDİNİZ', 'Firma Scripti - Harun Doğdu', 'Bu Script Harun Doğdu Tarafından Geliştirmiştir.', 'Daha Fazla');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Tablo için indeksler `mini_about`
--
ALTER TABLE `mini_about`
  ADD PRIMARY KEY (`mini_about_id`);

--
-- Tablo için indeksler `mini_achievments`
--
ALTER TABLE `mini_achievments`
  ADD PRIMARY KEY (`mini_achievments_id`);

--
-- Tablo için indeksler `mini_comments`
--
ALTER TABLE `mini_comments`
  ADD PRIMARY KEY (`mini_comments_id`);

--
-- Tablo için indeksler `mini_info_area`
--
ALTER TABLE `mini_info_area`
  ADD PRIMARY KEY (`mini_info_area_id`);

--
-- Tablo için indeksler `mini_offer`
--
ALTER TABLE `mini_offer`
  ADD PRIMARY KEY (`mini_offer_id`);

--
-- Tablo için indeksler `mini_partner`
--
ALTER TABLE `mini_partner`
  ADD PRIMARY KEY (`mini_partner_id`);

--
-- Tablo için indeksler `mini_services`
--
ALTER TABLE `mini_services`
  ADD PRIMARY KEY (`mini_services_id`);

--
-- Tablo için indeksler `mini_team`
--
ALTER TABLE `mini_team`
  ADD PRIMARY KEY (`mini_team_id`);

--
-- Tablo için indeksler `mini_work`
--
ALTER TABLE `mini_work`
  ADD PRIMARY KEY (`mini_work_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `mini_about`
--
ALTER TABLE `mini_about`
  MODIFY `mini_about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mini_achievments`
--
ALTER TABLE `mini_achievments`
  MODIFY `mini_achievments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `mini_comments`
--
ALTER TABLE `mini_comments`
  MODIFY `mini_comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `mini_info_area`
--
ALTER TABLE `mini_info_area`
  MODIFY `mini_info_area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mini_offer`
--
ALTER TABLE `mini_offer`
  MODIFY `mini_offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `mini_partner`
--
ALTER TABLE `mini_partner`
  MODIFY `mini_partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `mini_services`
--
ALTER TABLE `mini_services`
  MODIFY `mini_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `mini_team`
--
ALTER TABLE `mini_team`
  MODIFY `mini_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `mini_work`
--
ALTER TABLE `mini_work`
  MODIFY `mini_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
