
<?php
session_start();
//set time zone
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once "./lib/config.php";
require_once "./lib/db.php";
require_once "./lib/function.php";
require_once "./mvc/bridge.php";
// require_once "./public/css/main.css";
// require_once "./public/css/base.css";
// require_once "./public/fonts/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css";
$myApp = new app();
?>