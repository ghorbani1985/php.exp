<?php
echo 1 ."<br>";
echo 2 ."<br>";
echo 3 ."<br>";
echo 4 ."<br>";
echo "<hr><hr><h3>Loops => While </h3>";
$i =0;
while ($i <= 10) {
    echo "$i<br>";
    #echo $i . "<br>";
    $i++;
}
echo "<hr><hr><h3>Loops => While With True </h3>";
$j = 0;
while (true) { //you can enter string or a number for example 1 between prentices
    echo "<span style='color:white;background-color:purple;padding:10px;'>$j</span><br>";
    if ($j == 10) {
        break;
    }
    $j++;
}
