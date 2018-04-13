<?php
include "example.php";
if(isset($_POST['login'])){
   $username=$_POST['usrname'];
   $password=$_POST['psw'];

 $sql = "INSERT INTO example(username, password) VALUES ('$username','$password')";
}
mysqli_query($conn,$sql);




 //Check connection

echo "Connected successfully";
?>