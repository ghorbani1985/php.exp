<?php
include_once "01-connection.php";

function echoPeople($row)
{
    echo implode(" - ", (array)$row) .PHP_EOL;
}
function echoPeoples($rows)
{
    foreach ($rows as $row) {
        echoPeople($row);
    }
}
# Use FetchAll
$sql = "SELECT * FROM people1 WHERE age < 30";
$stmt = $db->prepare($sql);
$stmt->execute();
/* echoline("---------- FechAll()  -------------");
 $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
echoPeoples($rows); */

/* echoline("---------- Fetch()  -------------");
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echoPeople("$row->fullname : $row->age");
} */

$sql = "SELECT * FROM people1 WHERE id = 20";
$stmt = $db->prepare($sql);
$stmt->execute();
echoline("---------- Get Single Row  -------------");
$user20 = $stmt->fetch(PDO::FETCH_OBJ);
echoline("$user20->fullname : $user20->sex");
