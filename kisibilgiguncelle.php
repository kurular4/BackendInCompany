<?php
include("ayar.php");

$id = $_POST["id"];
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$pozisyon = $_POST["pozisyon"];
$kullaniciadi = $_POST["kullaniciadi"];
$sifre = $_POST["sifre"];

$update = mysqli_query($baglan, "update sirketcalisanlar set ad='$ad', soyad='$soyad', pozisyon='$pozisyon', kullaniciadi='$kullaniciadi', sifre='$sifre' where id='$id'");


Class Kullanici {
   public $id;
   public $ad;
   public $soyad;
   public $kullaniciadi;
   public $pozisyon;
   public $yetki;
   public $bulunma;
}

$kullanici = new kullanici();

$kullanici->id = $update["id"];
$kullanici->ad = $update["ad"];
$kullanici->soyad = $update["soyad"];
$kullanici->kullaniciadi = $update["kullaniciadi"];
$kullanici->pozisyon = $update["pozisyon"];

echo(json_encode($kullanici));

?>