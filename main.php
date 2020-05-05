<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$user1= $_POST['user1'];	
$name1= $_POST['name'];
$branch1= $_POST['branch'];
$semester1= $_POST['semester'];
$email1= $_POST['email'];
$password1= $_POST['password1'];
$mobileno1= $_POST['mobileno'];


// Create connection
$conn = mysqli_connect("localhost","root","","mydb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user VALUES ('$user1','$name1','$branch1',$semester1,'$email1','$password1','$mobileno1')";

if ($conn->query($sql) === TRUE) {
	
    header('location:../elearning/student.php');
    $to="170390107002@saffrony.ac.in";
    $subject="E-learning Sysem";
    $message="your registration have been succesfully done";
    $from="rajvibhavsar14@gmail.com";
 
    mail($to,$subject,$message,$from);


} else {
    header('location:../elearning/registration.php');

}


$conn->close();
?>