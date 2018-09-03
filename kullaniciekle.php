<?php
include("ayar.php");

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$pozisyon = $_POST["pozisyon"];
$kullaniciadi = $_POST["kullaniciadi"];
$sifre = $_POST["sifre"];
$yetki = $_POST["yetki"];
$bulnuma = $_POST["bulunma"];

$kontrol = mysqli_query($baglan, "SELECT * FROM sirketcalisanlar
 WHERE ad='$ad' and soyad='$soyad' and pozisyon='$pozisyon'");

$kontrol_count = mysqli_num_rows($kontrol);

if($kontrol_count < 1) {
$ekle = mysqli_query($baglan, "insert into sirketcalisanlar (ad,soyad,kullaniciadi,sifre,pozisyon, yetki, bulunma) values ('$ad','$soyad','$kullaniciadi','$sifre','$pozisyon','$yetki', '$bulunma')");
}
else {
echo("kullanici zaten kayitli");
}

if($ekle) {
    $x = array('Result' => 'Ekleme basarilidir...');
    echo json_encode($x);
}
else {
    $x = array('Result' => 'Ekleme basarisiz...');
    echo json_encode($x);
}


?>