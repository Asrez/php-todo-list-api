<?php

header("Content-type: application/json");


require("db.php");




$conn = sql_init($dbservername, $dbusername, $dbpassword, $dbdatabase);

$result = giveall($conn, "dict");


if (isset($_GET["word"])){

    foreach ($result as $item){

        if ($item["word"] == $_GET["word"]) print_r(json_encode($item));
        
    }
} else {print_r(json_encode($result)); }



// $result = json_encode(giveall($conn, "dict"));
// print_r($result);
$conn->close();

