<?php
function sum(int $a = null, int $b = null):int
{
    return $a + $b ;
}
echo sum(12, 12.5). "<hr>";
$anonymous = function (int $a = null, int $b = null):int { #function assign to variable
    return $a + $b ;
}; #must add ;
echo $anonymous(12, 12.5);
echo "<hr><hr><h3> Function => CallbackFunction</h3>";
function name(string $string = null)
{
    //return strtoupper($string);
    //return strtolower($string);
    $result = [
        'upper' => strtoupper($string),
        'lower' => strtolower($string),
    ];
    return $result;
}
print_r(name("moHsen"));
//echo name("mohsen");
$asingFuncToVar = name("mohsen GHORBANI");
echo "<hr>".$asingFuncToVar ['upper'];
echo "<hr>".$asingFuncToVar ['lower'];
echo "<hr><hr><h3> Function => AnonymousFunction</h3>";
function anonFunc(string $string = null, $callBack =null)
{
    $result = [
        'upper' => strtoupper($string),
        'lower' => strtolower($string),
    ];
    if (is_callable($callBack)) {
        call_user_func($callBack, $result);
    } else {
        echo "false";
    }
}
anonFunc("mohsen", function ($name) {  //$name == $result
    print_r($name);
});
anonFunc("mohsen GHORBANI", function ($name) {
    echo "<hr>".$name['upper'];
    echo "<hr>".$name['lower'];
});
