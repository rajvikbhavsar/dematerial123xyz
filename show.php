<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM uploadvideo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 

    {
        echo "name: " . $row["name"]. " - Name: " . $row["category"]. " " . $row["path"]."<br>";


?>
 

<video width="300" height="200" controls>
	<source src="<?php echo $row['path']; ?>" type="video/mp4">
	</video> 
    
 <?php echo $row["introduction"]; ?> 

<?php



    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<link rel="stylesheet" type="text/css" href="first.css">

</head>
<body>


</body>
</html>