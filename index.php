<?php
/* Config */
require_once 'config.php';

/*  header Alanı */ 
require_once 'include/header.php';

/* Diğer Sayfalara Bağlantı */

if ($_GET && !empty($_GET['page'])) {
    $sayfa = $_GET["page"] . ".php"; //hizmetler.php
    if (file_exists(PAGE . $sayfa)) {
        include_once(PAGE . $sayfa);
    } else {
        include_once(PAGE . "home.php");
    }
} else {
    include_once(PAGE . "home.php");
}

/* Footer Kısmı */
require_once 'include/footer.php';
