<?php
$servername = "localhost";
// $servername = "localhost:3306/mydb";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new MySQLi("localhost","root","","mydb");


if (isset($_POST['submit'])) {
	# code...
$user11= $_POST['user1'];	
$name1= $_POST['name'];
$branch1= $_POST['branch'];
$semester1= $_POST['semester'];
$password11= $_POST['password1'];
$email1= $_POST['email'];
$mobileno1= $_POST['mobileno'];

$sql = "INSERT INTO user (user1,name,branch,semester,password1,email,mobileno) values('$user11','$name1','$branch1','$semester1','$password11','$email1','$mobileno1')";
$conn->query($sql);

header('location:../elearning/student.php');

}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($result->num_rows > 0)
 {
 echo "welcome ".$name;



 /*http:*///localhost/elearning/verify.php
} 
else {

   
header('location:../elearning/registration.php');   
}
$conn->close();
?>