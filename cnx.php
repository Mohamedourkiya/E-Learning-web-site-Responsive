<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sitestage";

// Create a new PDO instance
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}
?>