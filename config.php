<?php



define('DBHOST', 'localhost'); //host mysql
define('DBUSER', 'root'); //host mysql
define('DBPASS', ''); //host mysql
define('DBNAME', 'layanan_masyarakat'); //host mysql

// site configuration
define('SITE_URL', 'http://localhost:8080/appem/'); //alamat localhost


// development workspace
// menampilkan seluruh error selama proses dev
ini_set('display_errors', true);
error_reporting(E_ALL);


//session configuration
session_name('Session');
session_set_cookie_params(3600 * 34 * 7, '/', '', false, true);
session_start();