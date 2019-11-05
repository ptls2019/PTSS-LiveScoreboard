<?php
include("conn.php");

$game_id = $_GET['game_id'];

$sql = "SELECT * FROM teamp2 WHERE game_id=$game_id";
$rowt = $conn->query($sql)->fetch_object();
$sport = $rowt->sport;

$kumpulan = $rowt->kumpulan;
switch ($kumpulan) {
    case 5:
        $team = 'team_1';
        $group = 7;
        break;
    case 6:
        $team = 'team_2';
        $group = 7;
        break;


#cari pemenang
$sql = "SELECT * FROM game_scorep2 WHERE game_id=$game_id";
$row = $conn->query($sql)->fetch_object();
$mata_team1 = $row->steam_1set1 + $row->steam_1set2;
$mata_team2 = $row->steam_2set1 + $row->steam_2set2;
if ($mata_team1 > $mata_team2) {
    $pemenang = $rowt->team_1;
} elseif ($mata_team1 < $mata_team2) {
    $pemenang = $rowt->team_2;
} else {
    ?>
    <script>
        alert('tidak selesai sekiranya seri');
        window.location = 'pointcontrolnet2p2.php';
    </script>
    <?php
}

if (isset($pemenang)) {
    $sql = "UPDATE game_scorep2 SET selesai_set2='selesai' WHERE game_id=$game_id";
    $conn->query($sql);

    $time_game = '8:00:00';

    $sql = "SELECT * FROM teamp3 WHERE kumpulan=$group";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        $sql = "UPDATE teamp3 SET $team = '$pemenang' WHERE kumpulan=$group";
        $conn->query($sql);
    } else {
        $sql = "INSERT INTO teamp3 (sport, $team, time_game, kumpulan) VALUES ('$sport', '$pemenang', '$time_game', '$group')";
        $conn->query($sql);
        $game_id=$conn->insert_id;
        $sql="INSERT INTO game_scorep3 VALUES ('$game_id', 0, 0, 0, 0, 'belum', 'belum')";
        $conn->query($sql);
    }
    
    #echo $conn->error; exit;

    header('location: vsnet2.php');
}
