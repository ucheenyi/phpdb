<?php

// Database credentials
$servername = "localhost";
$username = "uche_user";
$password = "password";
$dbname = "uche_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// (Optional) Specify the ID of the entry to select (replace with actual ID)
$id = 1;

// SQL to select entry
$sql = "SELECT * FROM uche_table WHERE id = $id";

$result = mysqli_query($conn, $sql);

// Check if entry found
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  // Start building the HTML content
  $html = "<!DOCTYPE html><html><head><title>Database Entry</title></head><body>";

  // Display data in HTML format (modify as needed)
  $html .= "<h1>Name: " . $row["name"] . "</h1>";
  $html .= "<p>Email: " . $row["email"] . "</p>";

  // Close HTML tags
  $html .= "</body></html>";

  // Display the HTML content directly (no file writing)
  echo $html;
} else {
  echo "No entry found with ID: $id";
}

// Close connection
mysqli_close($conn);

?>
