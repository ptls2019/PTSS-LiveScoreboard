<?php
include("conn.php");
//$conn=mysqli_connect("localhost", "root", "ptsslivescoreboard")
$game_id = $_POST['game_id'];
$kumpulan = $_POST['kumpulan'];
$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];
$time_game = $_POST['time_game'];

$sql="UPDATE team SET kumpulan='$kumpulan', team_1 = '$team_1', team_2 ='$team_2', time_game ='$time_game' WHERE game_id=$game_id";
#echo $sql;exit;
$conn->query($sql);
if( !$conn->error){
	header("Location:teamlist.php");
}else{	
  echo $conn->error;exit;
    ?>
  <script>
    alert('Unsuccessful to register team');
    window.location='teamlist.php';
  </script>  
    <?php
}
?>
