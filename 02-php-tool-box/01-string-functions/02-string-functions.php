<?php
echo "<h3> String Functions</h3><hr>";
echo "<h3> String Function => explode()</h3>";
$str = "Hello world. It's a beautiful day. بر اساس فضای خالی";
print_r(explode(" ", $str));
echo "<hr><hr><h3> String Function => implode()</h3>";
$arr = ['خوش آمدید', 'شما', 'بر', 'درود',];
echo implode(" <= ", $arr);
echo "<hr><hr><h3> String Function => substr()</h3>";
echo substr($str, 13);
echo "<hr><hr><h3> String Function => strstr()</h3>";
echo strstr($str, "ی");
echo "<hr><hr><h3> String Function => str_replace()</h3>";
echo str_replace($str, "بر اساس فضای خالی", "whitespace");
echo "<hr><hr><h3> String Function => str_repeat()</h3>";
echo str_repeat("Hello ", 8);
echo "<hr><hr><h3> String Function => str_shuffle()</h3>";
echo str_shuffle("Hello Mohsen Ghorbani");
echo "<hr><hr><h3> String Function => str_word_count()</h3>";
echo str_word_count($str);
echo "<hr><hr><h3> String Function => strtok()</h3>";
$string = "Hello World. Beautiful day today.";
$token = strtok($string, " ");
while ($token == true) {
    echo "$token<br>";
    $token = strtok(" ");
}
echo "<hr><hr><h3> String Function => printf()</h3>";
$name = "Mohsen";
$age = 36;
$city = "Rasht";
printf("%s is %u years old and live in %s .", $name, $age, $city);
echo "<hr><hr><h3> String Function => Camel Case</h3>";
// $str = "iN the nAme of god";
// function strToCamel(string $str):string
// {
//     return lcfirst(str_replace(" ", null, ucwords(strtolower($str))));
// }
// echo strToCamel($str);
