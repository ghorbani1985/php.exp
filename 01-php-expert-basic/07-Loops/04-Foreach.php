<?php
echo "<h3>Loops => Foreach </h3>";
$user= [1,2,3,4,5,6];
foreach ($user as $value) {
    echo "$value <br>";
}
echo "<hr><hr><h3>Loops => Conditional Statement in Foreach </h3>";
foreach ($user as $value) {
    if ($value == 1 || $value ==6) {
        continue; //1 and 6 don't echo
    }
    echo "$value <br>";
}
echo "<hr><hr><h3>Loops => Array in Foreach </h3>";
$users = array(
    "userID1" => [
        "name"  => "pedram",
        "email" => "pedram@gmail.com",
        "username" => "pedram87",
        "role" => "editor",
    ],
    "userID2" => [
        "name"  => "maryam",
        "email" => "maryam@yahoo.com",
        "username" => "maryam69",
        "role" => "admin",
    ],
    "userID3" => [
        "name"  => "mohsen",
        "email" => "mohsen@yahoo.com",
        "username" => "mohsen63",
        "role" => "shopmanager",
    ],
);
foreach ($users as $key => $value) {
    echo "$key : {$value ["name"]} | {$value ["role"]} | {$value ["email"]} <br>";
}
echo "<hr>";
foreach ($users as $user) {
    echo "{$user["name"]} عزیز خوش آمدید<br>";
    echo " ایمیل شما{$user["email"]} می باشد<br>";
}
echo "<hr>";
$us = 0;
$keys = array_keys($users);
while ($us < sizeof($users)) {
    echo "{$users[$keys[$us]]["name"]}<br>";
    $us++;
}

echo "<hr><hr><h3>Loops => Foreach Example </h3>";
$users1=[
    'ali'=>[
    'age'=>'19',
    'role'=>'admin'
           ],
    'reza'=>[
    'age'=>20,
    'role'=>'writer'
            ]
    ];
   foreach ($users1 as $key =>$value){
        if ($key == "reza"){
            echo "کاربر گرامی ". $key . " سن شما : ".$value["age"] . " حق دسترسی ".$value["role"];
        }
    }

