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
	          <li class="nav-item active"><a href="choosevs.php" class="nav-link">Choose Game</a></li>
	          <li class="nav-item active"><a href="gamesref.php" class="nav-link">Live Scoreboard</a></li>
	          <li class="nav-item active"><a href="index.php" class="nav-link">Logout</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
          <h1 class="mb-3 bread"></h1>
      </div>
      <style>
      table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 60%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        </head>
        <body>
    <br /><br /><br /><br />
      <center>
        <body>
         <h2>Team List Football</h2>
         <br><br />
         <h2>Pusingan Kedua</h2>
         <br><br />  

        
        <table>
          
            <?php
            $bill = 1;
            $sql = "SELECT * FROM teamp2  WHERE sport='football'";
            $result = $conn->query($sql);
            echo $conn->error;
            while($row = $result->fetch_object()) {
              $sql="SELECT * FROM game_scorep2 WHERE game_id=$row->game_id";
              $rowselesai=$conn->query($sql)->fetch_object();
              #echo $conn->error; echo $rowselesai->num_rows;
                ?>
                <tr>
                    <td><?php echo $bill++; ?></td>
                    <td><?php echo $row->team_1; ?></td>
                    <td><?php echo $row->team_2; ?></td>
                    <td>
                    <?php
                    if($rowselesai->selesai_set1=='belum'){
                    ?>
                    <button type="button" onclick="window.location='pointcontrolfootp2.php?game_id=<?php echo $row->game_id; ?>'">
                      Set1
                    </button>
                    <?php
                    }else{
                      ?>
                      <button type="button" disabled>set1 </button>
                      <?php
                    }

                    if($rowselesai->selesai_set2=='belum'){
                      ?>
                      <button type="button" onclick="window.location='pointcontrolfoot2p2.php?game_id=<?php echo $row->game_id; ?>'">
                        Set2
                      </button>
                      <?php
                      }else{
                        ?>
                        <button type="button" disabled>set2 </button>
                        <?php
                      }
                    ?>
                    </td>
                </tr>
                <?php
            }
            ?>
         
        </table></center>
        
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