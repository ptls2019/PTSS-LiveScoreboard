<?php
require 'conn.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM sportofficer WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
if($result->num_rows){
    header('location: indexreg.php');
}else{
    ?>
    <script>
    alert('invalid password');
    window.location='loginso.php';
    </script>
    <?php
}