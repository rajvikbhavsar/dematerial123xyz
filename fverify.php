<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// $name= $_POST["user1"];
$email11= $_POST["email1"];
$pass= $_POST["password1"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM faculty where email='$email11' and password='$pass'";
$result = $conn->query($sql);

 if ($result>0)
 {
 echo "welcome ".$name;

header("location:uploading.php");

 // http://localhost/elearning/verify.php
} 
else {

    echo "wrong password";
header("location: flogin.php") ;   
}
$conn->close();
?>