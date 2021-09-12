<?php
#declare(strict_types=1); #control for entry data types,must be first line
echo "<h3> Function => TypeHinting and TypeDeclaration </h3>";
function typehinting(int $a = null, int $b = null)
{
    return $a + $b ;
}
#echo typehinting(70, "90 days"); //fatal error because "90 days" are strings
#echo typehinting(70, "90"); //fatal error because "90" is string
echo typehinting(70, 90);
echo "<hr><hr><h3> Function => TypeHinting and TypeDeclaration in output </h3>";
function typehintingOutput(float $a = null, int $b = null):int #output must be int
{
    return $a + $b ;
}
echo typehintingOutput(42.4, 65) ."<hr>"; //fatal error because "42.5" is float and output must be int
function doLoggin(string $username = null, string $password = null):string
{
    return "$username" .' '. "$password" ;
}
echo doLoggin("mohsen@gmail.com", "1234@879") ."<hr>";

function fib($n)  //fibonacci
{
    if ($n<2) {
        return $n;
    }
    return fib($n-1) + fib($n-2);
}
echo fib(6);
