<?php

function connectDb()
{
    $mysqliObj = new mysqli("localhost", "root", "", "oophp");
    if ($mysqliObj->connect_errno) {
        echo $mysqliObj->connect_error;
        die();
    }
    return $mysqliObj;
}

function getAllData($mySqliObj, $tableName = "names")
{
    return $mySqliObj->query("SELECT * FROM $tableName");
}

function validateData($data)
{
    foreach ($data as $key => $value) {
        if (empty($value)) {
            return $key;
        }
    }
}

function emailAvilable($mySqliObj, $email)
{
    $emails = $mySqliObj->query("SELECT email FROM names where email = '$email' ");
    if ($emails->num_rows) {
        return true;
    }
}

function insertInDb($mySqliObj, $data)
{
    $prepareData = $mySqliObj->prepare("INSERT INTO names VALUES(?, ?,?,?)");
    $prepareData->bind_param("ssss", $data['name'], $data['family'], $data['phone'], $data['email']);
    $prepareData->execute();
    return true;
}
