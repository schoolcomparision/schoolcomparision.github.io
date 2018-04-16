<html>
<title>Login</title>
<body>
<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$db= "school";
$username1= $_POST['username1'];
$password1= $_POST['password1'];
// Create connection
$conn =mysqli_connect($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
 else{
    echo "Connected successfully";
    $sql= "INSERT INTO example(username,password) VALUES('$username1','$password1')";
    mysqli_query($conn,$sql);
    echo "<br>Data successfully updated";
    return $conn;
}


?>
</body>
</html>