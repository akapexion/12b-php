<?php
    include("../config/db.php");

    if(isset($_POST['findProduct'])){
        $select_query = "SELECT * FROM products WHERE product_name LIKE '%$_POST[searchProduct]%'";
        $result = mysqli_query($conn, $select_query);
    }
    else {
        $select_query = "SELECT * FROM products";
        $result = mysqli_query($conn, $select_query);
    }

    if(isset($_GET['delete'])){
        $delete_query = "DELETE FROM products WHERE product_id = '$_GET[delete]'";
        $result = mysqli_query($conn, $delete_query);

        echo "<script>
            alert('Product Deleted Successfully');
            location.assign('read.php');
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>

    <form method="post">
        <input type="text" name="searchProduct">

        <button name="findProduct">Find</button>
        <a href="read.php">Clear</a>
    </form>
    <table>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php
            // var_dump($result);
            while($display = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $display['product_id']  ?>  </td>
            <td> <?php echo $display['product_name']  ?>   </td>
            <td>  <?php echo $display['product_price']  ?>  </td>
            <td>
                <a href="update.php?update=<?php echo $display['product_id'];?>">Edit</a>
                <a href="?delete=<?php echo $display['product_id'];?>">Delete</a>
            </td>
        </tr>

        <?php
            }
        ?>


    </table>
</body>
</html>