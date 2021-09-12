<?php
$j = 0;
while (true) { //you can enter string or a number for example 1 between prentices
    echo "<span style='color:white;background-color:purple;padding:10px;margin:5px;'>$j</span><br><br>";
    if ($j == 10) {
        break;
    }
    $j++;
}
echo "<hr><hr><h3>Loops => Do While</h3>";
do {
    echo "<span style='color:white;background-color:purple;padding:10px;'>$j</span><br><br>";
    if ($j == 20) {
        break;
    }
    $j++;
} while (true);
