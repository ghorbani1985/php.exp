<?php
$users = array(
    "userID1" => [
        "name"  => "pedram",
        "email" => "pedram@gmail.com",
        "username" => "pedram87",
    ],
    "userID2" => [
        "name"  => [
            "firstName" => "مریم",
            "lastName"  => "غلامی",
        ],
        "email" => "maryam@yahoo.com",
        "username" => "maryam69",
    ],
);
// Direct change Array to objects
echo "<h3>Direct change Array to objects</h3>";
$usersToObjects = (object) $users;
print_r($usersToObjects);
echo "<hr>";
// Direct change objects to Array
echo "<h3>Direct change objects to Array</h3>";
$usersToArray = (array) $users;
print_r($usersToArray);
echo "<hr>";
// Create Objects
echo "<h3>Create Objects</h3>";
$car = new stdClass;
$car->name = "Audi";
$car->model = 2021;
$car->gear = "Auto";
print_r($car);
echo "<hr>";
echo ($car->name) . '<br>';
$car2 = $car;   //call by reference
$car2->name = "BMW"; //overwrite
echo $car->name . '<br>';
echo $car2->name . '<br>';
//************************************************
$car3 = clone $car; //clone change call by reference to call by value
//************************************************
$car3->name = "MAZDA";
echo $car3->name;
echo "<hr>";
$num_1 = 50;
$num_2 = $num_1;  //variables are call by value
$num_2 = 70;
echo $num_1 . '<br>'; // 50 not 70
