<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$name= $_POST["user1"];
$pwd= $_POST["password1"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user where username='$name' and password='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 echo "welcome ".$name;

header("Location: http://localhost/elearning/student.html");

 http://localhost/elearning/verify.php
} 
else {

    echo "wrong password";
header("Location: http://localhost/elearning/registration.php") ;   
}
$conn->close();
?>