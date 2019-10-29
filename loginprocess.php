<?php
include("conn.php");
//$conn=mysqli_connect("localhost", "root", "ptsslivescoreboard")
$user = $_POST['username'];
$pass = ($_POST['pwd']);


$sql="SELECT * from account where username'$pls2019' and pwd='$pls2019'";

$result=$conn->query($sql);
echo $conn->error;
$row1=mysql_fetch_array($result);
if(isset($_POST['user']))
if($row1['user'] !=NULL)
{
	$_SESSION['user']=$user;
	header("Location:PTSSLiveScoreboard.php");
}
else
{	
	echo "Unauthorized user <br>";
	echo "Please login";
}
?>
