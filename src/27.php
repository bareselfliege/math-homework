<?php
// Set your database credentials here
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "math_homework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM math_table WHERE id > 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Value: " . $row["value"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
