<?php

$host = "localhost"; // Sunucu adresi
$kullaniciAdi = "***";
$sifre = "***";
$veritabani = "***";

$baglan = mysqli_connect($host, $kullaniciAdi, $sifre, $veritabani);

if($baglan) {
//	echo("Basarili baglanti"."</br>");
}
else {

//	echo("Basarisiz baglanti"."</br>");
}

?>