<?php
include("ayar.php");

$id = $_POST["id"];
$lokasyon = $_POST["lokasyon"];


$update = mysqli_query($baglan, "update sirketcalisanlar set bulunma='$lokasyon' where id='$id'");


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
$kullanici->bulunma = $update["bulunma"];

echo(json_encode($kullanici));

?>