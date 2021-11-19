<?php
include_once "01-connection.php";

/* $sql = "SELECT * FROM people1 WHERE id > 8";
$result = $mysqli -> query($sql); */
/* echo "<table>";
while ($row = $result -> fetch_object()) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td style='border: 1px solid ;padding: 25px;'>$value</td>";
    }
    echo "</tr>";
}
echo "</table>"; */


/* echo "<hr>";
echo "<pre>";
while ($rowArray = $result -> fetch_array()) {
    print_r($rowArray);
}
echo "</pre>";
echo "<hr>";
echo "<pre>";
while ($rowObject = $result -> fetch_object()) {
    print_r($rowObject);
}
echo "</pre>";
echo "<hr>";*/
/* $sql = "SELECT AVG(age) AS AgeAverage,COUNT(*) AS Populations FROM people1";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($AgeAverage, $Populations);
$stmt -> fetch();
echo "Age Average is : $AgeAverage and Populations is : $Populations"; */

$sql = "SELECT fullname,age FROM people1";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($fullname, $age);
while ($stmt -> fetch()) {
    echo "<div>$fullname : $age</div>";
}
echo "<hr>";
$sql2 = "SELECT * FROM people1";
$stmt2 = $mysqli -> prepare($sql2);
$stmt2 -> execute();
$stmt2 -> bind_result($id, $fullname, $age, $sex, $isSingle);
while ($stmt2 -> fetch()) {
    echo "<div>$id : $fullname : $age : $sex : $isSingle</div>";
}
echo "<hr>";
$sql3 = "SELECT * FROM people1";
$stmt3 = $mysqli -> prepare($sql3);
$stmt3 -> execute();
$stmt3 -> store_result();
echo $stmt3 -> affected_rows;
print_r($stmt3);
