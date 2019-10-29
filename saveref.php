<?php
include("conn.php");
//$conn=mysqli_connect("localhost", "root", "ptsslivescoreboard")
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql="INSERT INTO referee VALUES ('$username', '$password', '$gender', '$email', '$phone' )";
$conn->query($sql);
if( !$conn->error){
	header("Location:inforef.php?username=$username");
}else{	
    ?>
  <script>
    alert('Unsuccessful to register referee');
    window.location='regref.php';
  </script>  
    <?php
}
?>
