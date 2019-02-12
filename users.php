<?php 
include 'baglan.php';

$name= $_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$date=$_POST["date"];


  $ekle = $bag->ekle("info_users", "name,email,password,date",array("$name","$email","$password","$date"));
if ($ekle) {

		echo "ekle basarili";

}

 ?>