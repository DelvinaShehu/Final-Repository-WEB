<?php
include('databaseConnection.php');

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $brand = sanitizeInput($_POST['brand']);
    $price = sanitizeInput($_POST['price']);
    $model = sanitizeInput($_POST['model']);
    $stock = sanitizeInput($_POST['stock']);

    // Handle image upload
    $targetDir = "uploads/";
    $photo1 = $targetDir . basename($_FILES["photo1"]["name"]);
    $photo2 = $targetDir . basename($_FILES["photo2"]["name"]);
    move_uploaded_file($_FILES["photo1"]["tmp_name"], $photo1);
    move_uploaded_file($_FILES["photo2"]["tmp_name"], $photo2);

    $sql = "INSERT INTO products (brand, price, model, stock, photo1, photo2)
            VALUES ('$brand', '$price', '$model', '$stock', '$photo1', '$photo2')";

    if ($conn->query($sql) === TRUE) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
