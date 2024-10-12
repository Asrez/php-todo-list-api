<?php

header("Content-type: application/json");


require("db.php");




$conn = sql_init($dbservername, $dbusername, $dbpassword, $dbdatabase);


// $result = giveme($conn, "dict", "word", "text");
// print_r($result);


$result = json_encode(giveall($conn, "dict"));


print_r($result);
$conn->close();

