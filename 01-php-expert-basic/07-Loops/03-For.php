<?php
$j = 0;
while (true) { //you can enter string or a number for example 1 between prentices
    echo "<span style='color:white;background-color:purple;padding:10px;margin:5px;'>$j</span><br><br>";
    if ($j == 10) {
        break;
    }
    $j++;
}
echo "<hr><hr><h3>Loops => For </h3>";
// for (initialize; conditional ; increment/decrement) {
//     # code...
// }
for ($i=0; $i <=10 ; $i++) {
    echo "<span style='color:white;background-color:tomato;padding:10px;margin:5px;'>$i</span><br><br>";
}
echo "<hr>";
for ($h=10; $h >=0 ; $h--) {
    echo "<span style='color:black;background-color:yellow;padding:10px;margin:5px;'>$h</span><br><br>";
}
echo "<hr><hr><h3>Loops => My  For Example </h3>";
for ($h=100; $h <=200 ; $h+=10) {
    echo "<span style='color:white;background-color:green;padding:10px;margin:5px;'>$h</span><br><br>";
}
echo "<hr><hr><h3>Loops => Array with For </h3>";
$users = array(["maryam",30,"php"],["mohsen",36,"wordpress"],["omid",22,"ui/ux"],["liela",33,"laravel"]);
for ($k=0; $k <= 3 ; $k++) {
    echo "name : {$users[$k][0]} | age : {$users[$k][1]} | expert: {$users[$k][2]}<br>";
}
echo "<hr><hr><h3>Loops => Array with For Dynamic way</h3>";
$users = array(["maryam",30,"php"],["mohsen",36,"wordpress"],["omid",22,"ui/ux"],["liela",33,"laravel"]);
for ($k=0; $k < sizeof($users) ; $k++) {
    echo "name : {$users[$k][0]} | age : {$users[$k][1]} | expert: {$users[$k][2]}<br>";
}
echo "<hr><hr><h3>Loops => Array with While </h3>";
$exp = 0;
while ($exp <= 3) {
    echo "name : {$users[$exp][0]} | age : {$users[$exp][1]} | expert: {$users[$exp][2]}<br>";
    $exp++;
}
echo "<hr><hr><h3>Loops => Array with Do-While </h3>";
$exp2=0;
do {
    echo "name : {$users[$exp2][0]} | age : {$users[$exp2][1]} | expert: {$users[$exp2][2]}<br>";
    $exp2++;
} while ($exp2 <= 3);
