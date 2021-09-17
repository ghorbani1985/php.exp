<?php
echo "<h3> Utility Array Functions</h3>";
function A($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
#utility array
$string = "test";
$userName = ["amin","noshin","avide","lili","amin","avide"];
$userInfo = ["name" => "amin","family" => "mashouf","age" => "36"];
echo "<h3> Array Function => array_chunk()</h3>";
A($userName);
echo "<hr>";
A(array_chunk($userName, 2));
echo "<hr><hr><h3> Array Function => array_merge()</h3>";
A(array_merge($userName, $userInfo));
echo "<hr><hr><h3> Array Function => array_unique()</h3>";
A(array_unique($userName));
echo "<hr><hr><h3> Array Function => array_reverse()</h3>";
A($userName);
A(array_reverse($userName));
echo "<hr><hr><h3> Array Function => array_search()</h3>";
echo array_search("avide", $userName). "<br>";
echo array_search("36", $userInfo);
echo "<hr><hr><h3> Array Function => array_diff()</h3>";
$car = ["BMW" => "black", "BENZ" => "blue", "MAZDA" => "white", "FORD" => "red","SCANIA" => "green"];
$company = ["VOLVO" => "black", "MACK" => "blue", "FIAT" => "white","KIA" => "pink"];
$carColor = ["VOLVO" => "black", "MACK" => "blue", "FIAT" => "white","HONDA" => "purple"];
A(array_diff($car, $company, $carColor));
echo "<hr><hr><h3> Array Function => array_slice()</h3>";
A(array_slice($car, 2));
echo "<hr><hr><h3> Array Function => array_splice()</h3>";
array_splice($car, 2, 2, $company);
A($car);
echo "<hr><hr><h3> Array Function => array_shift()</h3>";
A($carColor);
echo array_shift($carColor);
A($carColor);
echo "<hr><hr><h3> Array Function => array_push()</h3>";
A($carColor);
echo array_push($carColor, "brown", "gray");
A($carColor);
echo "<hr><hr><h3> Array Function => array_pop()</h3>";
A($carColor);
echo array_pop($carColor);
A($carColor);
echo "<hr><hr><h3> Array Function => array_fill()</h3>";
$carColor = array_fill(1, 5, "orange");
A($carColor);
