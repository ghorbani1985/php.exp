<?php
include_once "01-connection.php";

#$_post
$sex_array = ['m','f'];
$userdata = array(
    'fullname' => "Mohsen" .rand(100, 999),
    'age' => rand(10, 100),
    'sex' => $sex_array[rand(0, 1)],
    'isSingle' => rand(0, 1)
);
# Unsafe query
/* $sql = "INSERT INTO people1 (fullname,age,sex,isSingle) values
('{$userdata['fullname']}',{$userdata['age']},'{$userdata['sex']}',{$userdata['isSingle']})";
   if ($mysqli -> query($sql)) {
       echo "User Added..." .PHP_EOL;
   } else {
       echo "Can't Add User..." .PHP_EOL;
   } */

   # Safe query: Use Prepare Statement
$sql = "INSERT INTO people1 (fullname,age,sex,isSingle) values (?,?,?,?)";
$stmt = $mysqli -> prepare($sql);
$stmt -> bind_param('sisb',$userdata['fullname'],$userdata['age'],$userdata['sex'],$userdata['isSingle']);
$stmt -> execute();
$stmt -> close();
