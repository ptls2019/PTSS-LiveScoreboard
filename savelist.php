<?php
include("conn.php");
//$conn=mysqli_connect("localhost", "root", "ptsslivescoreboard")
$game_id = $_POST['game_id'];
$sport = $_POST['sport'];
$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];
$time_game = $_POST['time_game'];

$sql="INSERT INTO team VALUES ('$game_id', '$sport', '$team_1', '$team_2', 'time_game')";
$conn->query($sql);
if( !$conn->error){
	header("Location:infolist.php?game_id=$game_id");
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
