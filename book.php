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
$sql = "SELECT * FROM book";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Mobile_Num" .$row["Mobile_Num"] . " - Num_of_Adults" . $row["Num_of_Adults"]. " - Num_of_Children: " . $row["Num_of_Children"]." - Date_of_Journey" . $row["Date_of_Journey"]. " - Total_Price " . $row["Total_Price"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
