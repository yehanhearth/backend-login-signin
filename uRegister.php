<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";


$name=$_POST["fname"];


// Prepare the SQL INSERT query
$stmt = "INSERT INTO users (first_name) VALUES ('$name')";
// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO users (first_name) VALUES (?)");

// Bind parameters to the query
$stmt->bind_param("s", $name); // "ss" means both are strings

// Execute the query
if ($stmt->execute()) {
    echo "New record added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>