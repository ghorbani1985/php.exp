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
    "userID3" => [
        "name"  => "mobin",
        "email" => "mobin@gmail.com",
        "username" => "mobin_new",
    ]
);
print_r($users);
echo "<hr>";
// Array to Json
$jsonStr = json_encode($users);
print_r($jsonStr);
echo "<hr>";
// Json to Array assoc
$jsonArray = json_decode($jsonStr, 1);
print_r($jsonArray);
echo "<br>";
echo ($jsonArray["userID2"]["name"]["firstName"]);
echo "<hr>";
// Json to stdClass object
$jsonObject = json_decode($jsonStr);
print_r($jsonObject);
echo "<br>";
echo ($jsonObject->userID3->name); //if array id be just number you must it in {1}
echo "<hr>";
// Direct change Array to objects
$usersToObjects = (object) $users;
print_r($usersToObjects);
echo "<hr>";
//my practice 
$siteTech = array(
    "frontEnd" => [
        "fe" => "HTML",
        "fe_2" => "CSS",
        "fe_3" => "JS"
    ],
    "backEnd" => [
        "be" => "PHP",
        "be_2" => "DB",
    ],
);
print_r($siteTech);
echo "<br>";
$siteTechJson = json_encode($siteTech); //json
print_r($siteTechJson);
echo "<br>";
$siteTechArray = json_decode($siteTechJson, 1); //assoc
print_r($siteTechArray);
echo "<br>";
echo ($siteTechArray["backEnd"]["be"]);
echo "<br>";
$siteTechObject = json_decode($siteTechJson); //object
print_r($siteTechObject);
echo "<br>";
echo ($siteTechObject->frontEnd->fe_2);
echo "<br>";
$siteTechToObject = (object) $siteTech;
print_r($siteTechToObject);
