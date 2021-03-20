<?php
@session_start();


if (!isset($_SESSION['oturum'])) :
    header("Location:login.php");
endif;

/* Config */
require_once '../config.php';

/*  header Alanı */
require_once 'include/header.php';
/* Left Menü ALanı */
require_once 'include/left-menu.php';

/* Diğer Sayfalara Bağlantı */
  
if ($_GET && !empty($_GET['page'])) {
    $sayfa = $_GET["page"] . ".php"; //hizmetler.php
    if (file_exists(PAGE . $sayfa)) {
        include_once(PAGE . $sayfa);
    } else {
        include_once "include/home.php";
    }
} else {
    include_once "include/home.php";
}

/* Footer Kısmı */
require_once 'include/footer.php';
