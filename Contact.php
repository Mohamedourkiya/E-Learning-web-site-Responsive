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
  echo "Bien etablie";
} catch(PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Sanitize and retrieve form data
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Insert data into the database
  $stmt = $conn->prepare("INSERT INTO contact (name, phone, email, message) VALUES (?, ?, ?, ?)");
  $stmt->execute([$name, $phone, $email, $message]);

  // Check if the insertion was successful
  if ($stmt->rowCount() > 0) {
    header("Location: index.html");
  } else {
    echo "Error sending message.";
  }
}
?>