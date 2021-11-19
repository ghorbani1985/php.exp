<?php
include_once "01-connection.php";

/* $sql = "INSERT INTO people1 (fullname,age) VALUE (?,?)";
$stmt = $db->prepare($sql);
$stmt->execute(["Reyhaneh", 30]); */


/* $sql = "INSERT INTO people1 (fullname,age) VALUE (:fullname,:age)";
$stmt = $db->prepare($sql);
$stmt->execute(["fullname" => "Reyhaneh", "age" => 30]);
echoline("Insert ID: " . $db-> lastInsertId()); */

$sql = "INSERT INTO people1 (fullname,age,sex) VALUE (?,?,?)";
$stmt = $db->prepare($sql);
$users = [
    ["amin" , 28 , "m"],
    ["mohsen" , 36 , "m"],
    ["reyhaneh" , 25 , "f"]
];
$db->beginTransaction();
foreach ($users as $user) {
    $stmt->execute($user);
    if ($user[0] == "amin") {
        exit;
    }
}
$db->commit();
