<?php
@session_start();
@ob_start();

define("SITE", "http://localhost:8080/FirmaScript/");
define("ADMIN", "http://localhost:8080/FirmaScript/admin/");
define("PAGE", "page/");
define("CLASS", "class/");

/* Veri Tabanı Bağlantısı */
require_once  'class/Database.php';
$database = new Database();




