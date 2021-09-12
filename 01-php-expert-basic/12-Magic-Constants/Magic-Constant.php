<?php
namespace myfistNamespace;

/*
There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).

__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
ClassName::class
*/
echo "<h3> Majic Constants</h3>";

echo "شماره خط: " .__LINE__ ."<br>";

echo "مسیر فایل :" .__FILE__ . "<br>";

echo "دایرکتوری فایل :" .__DIR__ ."<br>";

function maConst()
{
    echo "نام تابع : " .__FUNCTION__. "<br>";
}
maConst();

class myclass
{
    public function classMajConst()
    {
        return __CLASS__;
    }
}
$myclass = new myclass();
echo "نام کلاس :".$myclass-> classMajConst()."<br>";
class myclass1
{
    public function classMajConstMethod()
    {
        return __METHOD__;
        # return __CLASS__. __METHOD__;
    }
}
$myclass1 = new myclass1();
echo "نام متد در کلاس :".$myclass1-> classMajConstMethod()."<br>";

class myclass2
{
    public function classMajConstNamespace()
    {
        return __NAMESPACE__;
    }
}
$myclass2 = new myclass2();
echo "نام نیم اسپیس در کلاس :".$myclass2-> classMajConstNamespace()."<br>";
