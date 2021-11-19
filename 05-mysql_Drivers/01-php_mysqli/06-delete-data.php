<?php
include_once "01-connection.php";

#user data
/* $user_id = 4;
$sql = "DELETE FROM people1 WHERE  id = ? ";

$stmt = $mysqli -> prepare($sql);
$stmt -> bind_param("i", $user_id);
$stmt -> execute();
$stmt -> close(); */

/* $sql = "DELETE FROM people1 WHERE  isSingle = 1 ";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute(); */


$sql = "DELETE FROM people1 WHERE  age = 13 ";

if ($mysqli -> query($sql)) {
    echo "$mysqli->affected_rows Record successfully Deleted!" .PHP_EOL;
} else {
    echo "Failed to Delete!" .PHP_EOL;
}

print_r($mysqli);
