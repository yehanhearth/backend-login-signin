<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";


$name=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$mobile=$_POST["mobile"];
$adress=$_POST["adress"];


// Prepare the SQL INSERT query
$stmt = "INSERT INTO users (first_name,last_name,email,password,phone_number,address)
 VALUES ('$name','$lname','$email','$password','$mobile','$adress')";
// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO users (first_name,last_name,email,password,phone_number,address) VALUES (?,?,?,?,?,?)");

// Bind parameters to the query
$stmt->bind_param("ssssss", $name,$lname,$email,$password,$mobile,$adress); // "ss" means both are strings

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