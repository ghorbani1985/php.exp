<?php
echo "<h3> Array Functions </h3>";
function printR($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
$userName = ["amin","noshin","avide","lili","amin","avide"];
$userInfo = ["name" => "amin","family" => "mashouf","age" => "36"];
echo "<h3> Array Function => count()</h3>";
echo count($userName);
echo "<hr><hr><h3> Array Function => sizeof()</h3>";
echo sizeof($userName);
echo "<hr><hr><h3> Array Function => array_keys()</h3>";
printR(array_keys($userInfo, "mashouf"));
echo "<hr><hr><h3> Array Function => array_values()</h3>";
printR(array_values($userInfo));
echo "<hr><hr><h3> Array Function => array_key_exists()</h3>";
if (array_key_exists("name", $userInfo) || array_key_exists("famly", $userInfo)) {
    echo "کلید نام یا نام خانوادگی در آرایه وجود دارد.";
} else {
    echo "هیچکدام از کلیدهای آرایه وجود ندارد.";
}
echo "<hr><hr><h3> Array Function => in_array()</h3>";
if (in_array("nazanin", $userInfo)) {
    echo "کاربر گرامی نام شما در آرایه وجود دارد";
} else {
    echo "کاربر گرامی نام شما در آرایه وجود ندارد";
}
echo "<hr><hr><h3> Array Function => is_array()</h3>";
$name = "mohsen";
if (is_array($name)) {
    echo "متغییر آرایه می باشد";
} else {
    echo "متغییر آرایه نمی باشد";
}
echo "<hr><hr><h3> Array Function => shuffle()</h3>";
printR($userName) . "<br>";
shuffle($userName);
printR($userName);
echo "<hr><hr><h3> Array Function => sort()</h3>";
sort($userName);
printR($userName);
$userLength = count($userName);
for ($p=0; $p <$userLength ; $p++) {
    echo $userName[$p]."<br>";
}
echo "<hr><hr><h3> Array Function => max()</h3>";
$numbers = [999800,8876,7768990007,66554437899,66775,6,8,444,888877666];
print_r($numbers);
echo "<br>".max($numbers);
echo "<hr><hr><h3> Array Function => min()</h3>";
echo min($numbers);
echo "<hr><hr><h3> Array Function => end()</h3>";
echo end($numbers);
echo "<hr><hr><h3> Array Function => array_sum()</h3>";
echo array_sum($numbers);
echo "<hr><hr><h3> Array Function => array_rand()</h3>";
echo array_rand($userInfo)."<br>";
echo array_rand($numbers);
