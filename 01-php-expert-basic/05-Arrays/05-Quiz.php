<?php
$academy = array(
    "student_ID_1" => [
        "name" => [
            "firstName" => "Afshin",
            "lastName"  => "Tehrani",
        ],
        "email" => "afshin_tehrani@gmail.com",
        "username" => "afshin_teh99",
        "course"  => "php_exp",
    ],
    "student_ID_2" => [
        "name" => [
            "firstName" => "Milad",
            "lastName"  => "Karimi",
        ],
        "email" => "milad_karimi@gmail.com",
        "username" => "milad@karimi!",
        "course"  => "wordpress_exp",
    ],
    "student_ID_3" => [
        "name" => [
            "firstName" => "Poya",
            "lastName"  => "Fard",
        ],
        "email" => "poya_fard@gmail.com",
        "username" => "poya_fard_&&",
        "course"  => "UI_exp",
    ],
);
$studentObjects = (object) $academy;
print_r($studentObjects);
