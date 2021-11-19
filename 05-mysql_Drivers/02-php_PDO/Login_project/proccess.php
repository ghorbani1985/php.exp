<?php


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    header("location:http://127.0.0.1/miniproject");
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    require "functions.php";



    if (validateData($_POST)) {
        echo "Fill all the textboxes";
        die();
    } else {
        $data = array(
      "name" => $_POST['name'],
      "family" => $_POST['family'],
      "phone" => $_POST['phone'],
      "email" => $_POST['email']
    );
    }
    $mysqliObj = connectDb();

    if (emailAvilable($mysqliObj, $data['email'])) {
        echo "Email is existed<br>";
        echo " <a href='http://127.0.0.1/miniproject'>Return</a>";
        die();
    }
 
    insertInDb($mysqliObj, $data);
}
