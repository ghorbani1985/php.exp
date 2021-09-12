<?php
//Multidimensional Array
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
echo "<br>";
print_r($users["userID2"]);
echo "<br>";
$usersfirstName = ($users["userID2"]["name"]["firstName"]);
echo "<br>";
$userslasstName = ($users["userID2"]["name"]["lastName"]);
echo "<br>";
echo "<p style ='direction: rtl;color:green;'> کاربر گرامی  {$usersfirstName}  {$userslasstName}   عزیز، به سیستم خوش آمدید  .</p>";
