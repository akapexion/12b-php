<?php
    include("../config/db.php");

    if(isset($_POST['save'])){
        // $productName = $_POST['productName'];
        // $productPrice = $_POST['productPrice'];
        // $productCreatedAt = $_POST['productCreatedAt'];
        extract($_POST);

        $insert_query = "INSERT INTO products(product_name, product_price, product_created_at) VALUES('$productName', $productPrice, '$productCreatedAt')";

        $result = mysqli_query($conn, $insert_query);

        header("location: read.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="productName">

        <input type="number" name="productPrice">
        <input type="date" name="productCreatedAt">

        <button name="save">SAVE</button>
    </form>
</body>
</html>