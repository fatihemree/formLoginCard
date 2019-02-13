<?php 
include 'baglan.php';

$name= $_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$date=$_POST["date"];

echo "name: ".$name."  email: ".$email." pass: ".$password. " date: ".$date;

	$sonuc = $bag->cek("OBJ_ALL","info_users","name,email","WHERE email=? OR name=?", array($email,$name));
			if ($sonuc) {
				echo "kayıtlıdır";
			}
else{


  $ekle = $bag->ekle("info_users", "name,email,password,date",array("$name","$email","$password","$date"));
}


 ?>