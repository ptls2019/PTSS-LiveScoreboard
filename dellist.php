<?php
include("conn.php");
$game_id = $_GET['game_id'];
$sql = "DELETE FROM team WHERE game_id = $game_id";
$conn->query($sql);
$sql = "DELETE FROM game_score WHERE game_id = $game_id";
$conn->query($sql);
header('location: teamlist.php');