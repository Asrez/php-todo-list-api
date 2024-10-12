<?php




$dbservername = "localhost";
$dbusername = "todo_list";
$dbpassword = "01todo_list";
$dbdatabase = "todo_list";
// $dbtable = "tasks";
// $dbtablefields = "`id` INT DEFAULT NULL AUTO_INCREMENT,
//                  `title` VARCHAR(255) DEFAULT NULL,
//                  `description` TEXT DEFAULT NULL,
//                  PRIMARY KEY(id)";



function sql_init(string $dbservername, string $dbusername, string $dbpassword, string $dbdatabase): mysqli
{

    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbdatabase);

    if ($conn->error) die("Database connection error: ".$conn->error);

    return $conn;

}



function giveme(mysqli $conn, string $table, string $column, string $value): array
{
    $sql = "SELECT * FROM `$table` WHERE $column = ?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) return ["Database error!"];

    $stmt->bind_param('s', $value);
    
    $stmt->execute();

    $response = $stmt->get_result();

    $stmt->close();

    $result = [];
    if ($response->num_rows > 0){
        while ($row = $response->fetch_assoc()){
            $result[] = ["word" => $row["word"], "translate" => $row["translate"]];
        }
    }
    
    
    return $result;

}



function giveall(mysqli $conn, string $table): array
{
    $sql = "SELECT * FROM `$table`";

    $stmt = $conn->prepare($sql);

    if (!$stmt) return ["Database error!"];

    $stmt->execute();

    $response = $stmt->get_result();

    $stmt->close();

    $result = [];
    if ($response->num_rows > 0){
        while ($row = $response->fetch_assoc()){
            $result[] = ["word" => $row["word"], "translate" => $row["translate"]];
        }
    }
    
    
    return $result;
}
