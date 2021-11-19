<?php
include_once "lib.php";
list($host, $database, $user, $pass) = ["localhost","world","root",""];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $pass);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echoline("Successfully connect to mysql!");
} catch (PDOException $e) {
    //throw $e;
    echoline("PDO Error: Failed to connect: " . $e -> getMessage() . "IN LINE: " .$e-> getLine());
    exit();
}
#var_dump($db);

#echoline($db->getAttribute(PDO::ATTR_CONNECTION_STATUS));
