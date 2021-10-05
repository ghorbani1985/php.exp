<?php
$configStr = file_get_contents('sftp.json');
# Convert JsonString to Object
$configObj = json_decode($configStr);
echo $configObj -> host ."<br>";
$configObj -> protocol ="ftp";
$configObj -> port = 777;
print_r($configObj);
# Convert PhpObject to JsonString
$configObjAgain = json_encode($configObj);
echo "<br>". $configObjAgain;
file_put_contents('sftp_modified.json', $configObjAgain);
echo "<hr>";
# my HomeWork: how can check validate json in php
$num = 12;
function isValidJson($configStr)
{
    if (is_object(json_decode($configStr))) {
        return true;
    } else {
        return false;
    }
}
echo isValidJson($configStr);  #true
