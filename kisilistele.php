<?php
include("ayar.php");

Class kullanici {
  
    public $id = "";
    public $ad = "";
    public $soyad = "";
    public $kullaniciadi = "";
    public $pozisyon = "";
    public $yetki = "";
    public $bulunma = "";
}

$kl = new kullanici();
$bak = mysqli_query($baglan, "select * from sirketcalisanlar ");

echo("[");
$sayac = 0;
$kayitsayisi = mysqli_num_rows($bak);
while($goster = mysqli_fetch_assoc($bak))
{
    $sayac = $sayac + 1;
    $kl->id = $goster["id"];
    $kl->ad = $goster["ad"];
    $kl->soyad = $goster["soyad"];
    $kl->kullaniciadi = $goster["kullaniciadi"];
    $kl->pozisyon = $goster["pozisyon"];
    $kl->yetki = $goster["yetki"];
    $kl->bulunma = $goster["bulunma"];
    echo(json_encode($kl));
    if($sayac != $kayitsayisi) {
        echo(",");
    }
}
echo("]");
?>