<?php
include("conn.php");

$game_id = $_GET['game_id'];

$sql = "SELECT * FROM teamp3 WHERE game_id=$game_id";
$rowt = $conn->query($sql)->fetch_object();
$sport = $rowt->sport;

$kumpulan = $rowt->kumpulan;
switch ($kumpulan) {
    case 7:
        $team = 'team_1';
        $group = 8;
        break;
}


#cari pemenang
$sql = "SELECT * FROM game_scorep3 WHERE game_id=$game_id";
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
        window.location = 'pointcontrolnet2p3.php?game_id=<?php echo $game_id; ?>';
    </script>
    <?php
}

if (isset($pemenang)) {
    $sql = "UPDATE game_scorep3 SET selesai_set2='selesai' WHERE game_id=$game_id";
    $conn->query($sql);

    $time_game = '08:00:00';

    $sql = "SELECT * FROM teamp4 WHERE kumpulan=$group";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        $sql = "UPDATE teamp4 SET $team = '$pemenang' WHERE kumpulan=$group";
        $conn->query($sql);
    } else {
        $sql = "INSERT INTO teamp4 (sport, $team, time_game, kumpulan) VALUES ('$sport', '$pemenang', '$time_game', '$group')";
        $conn->query($sql);
        $game_id=$conn->insert_id;
        $sql="INSERT INTO game_scorep4 VALUES ('$game_id', 0, 0, 0, 0, 'belum', 'belum')";
        $conn->query($sql);
    }
    
    #echo $conn->error; exit;

    header('location: vsnet3.php');
}
