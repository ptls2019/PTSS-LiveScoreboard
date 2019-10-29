<?php
include("conn.php");
$game_id=$_GET['game_id'];
$steam=$_GET['steam'];
$set=$_GET['set'];
$operasi=$_GET['operasi'];

$steam='steam_'.$steam.'set'.$set;
if($operasi=='tambah'){
    $mata=1;
}else{
    $mata=-1;
}

$sql="UPDATE game_scorep3 SET $steam=$steam+$mata WHERE game_id=$game_id";
$conn->query($sql);
#echo $sql,'<br>',$conn->error;exit;
header("location: pointcontrolfoot2p3.php?game_id=$game_id");
