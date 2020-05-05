<?php


$sem=$_POST['semester'];
$branch1=$_POST['branch'];
$sname1 = $_POST['sname'];
$fname1 = $_POST['fname'];

$target_path1 = "upload/";

$target_path1 = $target_path1 . basename( $_FILES['uploadedfile']['name']); 
$info = pathinfo($_FILES['uploadedfile']['name']);
$ext = $info['extension'];
$newname = $sname1."_ch1".".".$ext; 
$target_path1  = 'upload/'.$newname;
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path1)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO uploadfile VALUES ($sem, '$branch1', '$sname1','$fname1','$target_path1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



