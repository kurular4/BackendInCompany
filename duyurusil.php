<?php
include("ayar.php");

$id = $_POST["id"];

$sil = mysqli_query($baglan, "delete from duyurular where id = '$id'");


if($sil) {
    $x = array('Result' => 'Silme basarilidir...');
    echo json_encode($x);
}
else {
    $x = array('Result' => 'Silme basarisiz...');
    echo json_encode($x);
}

?>