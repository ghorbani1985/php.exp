<?php
echo "<h3> Function => Argument By Value </h3>";
function argByValue($num = null)
{
    return $num *= $num;
}
echo $num = 10; echo "<br>";
echo argByValue($num)."<br>"; echo $num;
echo "<hr><hr><h3> Function => Argument By Reference </h3>";
function argByReference(&$num = null)# & chance argument by value to by reference
{
    return $num *= $num;
}
echo $num = 10; echo "<br>";
echo argByReference($num)."<br>"; echo $num."<br>" ; echo $num += 10;
echo "<hr><hr><h3> Function => Variables Scope </h3>";
function variableScope()
{
    return $varScope = "اسکوپ در تابع ها";
}
echo variableScope() . "<hr>";
echo $varScope;  //error because this variable define into function
$varScope = "اسکوپ در تابع ها";
function variableScope2()
{
    #return $varScope;  //error because this variable undefine
}
echo variableScope2() . "<hr>";
$globalVar= "متغییر عمومی و قابل استفاده داخل اسکوپ تابع ها";
function variableScope3()
{
    global $globalVar;  #change local variable to global
    return $globalVar;
}
echo variableScope3() . "<hr>";
$globalVar = "دیگر خطایی وجود ندارد<br>";
echo variableScope3();
echo "<hr><hr><h3> Function => Dynamic Function Calls </h3>";
function dynamicFunCall($name = null)
{
    return "اسم شما $name است<br>";
}
echo dynamicFunCall() ."<br>";
$call = "dynamicFunCall";
echo $call("محسن");
