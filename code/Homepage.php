<?php
// Define database connection parameters
$host = 'localhost';
$dbname = 'project';
$user = 'username';
$password = 'password';

// Create a new database connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Query the database
$result = $conn->query('SELECT * FROM users');

// Check for errors
if (!$result) {
  die('Query failed: ' . $conn->error);
}

// Display the results
while ($row = $result->fetch_assoc()) {
  echo $row['name'] . '<br>';
}

// Close the database connection
$conn->close();
?>
