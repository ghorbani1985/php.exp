<?php
echo "<h3> Utility Array Functions </h3>";
function printR($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
$userName = ["amin","noshin","avide","lili","amin","avide"];
$userInfo = ["name" => "amin","family" => "mashouf","age" => "36"];
$numbers = [98,76,90,432,654,8754,875,9,43];
echo "<hr><hr><h3> Utility Array Functions => array_filter() </h3>";
function oddNum(int $oddNum)
{
    return ($oddNum & 1);
}
function evenNum(int $evenNum)
{
    return (!($evenNum & 1));
}
#echo oddNum(3);
PrintR($numbers);
printR(array_filter($numbers, "oddNum"));
printR(array_filter($numbers, "evenNum"));
echo "<hr><hr><h3> Utility Array Functions => compact() </h3>";
$name = "mohsen";
$gender = "male";
$age = "36";
$job = "web developer";
$compArray = compact('name', 'gender', 'age', 'job');
PrintR($compArray);
echo "<hr><hr><h3> Utility Array Functions => compact() </h3>";
extract($userInfo);
echo "\$extractName = $name \$extractFamily = $family";
