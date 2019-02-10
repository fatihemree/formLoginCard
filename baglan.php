<?php 
ob_start(); 
$dbhost = "localhost"; //Veritabanın bulunduğu host
$dbuser = "root"; //Veritabanı Kullanıcı Adı
$dbpass = ""; //Veritabanı Şifresi
$dbdata = "users"; //Veritabanı Adı

include"dbclass.php";

$bag = new db();

ob_end_flush();
?>