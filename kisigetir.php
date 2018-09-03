<?php
include("ayar.php");

$id = $_POST["id"];


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

$kontrol = mysqli_fetch_assoc(mysqli_query($baglan, "select * from sirketcalisanlar where id='$id'"));


$kullanici->id = $kontrol["id"];
$kullanici->ad = $kontrol["ad"];
$kullanici->soyad = $kontrol["soyad"];
$kullanici->kullaniciadi = $kontrol["kullaniciadi"];
$kullanici->pozisyon = $kontrol["pozisyon"];
$kullanici->yetki = $kontrol["yetki"];
$kullanici->bulunma = $kontrol["bulunma"];

echo(json_encode($kullanici));

?>