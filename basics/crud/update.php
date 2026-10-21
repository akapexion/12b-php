<?php
    include("../config/db.php");

    if(isset($_POST['save'])){
        // $productName = $_POST['productName'];
        // $productPrice = $_POST['productPrice'];
        // $productCreatedAt = $_POST['productCreatedAt'];
        extract($_POST);

        $update_query = "UPDATE products SET product_name = '$productName', product_price = $productPrice, product_created_at = '$productCreatedAt' WHERE product_id = '$_GET[update]'";

        $result = mysqli_query($conn, $update_query);

        header("location: read.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>

    <?php
        $select_query = "SELECT * FROM products WHERE product_id = '$_GET[update]'";
        $result = mysqli_query($conn, $select_query);
        $display = mysqli_fetch_array($result);
    ?>
    <form method="POST">
        <input type="text" name="productName" value="<?php echo $display['product_name'];  ?>">

        <input type="number" name="productPrice" value="<?php echo $display['product_price'];  ?>">
        <input type="date" name="productCreatedAt" value="<?php echo $display['product_created_at'];  ?>">

        <button name="save">SAVE</button>
    </form>
</body>
</html>