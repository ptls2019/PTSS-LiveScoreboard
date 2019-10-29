<?php
include("conn.php");
$game_id = $_GET['game_id'];
$sql = "SELECT * FROM team WHERE game_id = '$game_id'";
$row = $conn->query($sql)->fetch_object();
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
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="games.php" class="nav-link">Match Schedule</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">All Result</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Live Scoreboard</a></li>
	          <li class="nav-item cta"><a href="login.php" class="nav-link">Login</a></li>

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
<body>
<h1>Info Team</h1>
 <form action="insertlist.php" method="POST">
  <table>
  <tr>
    <td>Game ID :</td>
        <td><?php echo $row->game_id; ?></td>
   </tr>
   <tr>
    <td>Sport :</td>
        <td><?php echo $row->sport; ?></td>
   </tr>
   <tr>
    <td>Team 1 :</td>
        <td><?php echo $row->team_1; ?></td>
   </tr>
   <tr>
    <td>Team 2 :</td>
        <td><?php echo $row->team_2; ?></td>
   </tr>
   <tr>
    <td>Location :</td>
        <td><?php echo $row->location; ?></td>
   </tr>
    
   <tr>
  
   </tr>
  </table>
 </form>
</body>
</html>

</div></center>

</body>
</html>
