<?php
include("ayar.php");

$fromid = $_POST["fromid"];
$toid = $_POST["toid"];
$title = $_POST["title"];
$message = $_POST["message"];
$date = $_POST["date"];

$duyuruekle = mysqli_query($baglan, "insert into duyurular (fromid, toid, title, message, date) values ('$fromid', '$toid', '$title', '$message', '$date')");

if($duyuruekle){
    $x = array('Result' => 'Ekleme basarilidir.');
        echo json_encode($x);
}
else
{
    $x = array('Result' => 'Ekleme basarisizdir.');
        echo json_encode($x);
}

?>