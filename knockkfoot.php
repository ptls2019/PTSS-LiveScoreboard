<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PTSS Live Scoreboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>PTSS Live Scoreboard</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="chooselog.php" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
          <h1 class="mb-3 bread"></h1>
      </div>
      <br /><br /><br /><br />
      <center>

    <h2>MATCH SCHEDULE FOOTBALL PTSS</h2>

    <?php
    $sql="SELECT * FROM team WHERE sport='football' ORDER BY kumpulan";
    $result=$conn->query($sql); 
    if($result->num_rows<4){
      echo '<h3>data tidak lengkap</h3>';
    }else{
      ?>
      <table border="0" width="100%" style="border-collapse: collapse;"> 
        <tr>
          <td style="width:25%;"></td>
          <td style="width:25%;"></td>
          <td style="width:25%;"></td>
          <td style="width:25%;"></td>
    </tr>
        <tr>
          <td>
            <?php
            $row=$result->fetch_object();
            echo $row->team_1;

            $sql="SELECT * FROM game_score WHERE game_id=$row->game_id";
            $row_mata=$conn->query($sql)->fetch_object();
            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_1set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_1set2] = " . ($row_mata->steam_1set1 + $row_mata->steam_1set2);
            }
            ?>
          </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td style="border-top: solid 1px; border-right: solid 1px;"><br></td>
          <td>
            <?php
            $sql="SELECT * FROM teamp2 WHERE kumpulan=5 AND sport='football'";
            $rs_p2k5=$conn->query($sql);
            if($rs_p2k5->num_rows){
              $row_p2k5=$rs_p2k5->fetch_object();
              echo $row_p2k5->team_1;
              $team_2p2k5=$row_p2k5->team_2;

              $mata_2p2k5='';
              $sql="SELECT * FROM game_scorep2 WHERE game_id=$row_p2k5->game_id";
              $row_matap2k5=$conn->query($sql)->fetch_object();
              if($row_matap2k5->selesai_set1=='selesai'){
                echo "[S1=$row_matap2k5->steam_1set1]";
                $mata_2p2k5.="[S1=$row_matap2k5->steam_2set1]";
              }
              if($row_matap2k5->selesai_set2=='selesai'){
                echo " + [S2=$row_matap2k5->steam_1set2] = " . ($row_matap2k5->steam_1set1 + $row_matap2k5->steam_1set2);
                $mata_2p2k5.=  " + [S2=$row_matap2k5->steam_2set2] = " . ($row_matap2k5->steam_2set1 + $row_matap2k5->steam_2set2);
              }
            }else{
              $team_2p2k5='';
              $mata_2p2k5='';
            }
            ?>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"><br></td>
          <td style="border-top: solid 1px; border-right: solid 1px;"><br></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php   
            echo $row->team_2;

            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_2set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_2set2] = " . ($row_mata->steam_2set1 + $row_mata->steam_2set2);
            }
            ?>
          </td>
          <td><br></td>
          <td style="border-left: solid 1px;">
          <?php
            $sql="SELECT * FROM teamp3 WHERE kumpulan=7 AND sport='football'";
            $rs_p3k7=$conn->query($sql);
            if($rs_p3k7->num_rows){
              $row_p3k7=$rs_p3k7->fetch_object();
              echo $row_p3k7->team_1;
              $team_2p3k7=$row_p3k7->team_2;

              $mata_2p3k7='';
              $sql="SELECT * FROM game_scorep3 WHERE game_id=$row_p3k7->game_id";
              $row_matap3k7=$conn->query($sql)->fetch_object();
              if($row_matap3k7->selesai_set1=='selesai'){
                echo "[S1=$row_matap3k7->steam_1set1]";
                $mata_2p3k7.="[S1=$row_matap3k7->steam_2set1]";
              }
              if($row_matap3k7->selesai_set2=='selesai'){
                echo " + [S2=$row_matap3k7->steam_1set2] = " . ($row_matap3k7->steam_1set1 + $row_matap3k7->steam_1set2);
                $mata_2p3k7.=  " + [S2=$row_matap3k7->steam_2set2] = " . ($row_matap3k7->steam_2set1 + $row_matap3k7->steam_2set2);
              }
            }else{
              $team_2p3k7='';
              $mata_2p3k7='';
            }
            ?>
        </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            $row=$result->fetch_object();
            echo $row->team_1;
            $sql="SELECT * FROM game_score WHERE game_id=$row->game_id";
            $row_mata=$conn->query($sql)->fetch_object();
            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_1set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_1set2] = " . ($row_mata->steam_1set1 + $row_mata->steam_1set2);
            }
            ?>
            </td>
          <td></td>
          <td style="border-top: solid 1px; border-right: solid 1px; border-left: solid 1px;"></td>
          <td></td>
        </tr>
        <tr>
          <td style="border-top: solid 1px; border-right: solid 1px;"><br></td>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"></td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
        </tr>
        <tr>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"><br></td>
          <td>
            <?php
             echo $team_2p2k5.$mata_2p2k5;
            ?>
          </td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
        </tr> 
        <tr>
          <td> 
          <?php   
            echo $row->team_2;

            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_2set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_2set2] = " . ($row_mata->steam_2set1 + $row_mata->steam_2set2);
            }
            ?>
          </td>
          <td></td>
          <td><br></td>
          <td style="border-bottom: solid 1px; border-left: solid 1px">
          <?php
            $sql="SELECT * FROM teamp4 WHERE kumpulan=8 AND sport='football'";
            $rs_p4k8=$conn->query($sql);
            if($rs_p4k8->num_rows){
              $row_p4k8=$rs_p4k8->fetch_object();
              echo $row_p4k8->team_1;
            }
           ?> 
        </td>
        </tr>
        <tr>
          <td>
          <?php
            $row=$result->fetch_object();
            echo $row->team_1;

            $sql="SELECT * FROM game_score WHERE game_id=$row->game_id";
            $row_mata=$conn->query($sql)->fetch_object();
            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_1set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_1set2] = " . ($row_mata->steam_1set1 + $row_mata->steam_1set2);
            }
            ?>
          </td>
          <td></td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
        </tr>
        <tr>
          <td style="border-top: solid 1px; border-right: solid 1px;"><br></td>
          <td>
          <?php
            $sql="SELECT * FROM teamp2 WHERE kumpulan=6 AND sport='football'";
            $rs_p2k6=$conn->query($sql);
            if($rs_p2k6->num_rows){
              $row_p2k6=$rs_p2k6->fetch_object();
              echo $row_p2k6->team_1;
              $team_2p2k6=$row_p2k6->team_2;

              $mata_2p2k6='';
              $sql="SELECT * FROM game_scorep2 WHERE game_id=$row_p2k6->game_id";
              $row_matap2k6=$conn->query($sql)->fetch_object();
              if($row_matap2k6->selesai_set1=='selesai'){
                echo "[S1=$row_matap2k6->steam_1set1]";
                $mata_2p2k6.="[S1=$row_matap2k6->steam_2set1]";
              }
              if($row_matap2k6->selesai_set2=='selesai'){
                echo " + [S2=$row_matap2k6->steam_1set2] = " . ($row_matap2k6->steam_1set1 + $row_matap2k6->steam_1set2);
                $mata_2p2k6.=  " + [S2=$row_matap2k6->steam_2set2] = " . ($row_matap2k6->steam_2set1 + $row_matap2k6->steam_2set2);
              }
            }else{
              $team_2p2k6='';
              $mata_2p2k6='';
            }
            ?>
          </td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
        </tr>
        <tr>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"><br></td>
          <td style="border-top: solid 1px; border-right: solid 1px;"></td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
        </tr>
        <tr>
          <td>
          <?php   
            echo $row->team_2;

            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_2set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_2set2] = " . ($row_mata->steam_2set1 + $row_mata->steam_2set2);
            }
            ?>
          </td>
          <td></td>
          <td style="border-bottom: solid 1px; border-right: solid 1px; border-left: solid 1px;">
          <?php
          echo $team_2p3k7.$mata_2p3k7;
            ?>
        </td>
          <td></td>
        </tr>
        <tr>
          <td>
          <?php
            $row=$result->fetch_object();
            echo $row->team_1;

            $sql="SELECT * FROM game_score WHERE game_id=$row->game_id";
            $row_mata=$conn->query($sql)->fetch_object();
            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_1set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_1set2] = " . ($row_mata->steam_1set1 + $row_mata->steam_1set2);
            }
            ?>
          </td>
          </td>
          <td></td>
          <td style="border-left: solid 1px;"></td>
          <td></td>
        </tr>
        <tr>
          <td style="border-top: solid 1px; border-right: solid 1px;"><br></td>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td style="border-bottom: solid 1px; border-right: solid 1px;"><br></td>
          <td>
          <?php
          echo $team_2p2k6.$mata_2p2k6;
            ?>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
          <?php   
            echo $row->team_2;

            if($row_mata->selesai_set1=='selesai'){
              echo "[S1=$row_mata->steam_2set1]";
            }
            if($row_mata->selesai_set2=='selesai'){
              echo " + [S2=$row_mata->steam_2set2] = " . ($row_mata->steam_2set1 + $row_mata->steam_2set2);
            }
            ?>
          </td>
          <td></td>
          <td></td>
          <td></td>
        </tr></center>
      </table>
      <?php
    }
    ?>
      
<div class="content">
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>


</body>
</html>
