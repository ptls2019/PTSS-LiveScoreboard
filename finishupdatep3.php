<?php
include("conn.php");

$game_id=$_GET['game_id'];
$sql="UPDATE game_scorep3 SET selesai_set1='selesai' WHERE game_id=$game_id";
$conn->query($sql);

header('location: vsfoot3.php');