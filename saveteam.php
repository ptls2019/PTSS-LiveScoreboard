<?php
include("conn.php");
//$conn=mysqli_connect("localhost", "root", "ptsslivescoreboard")
$sport = $_POST['sport'];
$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];
$time_game = $_POST['time_game'];
$kumpulan = $_POST['kumpulan'];

$sql="INSERT INTO team VALUES (null, '$sport', '$team_1', '$team_2', '$time_game', '$kumpulan' )";
$conn->query($sql);
$game_id=$conn->insert_id;
#echo $conn->error;echo $game_id; exit;
$sql="INSERT INTO game_score VALUES ('$game_id', 0, 0, 0, 0, 'belum', 'belum')";
$conn->query($sql);
if( !$conn->error){
	header("Location:infoteam.php?game_id=$game_id");
}else{	
  echo $conn->error;exit;
    ?>
  <script>
    alert('Unsuccessful to register team');
    window.location='regteam.php';
  </script>  
    <?php
}
?>
