<?php
include_once "01-connection.php";

/* $sql = "DELETE FROM people1 WHERE age > :age";
$stmt = $db-> prepare($sql);
$stmt->execute(["age" => 60]);
echoline("Deleted Rows: " . $stmt->rowCount()); */

$sql = "DELETE FROM people1 WHERE id = ?";
$stmt = $db-> prepare($sql);
$stmt->execute([22]);
echoline("Deleted Rows: " . $stmt->rowCount());
