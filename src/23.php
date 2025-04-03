<?php
// Define variables and constants
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database
$sql = "SELECT * FROM table_name";
$result = $conn->query($sql);

// Output data of each row
if ($result->num_rows > 0) {
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["column1"] . "</td><td>" . $row["column2"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 rows matched.";
}

$conn->close();
