<?php
$game_id = $_POST['game_id']
$sport = $_POST['sport'];
$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];
if (!empty($game_id) || !empty($sport) || !empty($team_1) || !empty($team_2)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "teamdata";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT game_id From register Where game_id = ? Limit 1";
     $INSERT = "INSERT Into register (game_id, sport, team_1,team_2) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $game_id);
     $stmt->execute();
     $stmt->bind_result($game_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $game_id, $sport, $team_1, $team_2);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>