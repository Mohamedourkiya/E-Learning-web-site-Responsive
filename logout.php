<?php
session_start();

// Destroy the session and all its data
session_destroy();

// Redirect the user to the index.php file
header("Location: index.html");
exit();
?>