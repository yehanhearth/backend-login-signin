<?php
include "db.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $name=$_POST["name"];
// $qty=$_POST["qty"];
// $discription=$_POST["disc"];
// $price=$_POST["price"];
$name=mysqli_real_escape_string($conn,$_POST["name"]);
$qty=mysqli_real_escape_string($conn,$_POST["qty"]);
$disc=mysqli_real_escape_string($conn,$_POST["disc"]);
$price=mysqli_real_escape_string($conn,$_POST["price"]);
echo($name);

if (empty($name)) {
    echo("Enter Product Name");
}elseif (empty($qty)) {
    echo("Please Enter Quentity");
}elseif (empty($disc)) {
    echo("Please Enter Discription");
}elseif (empty($price)) {
    echo("please Enter Price");
}else {

    // Prepare the SQL INSERT query
$upload = "INSERT INTO product (name,qty,discription,price)
VALUES ('$name','$qty','$disc','$price')";
// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO product (name,qty,discription,price) VALUES (?,?,?,?)");

// Bind parameters to the query
$stmt->bind_param("ssss", $name,$qty,$disc,$price); // "ss" means both are strings

// Execute the query
if ($stmt->execute()) {
   echo "Product Uploaded successfully";
} else {
   echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
}
?>