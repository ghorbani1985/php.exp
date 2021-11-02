<?php
include_once "01-connection.php";
$sql = "
  CREATE TABLE *TABLE*(
    id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(256),
    age int UNSIGNED,
    sex ENUM('f','m'),
    isSingle boolean DEFAULT 1
  );";
for ($i=1; $i <=3 ; $i++) {
    $tableName = str_replace("*TABLE*", "people$i", $sql);
    if ($mysqli -> query($tableName)) {
        echo "Table successfully created!" .PHP_EOL;
    } else {
        echo "Table is not created!" .PHP_EOL;
    }
}
/* for ($i=1; $i <=77 ; $i++) {
    $mysqli -> query("drop table people$i");
} */
print_r($mysqli);


#sample code the same wizard of WORDPRESS
/* $servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// select dbname
$conn->select_db('myDB');


// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
 */
