 <?php
// Include config file
require_once "conn.php";
 #print_r($_POST); exit;

 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirm_password=$_POST['confirm_password'];

 if ($password != $confirm_password) {
     #echo "$password != $confirm_password";
     ?>
    <script>
    alert('Failed to sign up, confirm password is not same');
    window.location='register.php';
    </script>
     <?php
 }else{
     $sql="INSERT INTO sportofficer VALUES (null, '$username', '$password', null)";
     $conn->query($sql);
     #echo $conn->error; exit;
     header('location: chooselog.php');
 }