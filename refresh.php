<?php

include('connection.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
if(($_SESSION['username']!='')&&($_SESSION['password']!=''))
{
$progid=$_GET['progid'];

/*$queryttlstaff="select count(staffid) as ttlattd from attendance where progid='$progid'";
$resulttlstaff=mysql_query($queryttlstaff)or die(mysql_error());
$rowttlstaff=mysql_fetch_array($resulttlstaff);*/

$queryprog="select * from program where progid='$progid'";
$resultprog=mysql_query($queryprog)or die(mysql_error());
$rowprog=mysql_fetch_array($resultprog);
?>
<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
		<title>PTSS Event Attendance System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        
        <style>
		ol.simple-list {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 3em;
    padding: 0;
     
    counter-reset: li-counter;
}
ol.simple-list > li{
    position: relative;
    margin-bottom: 20px;
    padding-left: 0.5em;
    min-height: 3em;
    border-left: 2px solid #CCCCCC;
}
ol.simple-list > li:before {
    position: absolute;
    top: 0;
    left: -1em;
    width: 0.8em;
     
    font-size: 3em;
    line-height: 1;
    font-weight: bold;
    text-align: right;
    color: #464646;
 
    content: counter(li-counter);
    counter-increment: li-counter;
}	

ol.circles-list {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 4em;
    padding: 0;
     
    counter-reset: li-counter;
}
ol.circles-list > li{
    position: relative;
    margin-bottom: 20px;
    padding-left: 0.5em;
    min-height: 3em;
}
ol.circles-list > li:before {
    position: absolute;
    top: 0;
    left: -1.33em;
    width: 1.2em;
    height: 1.2em;
     
    font-size: 2.5em;
    line-height: 1.2;
    text-align: center;
    color: #f5f5f5;
 
    border: 3px solid #c5c5c5;
    border-radius: 50%;
    background-color: #464646;
    content: counter(li-counter);
    counter-increment: li-counter;
}
 
        table {
    border-collapse: collapse;
    width: 70%;
}


th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
        </style>
		</style>

<script type="text/JavaScript">

//<!--
//
//function TimedRefresh( t ) {
//
//setTimeout("location.reload(true);", t);
//
//}
//
////   -->
//
</script>  

<script>

setInterval(getattd, 1000);

function getattd() {

  var xhttp;  
  var progid=document.getElementById("progid");  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ttlattd").innerHTML = this.responseText;
	  myTimer();
	  listattd();
    }
  };
  xhttp.open("GET", "countattd.php?progid="+progid, true);
  xhttp.send();
}

function myTimer() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById("time").innerHTML = t;
}

function listattd() {

  var xhttp;  
  var progid=document.getElementById("progid");  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("listattd").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "marqueeattd.php?progid="+progid, true);
  xhttp.send();
}
</script>
      
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style8 {color: #000000}
.style9 {
	color: #FF0000;
	font-weight: bold;
	font-size: 70px;
}
.style11 {
	color: #000000;
	font-size: 70px;
}
.style12 {color: #00004F}
.style14 {font-size: 50px}
.style15 {
	font-size: 45px;
	font-weight: bold;
}
.style16 {
	color: #6600FF;
	font-weight: bold;
}
.style17 {
	color: #FF3300;
	font-weight: bold;
}
-->
</style>
</head>
	<body onLoad="JavaScript:TimedRefresh(1000);">
		<div id="page-wrapper">

			
<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
								
                                <div align="center">
										<header>
                                        <br>
										<h2>Event Information</h2>
                                        </header>
					<div id="progid" style="display: none;"><?php echo $progid;?></div>		 
                  <div style="overflow-x:auto;">
                                  <table id="resultproject">	
                                    <tr>
                                      <th bgcolor="#00004F" colspan="2"><div align="left" class="style2">
                                        <div align="center">EVENT DETAIL</div>
                                      </div></th>
                                    </tr>
                                    <tr>
                                    <td><div align="left" class="style2 style8">NAME</div></td>
                                    <td>: <?php
									  echo $rowprog['progname'];?></td>
                                    </tr>
                                    <tr>
                                    <td><div align="left" class="style2 style8">DATE</div></td>
                                    <td>: <?php echo date("d/m/Y",strtotime($rowprog['progdate']));?></td>
                                    </tr>
                                    <tr>
                                    <td><div align="left" class="style2 style8">LOCATION</div></td>
                                    <td>: <?php 
									  echo $rowprog['proglocation'];?></td>
                                    </tr>
                                    <tr>
                                    <td><div align="left" class="style2 style8">TIME</div></td>
                                    <td>: <span class="style14"><span class="style15" id="time"></span></span></td>
                                    </tr>
                                    <tr>
                                    <td height="72" colspan="2"><br>
                                      <div align="center"><span class="style11">AUDIENCE :</span><span class="style9" id="ttlattd"></span> </div></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                   	  <td colspan="2">
                    						<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" id="listattd">  
                                          	</marquee></td>
                                    </tr>
                                    <tr>
                                      <th bgcolor="#00004F" colspan="2"><div align="right" class="style2">
                                        <div align="center" class="style12">POLITEKNIK TUANKU SYED SIRAJUDDIN</div>
                                      </div></th>
                                    </tr>
                                    </table>
                                    
                                    
                  <!-- close center-->
								</div>

						</div>
					</div>
				</section>
               
                 <?php
                 if(@$exist==1)
				 {
				 ?>
                <script>
					alert("Your attendance already exist in the system.");	
				</script>
                <?php
				 }
				 ?>

			<!-- Footer -->
				<div id="footer">
					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; PTSS. All rights reserved</li>
							</ul>
						</div>

				</div>

		</div>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>
<?php

}
else
{
	?>
					<script type="text/javascript">
					window.location = "index.php"
					</script>
			<?php
	}
?>