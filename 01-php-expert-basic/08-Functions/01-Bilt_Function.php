<?php
/*
1 => A function is a block of statements that can be used repeatedly in a program.
2 => A function will not execute automatically when a page loads.
3 => A function will be executed by a call to be function.
syntax:
function functionname(){
//code to be executed
}
*/
// function printMsg()
// {
//     echo "اولین تابع"; //don't use echo in functions
// }

// printMsg();
echo "<h3> Function => User Defined </h3>";
function firstFunction()
{
    return "اولین تابع بوسیله return خروجی دارد";
}
echo firstFunction();
echo "<hr><hr><h3> Function => With Parameter and Argument </h3>";
function doLoggedin($userEmail)#parameter
{
    return "کاربر گرامی به سیستم وارد شدید و ایمیل شما $userEmail می باشد";
}
                  #argument
echo doLoggedin("user@gmail.com");
echo "<hr><hr><h3> Function => With Tow Parameters and Tow Arguments </h3>";
function doLoggedinInfo($userEmail, $password)#parameters
{
    return "کاربر گرامی به سیستم وارد شدید و اطلاعات کاربری شما $userEmail $password می باشد";
}
                     #arguments
echo doLoggedinInfo("user@gmail.com", "12345");
echo "<hr><hr><h3> Function => With Tow Parameters and Null Arguments </h3>";
function doLoggedinInfoNull($userEmail = null, $password = null)#parameters
{
    return "کاربر گرامی به سیستم وارد شدید و اطلاعات کاربری شما $userEmail $password می باشد";
}
echo doLoggedinInfoNull(); //don't show fatal error
echo "<hr><hr><h3> Function => With Default Parameters and Default Arguments </h3>";
function sum($x = 10, $y = 30, $z = 0)
{
    return $x + $y + $z; #whiteout enter arguments function return 40
}
echo sum(50.5, 80, 0, 70); //70 don't work because function have two parameters
echo "<hr><hr><h3> Function => With func_get_args(); </h3>";
function sumAll()
{
    return $args = func_get_args();
}
var_dump(sumAll(1, 9, 768, 654, 90887)); //return array and all must be number
echo "<hr><hr><h3> Function => With array_sum(); </h3>";
function sumAll2()
{
    $args = func_get_args();
    return array_sum($args);
}
echo sumAll2(1, 9, 768, 654, 90887);
echo "<hr><hr><h3> Function => With array_sum(); for after php 5.6 v. </h3>";
function sumAll3(...$args)
{
    return array_sum($args);
}
echo sumAll3(1, 9, 768, 654, 9088665557);
