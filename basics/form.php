<?php
    include("config/db.php");

    if( isset($_POST['save'])  ){
    $name = $_POST['nameField'];
    $email = $_POST['emailField'];

    $insert_query = "INSERT INTO users(user_name, user_email) VALUES('$name', '$email')";
    $execute = mysqli_query($conn, $insert_query);
}
else {
    echo "Form not submitted";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>
<body>
    
    <form method="POST">
        <input type="text" name="nameField">
        <input type="text" name="emailField">

        <button name="save">SAVE</button>
    </form>


</body>
</html>