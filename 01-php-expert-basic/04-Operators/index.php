<?php

/**
 *  1 => Arithmetic Operators
 *  2 => Assignment Operators
 *  3 => Comparison Operators
 *  4 => Incrementing and Decrementing Operators
 *  5 => Logical Operators
 *  6 => String Operators
 *  7 => Array Operators
 *  8 => Spaceship Operators ==> Introduce in PHP 7
 */

//Arithmetic Operators
echo "<h3>Arithmetic Operators</h3>";
$x = 20;
$y = 10;
// $z = $x + $y;
// echo $z;
echo ($x + $y);
echo "<br>";
echo ($x - $y);
echo "<br>";
echo ($y - $x);
echo "<br>";
echo ($x * $y);
echo "<br>";
echo ($x / $y);
echo "<br>";
echo ($x % $y);
echo "<br>";
echo ($x - $y);
echo "<br>";
echo ($x + $y * $x); //output not 600 ,it's 220
echo "<br>";
echo ($x / $y + $x);
echo "<br>";
echo ($x / $y % $x);
echo "<br>";
echo ($x * $y - $x / $y);
echo "<br>";
echo ($x * $y - $x / $y * ($y - $x)); //200 - 2 * (-10) = 220
echo "<br>";


//Assignment Operators
echo "<hr><hr><h3>Assignment Operators</h3>";
$k = 5;
echo $k . "<br>";
$k += 50;
echo $k . "<br>"; //55
$k *= 5;
echo $k . "<br>"; //275
$k -= 10;
echo $k . "<br>"; //265
$k /= 2;
echo $k . "<br>"; //132.5
$k %= 10;
echo $k . "<br>"; //2

//Comparison Operators
echo "<hr><hr><h3>Comparison Operators</h3>";
$p = 30;
$h = "30";  //datatype is string
$p2 = "Mohsen";
$m = 50;
var_dump($p == $h); //Returns true if $p is equal to $h	
echo "<br>";
var_dump($p === $h); //Returns true if $p is equal to $h, and they are of the same type	
echo "<br>";
var_dump($p != $p2); //<> same != sign
echo "<br>";
var_dump($p !== $h); //Returns true if $p is not equal to $h, or they are not of the same type	
echo "<br>";
var_dump($p < $m); //true
echo "<br>";
var_dump($p > $m); //false
echo "<br>";
var_dump($p <= $m); //true
echo "<br>";
var_dump($p >= $m); //false
echo "<br>";
var_dump($p < $p2); //false because $p2 is a string and PHP cast it to zero,if we have number in $p2 return the number for example $mohsen63 return 63

//Incrementing and Decrementing Operators
echo "<hr><hr><h3>Incrementing and Decrementing Operators</h3>";
$inc = 20;
echo 'preincrement for $inc is :' . ' ' . ++$inc . "<br>"; //preincrement
echo 'postincrement for $inc save in memory :' . ' ' . $inc++ . "<br>"; //postincrement save in memory
echo 'postincrement for $inc is :' . ' ' . $inc . "<br>"; //22
echo 'predecrement for $inc is :' . ' ' . --$inc . "<br>"; //predecrement
echo 'postdecrement for $inc save in memory :' . ' ' . $inc-- . "<br>"; //postdecrement
echo 'postdecrement for $inc is :' . ' ' . $inc . "<br>"; //20

//String Operators
echo "<hr><hr><h3>String Operators</h3>";
$str = 'My Name ';
$strr = ' is';
$name = ' Mohsen';
echo $str . $strr . $name . '<br>';   //Concatenation 
echo $str .= $strr .= $name .= $name .= $name .= $name .= $name;  //Concatenation assignment	

//Spaceship Operators Introduce in PHP 7   <=> return -1 0 1
echo "<hr><hr><h3>Spaceship Operators Introduce in PHP 7</h3>";
$space = 20;
$spa   = 20;
$spac  = 40;

echo $space <=> $spa, "<br>"; //0

echo $space <=> $spac, "<br>";  //-1

echo $spac <=> $space, "<hr>"; //1

echo 10.876 <=> 10.876, "<br>"; //0

echo 40.97 <=> 10.876, "<br>"; //1

echo 10.876 <=> 40.97, "<hr>"; //-1

echo "a" <=> "a", "<br>"; //0

echo "a" <=> "h", "<br>"; //-1

echo "h" <=> "a", "<br>"; //1

echo "س" <=> "ب"; //1   //work for farsi

//Logical Operators  
echo "<hr><hr><h3>Logical Operators</h3>";
$lo  = 20;
$gic = 40;
$al  = 80;
//&&, and are correct
if (($lo == 20) and ($gic == 30) && ($al == 80)) {
    echo 'condition is TRUE';
} else {
    echo 'condition is FALSE, for &&, and operator' . '<br>';
}
//||, or are correct
if (($lo >= 20) or ($gic == 30) || ($al <= 80)) {
    echo 'condition is TRUE, for ||, or operator' . '<br>';
} else {
    echo 'condition is FALSE';
}
//xor    Return TRUE if either $lo or $gic is true but not both
if (($lo == 20) xor ($gic == 30)) {
    echo 'condition is TRUE, for xor operator' . '<br>';
} else {
    echo 'condition is FALSE';
}
// !=
if ($lo != 26) {
    echo 'condition is TRUE , for != operator'  . '<br>';
} else {
    echo 'condition is FALSE';
}

//Array Operators
echo "<hr><hr><h3>Array Operators</h3>";
$car = array("first" >= "BMW", "second" => "MAZDA", "third" => "VOLVO");
$contery = array("forth" => "GERMANY", "fifth" => "JAPAN", "sixth" => "SWEDEN");
$contery_02 = array("forth" => "GERMANY", "fifth" => "JAPAN", "sixth" => "SWEDEN");
var_dump($car);
echo "<br>";
var_dump($contery);
echo "<br>";
$car_shop = $car + $contery;
// Union +
var_dump($car_shop);
echo "<br>";
// Equality ==
var_dump($car == $contery);
echo "<br>";
var_dump($contery == $contery_02);
echo "<br>";
// Identity === Return TRUE if $car and $contery have same key/value pair of same type in same order
var_dump($car === $contery); //false
echo "<br>";
var_dump($contery == $contery_02);  //true
echo "<br>";
// Inequality !=
var_dump($car != $contery); //true
echo "<br>";
var_dump($contery != $contery_02); //false
echo "<br>";
// Inequality <>  Return TRUE if $car is not equal to $contery
var_dump($car <> $contery); //true
echo "<br>";
var_dump($contery <> $contery_02); //false
echo "<br>";
// Non-Identity	!==  Return TRUE if $car is not identical to $contery
var_dump($car !== $contery); //true
echo "<br>";
var_dump($contery !== $contery_02); //false

//Operator priority in php
/**
 * 1 => ( [ )
 * 2 => (**)
 * 3 => (++ , --)
 * 4 => (!)
 * 5 => (* , /, %)
 * 6 => (+ , – , .)
 * 7 => (<< , >>) left shirt , right shift
 * 8 => (< , > , <= , =>)
 * 9 => (== , != , !== , === , <>)
 * 10 => (&)
 * 11 => (xor , ^)
 * 12 => (&&)
 * 13 => (||)
 * 14 => (?:)
 * 15 => (.= , .= , += , -= , /= , *= , %= , **=) 
 */
