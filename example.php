
<?php
include "conn.php";
   $username=$_POST['usrname'];
   $password=$_POST['psw'];

 $sql = "INSERT INTO `example`(`username`, `password`) VALUES ('$username','$password') ";

$var=mysqli_query($conn,$sql);



 //Check connection

echo "Connected successfully";
?>
