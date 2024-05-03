<?php
// Connect to your database
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "agency_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from your table
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Subject" .$row["Subject"] . " - Message" . $row["Message"]  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

