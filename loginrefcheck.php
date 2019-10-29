<?php
require 'conn.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM referee WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
if($result->num_rows){
    header('location: choosevs.php');
}else{
    ?>
    <script>
    alert('invalid password');
    window.location='loginref.php';
    </script>
    <?php
}