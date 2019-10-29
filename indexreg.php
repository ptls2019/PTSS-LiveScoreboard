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
	          <li class="nav-item active"><a href="regref.php" class="nav-link">Register Referee<a></li>
            <li class="nav-item active"><a href="regteam.php" class="nav-link">Register Team</a></li>
            <li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard Football</a></li>
	          <li class="nav-item active"><a href="dashboardnet.php" class="nav-link">Dashboard Netball</a></li>
              <li class="nav-item active"><a href="index.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Laporan Sukan</span>
	            <h2 class="mb-4">Skor Sukan Semasa</h2>
            </div>
            
            <?php
            $sql = "SELECT game_id FROM team WHERE team_1='JTMK' AND sport='football'";
            $sql2 = "SELECT * FROM game_score WHERE game_id IN ($sql)";
            $row = $conn->query($sql2)->fetch_object(); 
            $sql = "SELECT time_game FROM team WHERE team_1='JTMK' AND sport='football'";
            $rowt = $conn->query($sql)->fetch_object();
            ?>
	          <div class="scoreboard mb-5 mb-lg-0">
	          	<div class="divider text-center"><span>Wed, Oct 9, 2019; Sukan Jabatan</span></div>
	          	<div class="d-sm-flex mb-4">
		          	<div class="sport-team d-flex align-items-center">
	          			<div class="img logo" style="background-image: url(images/jtmk.jpg);"></div>
									<div class="text-center px-1 px-md-3 desc">
										<h3 class="score win"><span><?php echo $row->steam_1set1 + $row->steam_1set2; ?></span></h3>
										<h4 class="team-name">JTMK</h4>
									</div>
		          	</div>
		          	<div class="sport-team d-flex align-items-center">
	          			<div class="img logo order-sm-last" style="background-image: url(images/jp.jpg);"></div>
									<div class="text-center px-1 px-md-3 desc">
										<h3 class="score lost"><span><?php echo $row->steam_2set1 + $row->steam_2set2; ?></span></h3>
										<h4 class="team-name">JP</h4>
									</div>
		          	</div>
	          	</div>
	          </div>
					</div>
          <section class="w3-row-padding w3-center w3-light-grey">
    <article class="w3-third">
      <p><b></b></p>
      <img src="images/IMG_4303.jpg" alt="" width="600" height="400">
      <p></p>
      <p></p>
    </article>
					</div>
				</div>
			</div>
		</section>

	

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-american-football"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Sukan</h3>
                <p>Meningkatkan keyakinan diri</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-american-football-1"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Kekuatan</h3>
                <p>Meningkatkan Stamina</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-lockers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Minda</h3>
                <p>Mengurangkan tekanan/stress</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-strategy"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hubungan</h3>
                <p>Merapatkan silaturrahim sesama masyarakat</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(images/ptss.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
				<!-- Band Description -->
						<section class="w3-container w3-center w3-content" style="max-width:2000px">
							<h2 class="w3-wide">PTSS Live Scoreboard</h2>
							<p class="w3-opacity"><i>We Love Sport</i></p>
							<p class="w3-justify">We have created this website to facilitate the people who is working behind the management of sport games such as Sport Officer and referees. We also care for the spectators and sport lovers who always want to see an update of their favourite team. Thank you for visiting our website. Sincerely, PTSS Live Scoreboard's developers.</p>
  </section>  
				</div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-3 bg-light mb-4">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Game Played</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-3 bg-light mb-4">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span>Coaches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-3 bg-light mb-4">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>Trophies</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-3 bg-light mb-4">
		              <div class="text">
		                <strong class="number" data-number="80">0</strong>
		                <span>Members</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
		

   
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent News</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="kstp.html" class="block-20" style="background-image: url('images/IMG-20190720-WA0043.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">19-21</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">July</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="innocom.html">Karnival Sukan Tempur Politeknik 2019</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="innocom.html" class="block-20" style="background-image: url('images/IMG-20190919-WA0028.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">9&10</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">Oct</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Innocom 2019</a></h3>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-subscribe img" style="background-image: url(images/bg_1.jpg);">
      <div class="overlay">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-wrap text-center heading-section heading-section-white ftco-animate">
              <h2></h2>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-10">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-footer-2 ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">PTSS Live Scoreboard</h2>
              <p></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Politeknik Tuanku Syed Sirajuddin, Pauh Putra 02600 Arau Perlis.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+6019-5484316 (Fitri)</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ptssls2019@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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