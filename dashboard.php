<?php
include("conn.php");
header("refresh:60");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>PTSS Live Scoreboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='width=device-width,initial-scale=1' name='viewport'/>

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

	<link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">
	

</head>
<style>
	.container {
		height: 100%;
		weight: 100%;
	}
	.testscore{
		float:left;
		width:100%;
		padding-left:10%;
	}
	.testvideo{
		float:right;
		width:50%;
	}
	@media only screen and (max-width: 320px) {
 	 body {
    background-color: black;
	width: 100%;
 	 }	
}
</style>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span>PTSS Live Scoreboard</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="indexreg.php" class="nav-link">Register</a></li>
					<li class="nav-item active"><a href="dashboardnet.php" class="nav-link">Dashboard Netball</a></li>
					<li class="nav-item active"><a href="index.php" class="nav-link">Logout</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<!-- END nav -->
	<section class="ftco-section">
		<div class="container-fluid no-padding testscore">
			<div class="row mx-0">
				<div class="col-lg-12">
					
						<?php
					$sql = "SELECT game_id FROM team WHERE team_1='JTMK' AND sport='football'";
					$sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
					$row = $conn->query($sql2)->fetch_object(); 
					?>
					<div class="scoreboard mb-5 mb-lg-2">
						<div class="divider text-center"><span>10:00 a.m Sukan Antara Jabatan</span></div>
						<div class="d-sm-flex mb-4">
							<div class="sport-team d-flex align-items-center">
								<div class="img logo" style="background-image: url(images/jtmk.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score win" style="font-size:80pt;"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
									<h4 class="team-name" style="font-size:80pt;">JTMK</h4>
								</div>
							</div>
							<div class="sport-team d-flex align-items-center">
								<div class="img logo order-sm-last" style="background-image: url(images/jrkv.jpg);"></div>
								<div class="text-center px-1 px-md-3 desc">
									<h3 class="score lost" style="font-size:80pt;"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
									<h4 class="team-name" style="font-size:80pt;">JRKV</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
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