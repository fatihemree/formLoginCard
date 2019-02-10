<?php 
include 'baglan.php';

$infoUsers= $_POST["person"];

print_r($infoUsers);


  $ekle = $bag->ekle("info_users", "name,email,password,date", $infoUsers);




 ?>