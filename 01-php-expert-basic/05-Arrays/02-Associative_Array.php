<?php
//Associative Array
echo "<h3>Associative Array</h3>";
$cc = array("Iran" => "Tehran", "Japan" => "Tokyo", "Germany" => "Berlin", "England" => "London");
print_r($cc);
echo "<br>";
echo $cc["England"] . "<hr>";
$ages = ["Pedram" => 34, "Maryam" => 33, "Mohsen" => 36, 67, 98, "Pedram" => 38]; //just in php 67 and 98 index automatically
print_r($ages);
echo "<br>" . $ages["Pedram"]; //overwrite in array
