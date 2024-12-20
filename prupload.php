<?php
// Database connection
include "db.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle image upload
    $targetDir = "uploads/";
    $imageName = basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $imageName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        // Insert image data into pr_img table
        $insertImage = "INSERT INTO pr_img (src) VALUES ('$targetFilePath')";
        if ($conn->query($insertImage) === TRUE) {
            $imageId = $conn->insert_id;

            // Insert product data into product table
            $insertProduct = "INSERT INTO product (name, qty, discription, price, pr_img_id) 
                              VALUES ('$name', '$qty', '$description', '$price', $imageId)";
            if ($conn->query($insertProduct) === TRUE) {
                echo "Product uploaded successfully!";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

$conn->close();
?>
