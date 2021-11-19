<?php
include_once "01-connection.php";


/* $sql = "Update people1 set sex = 'm' where  fullname LIKE 'Moh%' ";

if ($mysqli -> query($sql)) {
    echo "$mysqli -> affected_rows Records Successfully Updated" .PHP_EOL;
} else {
    echo "Failed to Update!" .PHP_EOL;
}
print_r($mysqli); */

$ageIncVal = 1;
$sql = "UPDATE people1 SET age = age + ?  WHERE  id < 10 ";

$stmt = $mysqli -> prepare($sql);
$stmt -> bind_param('i', $ageIncVal);
$stmt -> execute();
print_r($stmt);
