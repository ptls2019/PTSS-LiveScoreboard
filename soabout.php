<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
body {
  font-family: Arial;
  font-family: "Lato", sans-serif;
  margin: 0;
  background: #white;
}


/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1abc9c;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 150px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<style>
/* Style the body */

/* Header/Logo Title */

/* Page Content */
.content {padding:1px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.content {
  max-width: 300px;
  margin: auto;
  background: white;
  padding: 5px;
}
</style>
</head>
<body>
<div class="sidenav">
  <a href="about.php">About</a>
  <a href="menu.php">Back</a>
</div>
</div>

<div class="main">
<div class="header">
  <h1>PTSS Live Scoreboard</h1>
</div>
</div>

<div class="content">
<div class="content">

<!-- Slide Show -->
<section>
  <img class="mySlides" src="backabout1.jpg"
  style="width:300%">
  <img class="mySlides" src="backabout2.jpg"
  style="width:300%">
  <img class="mySlides" src="backabout3.jpg"
  style="width:300%">
</section>

<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:2000px">
  <h2 class="w3-wide">PTSS Live Scoreboard</h2>
  <p class="w3-opacity"><i>We Love Sport</i></p>
  <p class="w3-justify">We have created this website to facilitate the people who is working behind the management of sport games such as Sport Officer and referees. We also care for the spectators and sport lovers who always want to see an update of their favourite team. Thank you for visiting our website. Sincerely, PTSS Live Scoreboard's developers.</p>
</section>

<!-- Band Members -->
<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
    <p><b>1) Nor Shazana Binti Sulaiman</b></p>
    <img src="anis2.jpg" alt="Random Name" style="width:100%">
    <p>Reg. Num: 18DNS17F1001.</p>
    <p>Contact Num: +6013-7520662</p>
  </article>
  <article class="w3-third">
    <p><b>2) Nurfitri Anis Binti Rosnizam</b></p>
    <img src="anis1.jpg" alt="Random Name" style="width:100%">
    <p>Reg. Num: 18DNS17F1003.</p>
    <p>Contact Num: +6019-5484316</p>
  </article>
  <article class="w3-third">
    <p><b>3) Amirah Nadhirah Binti Fadzilan</b></p>
    <img src="mira1.jpg" alt="Random Name" style="width:100%">
    <p>Reg. Num: 18DNS17F1018</p>
    <p>Contact Num: +6017-4471898</p>
  </article>
</section>

<!-- Footer -->


<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>

