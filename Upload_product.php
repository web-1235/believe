<?php
include 'db_connection.php'; // Ensure this file contains your database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['product_image']['tmp_name'];
        $fileName = $_FILES['product_image']['name'];
        $fileType = $_FILES['product_image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        
        // Define allowed file extensions and check
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($fileExtension, $allowedExtensions)) {
            // Set upload directory and file path
            $uploadFileDir = './assets/';
            $dest_path = $uploadFileDir . $fileName;

            // Move the file to the desired directory
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $productName = htmlspecialchars($_POST['product_name']);
                $productDescription = htmlspecialchars($_POST['product_description']);

                // Insert product details into the database
                $stmt = $conn->prepare("INSERT INTO products (product_name, price, image, description) VALUES (?, ?, ?, ?)");
                
                // Replace these with actual values or additional form inputs
                $price = 0.00; // Adjust as necessary

                // Bind parameters
                $stmt->bind_param("ssss", $productName, $price, $fileName, $productDescription);

                if ($stmt->execute()) {
                    echo "Product added successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }
                
                $stmt->close();
            } else {
                echo "Error moving the file.";
            }
        } else {
            echo "Invalid file type.";
        }
    } else {
        echo "No file uploaded or upload error.";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}