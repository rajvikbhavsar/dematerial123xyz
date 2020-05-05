<h1 align="center">  Uploaded Files </h1><br><br>


<table border=1 align="center">
	<th>Branch Name </th>
	<th>Subject Name</th>
	<th>File</th>
<?php
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

$sql = "SELECT * FROM uploadfile where semester=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {

        //echo "id: " . $row["sname"]. " - Name: " . $row["ufile"]. "<br>";

    
?>



<tr>
	<td>
		<?php echo $row["branch"]; ?>
	</td>

	<td>
		<?php echo $row["sname"]; ?>
	</td>


	<td>
<a href="     <?php echo $row["ufile"];  ?>   "> <?php echo $row["fname"];  ?>       </a>		
	</td>

</tr>

<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>



</table>