<?php

/**
 * kind of data types
 * 1 => integer = int
 * 2 => float
 * 3 => string
 * 4 => boolean
 * 5 => array
 * 6 => object
 * 7 => resource
 * 8 => null
 * 
 */
//integers
$a = 456; //decimal number
echo $a;
echo "<br>";
var_dump($a);
echo "<hr>";
$b = -789; //negative number
echo $b;
echo "<br>";
var_dump($b);
echo "<hr>";
$c = 0x1A; //hexadecimal number
echo $c;
echo "<br>";
var_dump($c);
echo "<hr>";
$d = 0123; //octal number
echo $d;
echo "<br>";
var_dump($d);
echo "<hr>";
echo "<hr>";

//floats
$e = 1.98078653;
echo $e;
echo "<br>";
var_dump($e);
echo "<hr>";
$f = 10.2e3;
echo $f;
echo "<br>";
var_dump($f);
echo "<hr>";
$g = 4E-10;
echo $g;
echo "<br>";
var_dump($g);
echo "<hr>";
echo "<hr>";

//string
$h = 'Hello World !, I am Mohsen and 37 years old, born on 1985.02.26';
echo $h;
echo "<br>";
var_dump($h);
echo "<hr>";
echo "<hr>";

//booleans
$i = true;
echo $i;
echo "<br>";
var_dump($i);
echo "<hr>";
$j = false;
echo $j;
echo "<br>";
var_dump($j);
echo "<hr>";
echo "<hr>";

//resource
// $link = mysqli - connect("localhost", "root", "");
// echo $link;
// var_dump($link);

//null
$k = null; //not zero because 0 is a number
echo $k;
echo "<br>";
var_dump($k);
echo "<hr>";


//test

var_dump(0 == ''); // bool(true)
echo "<br>";
var_dump(0 === ''); // bool(false)
echo "<br>";
var_dump(false == ''); // bool(true)
echo "<br>";
var_dump(false === ''); // bool(false)
echo "<br>";
var_dump('false' == 0); // bool(true)
echo "<br>";
var_dump('false' === 0); // bool(false)
echo "<br>";
var_dump('false' == false); // bool(false)
echo "<br>";
var_dump('false' === false); // bool(false)
