<?php

session_start();
// include("database.php");



$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');
$email1 = $_POST['email'];
 // $x = $_SESSION['username'];



  $query = "select * from user where email='$email1'";
// $query = "select * from elearningtable where name='$name'";
$result=mysqli_query($conn,$query);


 
    while($row = mysqli_fetch_assoc($result))
    {
     
     
     $password1= $row["password"];
     
   



   $to = $email1;
      $subject="Your Password";
      $message=" Your password is : $password1";
      $from = "rajvibhavsar14@gmail.com";

      //$headers =  'MIME-Version: 1.0' . "\r\n";
      //$headers .= 'From: Your name <hemilparmar1005@gmail.com>' . "\r\n";
      //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      // $headers = 'From: hemilparmar1005@gmail.com' . "\r\n" ;

        $headers="From :" .$from;
        mail($to,$subject,$message,$headers);
        echo "mail sent";

       header('location:registration.php');
  }




?>
