<?php
include("ayar.php");

$toid = $_POST["toid"];

Class Duyuru {
    public $id = "";
    public $fromid = "";
    public $toid = "";
    public $title = "";
    public $message = "";
    public $date = "";
}

$duyuru = new Duyuru();
$al = mysqli_query($baglan, "select * from duyurular where toid='$toid'");

echo("[");
$sayac = 0;
$kayitsayisi = mysqli_num_rows($al);

while($goster = mysqli_fetch_assoc($al))
{
    $sayac = $sayac + 1;
        $duyuru->id = $goster["id"];
    $duyuru->fromid = $goster["fromid"];
    $duyuru->toid = $goster["toid"];
    $duyuru->title = $goster["title"];
    $duyuru->message = $goster["message"];
    $duyuru->date = $goster["date"];
    echo(json_encode($duyuru));
    if($sayac != $kayitsayisi) {
        echo(",");
    }
}
echo("]");
?>