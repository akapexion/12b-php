<?php

if( isset($_GET['save'])  ){
    echo $_GET['nameField'] . "<br>". $_GET['messageField'];
}
else {
    echo "Form not submitted";
}

?>