<?php

// indexed
// $emp = ["Sami", "sami@gmail.com", 20];

// echo $emp[2];
// print_r($emp);
// echo "<br>";
// echo "<br>";
// var_dump($emp);
// echo $emp[1];

// associative

// $emp = ["name" => "Sami", "email" => "sami@gmail.com", "age" => 20];

// echo $emp["age"];

// multideimentional
$emp = ["name" => ["name1" => "Abdul", "name2" => "Sami"], "email" => ["main" => "sami@gmail.com", "backup" => "abcsami@gmail.com"], "age" => 20 ];

// var_dump($emp);
echo $emp["name"]["name2"];
echo $emp["email"]["main"];

?>