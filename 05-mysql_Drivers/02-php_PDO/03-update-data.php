<?php
include_once "01-connection.php";

#$sql = "UPDATE people1 SET isSingle = 0";
#$sql = "UPDATE people1 SET isSingle = 1 WHERE id = 18";
/* $sql = "UPDATE people1 SET isSingle = 1 WHERE id < ?";
#$sql = "UPDATE people1 SET sex = f WHERE fullname = Reyhaneh";
$stmt = $db->prepare($sql);
$stmt->execute([20]);
echoline($stmt->rowCount()); */



/* $sql = "UPDATE people1 SET isSingle = :isSingle WHERE id < :id";
$stmt = $db->prepare($sql);
$stmt->execute(['id' => 30, "isSingle" => 1]);
echoline($stmt->rowCount()); */


/* $sql = "UPDATE people1 SET sex = :sex WHERE fullname = :fullname";
$stmt = $db->prepare($sql);
$stmt->execute(['fullname' => "Reyhaneh", "sex" => "f"]);
echoline($stmt->rowCount()); */

$sql = "UPDATE people1 SET age = age + 10 WHERE id < :id";
$stmt = $db->prepare($sql);
$stmt->execute(['id' => 17]);
echoline($stmt->rowCount());
