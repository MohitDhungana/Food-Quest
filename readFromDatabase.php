<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "food quest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM food";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Dish Name=" . $row["Food_Name"]. " <br> Description=: " . $row["Food_Description"]."<br><br><br>";
		$file_location = $row["Food_Image"];
		echo readfile("$file_location");
    }
} else {
    echo "0 results";
}
$conn->close();
?>

