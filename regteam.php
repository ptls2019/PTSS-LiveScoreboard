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
      <a class="navbar-brand" href="index.php"><span>PTSS Live Scoreboard</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
          
              <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="indexreg.php" class="nav-link">Register</a></li>
          <li class="nav-item active"><a href="teamlist.php" class="nav-link">Team List</a></li>
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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
      <h1>Register Team</h1>

      <form action="saveteam.php" method="POST">
        <TABLE BORDER="0">
          <br>
          <tr>
            <td>Select a time:</td>
            <td><input type="time" NAME="time_game"></td>
          </tr>
          <br>
          <TR>
            <TD>Sport</TD>
            <td>
              <select name="sport">
                <option value=""></option>
                <?php
                $sql = "SELECT * FROM team WHERE sport='football'";
                $result = $conn->query($sql);
                if ($result->num_rows < 4) {
                  ?>
                  <option value="football"> Football </option>
                <?php
                }

                $sql = "SELECT * FROM team WHERE sport='netball'";
                $result = $conn->query($sql);
                if ($result->num_rows < 4) {
                  ?>
                  <option value="netball"> Netball </option>
                <?php
                }
                ?>
              </select>
            </td>
            <TD>Kumpulan</TD>
            <TD ALIGN="left"><INPUT TYPE="number" min="1" max="7" NAME="kumpulan">
          </tr>
          <TR>
            <TD>Team 1</TD>
            <TD ALIGN="left"><INPUT TYPE="text" SIZE="25" NAME="team_1"></TD>
            <TD>Team 2</TD>
            <TD ALIGN="left"><INPUT TYPE="text" SIZE="25" NAME="team_2"></TD>
          </TR>
        </TABLE>

        <INPUT TYPE="submit" VALUE="Submit">
        <INPUT TYPE="reset" VALUE="Clear">
      </form>
    </center>
  </div>
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
</body>

</html>