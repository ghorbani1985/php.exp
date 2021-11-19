<?php

$mysqli = new mysqli("localhost", "root", "", "shop");
$mysqli -> set_charset('utf8');

$sql = "CREATE TABLE Customers(
    id int PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(30),
    LastName varchar(40),
    Mobile varchar(11),
    Email varchar(30),
    UserName varchar(40),
    PassWord varchar(40)
);";
$mysqli -> query($sql);

$ShopUsers = array(
  'FirstName' => "UserF" .rand(100, 999),
  'LastName' => "UserL" .rand(100, 999),
  'Mobile' => "0911" .rand(10000000, 99999999),
  'Email' => "UserEmail" .rand(25, 100). "@gmail.com",
  'UserName' => "ShopUser" .rand(100, 999),
  'PassWord' => "ShopPass" .rand(100, 999)
);

$sql = "INSERT INTO Customers (FirstName,LastName,Mobile,Email,UserName,PassWord) VALUES (?,?,?,?,?,?)";
$stmt = $mysqli -> prepare($sql);
$stmt -> bind_param('ssisss', $ShopUsers['FirstName'], $ShopUsers['LastName'], $ShopUsers['Mobile'], $ShopUsers['Email'], $ShopUsers['UserName'], $ShopUsers['PassWord']);
$stmt -> execute();
$stmt -> close();

$mobileIncVal = 1;
$sql = "UPDATE Customers SET Mobile = 9112495538  WHERE  id = ? ";

$stmt = $mysqli -> prepare($sql);
$stmt -> bind_param('i', $mobileIncVal);
$stmt -> execute();

$sqlDelete = "DELETE FROM Customers WHERE  id <= 3 ";
$mysqli -> query($sqlDelete);

print_r($mysqli);

echo "<hr>";



$sql = "SELECT FirstName,LastName FROM Customers";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($FirstName, $LastName);
while ($stmt -> fetch()) {
    echo "<div>$FirstName : $LastName</div>";
}
print_r($stmt);
echo "<hr>";
$sql2 = "SELECT Email FROM Customers";
$stmt2 = $mysqli -> prepare($sql2);
$stmt2 -> execute();
$stmt2 -> store_result();
echo $stmt2 -> affected_rows;
#print_r($stmt2);
echo "<hr>";
$sql = "SELECT * FROM Customers";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($id, $FirstName, $LastName, $Mobile, $Email, $UserName, $PassWord);
while ($stmt -> fetch()) {
    echo "<div>$id | $FirstName | $LastName | $Mobile | $Email | $UserName | $PassWord</div>";
}
