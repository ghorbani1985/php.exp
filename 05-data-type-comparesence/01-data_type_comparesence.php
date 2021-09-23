<?php
echo "<h3> Data Type Comparesence </h3>";
echo "<h3> Data Type Comparesence => gettype() </h3>";
$getType = "70";
echo gettype($getType). "<br>";
$getTypeD = 76.98;
echo gettype($getTypeD) ."<br>";
$getTypeArrayNull = [];
echo gettype($getTypeArrayNull) ."<br>";
$getTypeNum = 7;
echo gettype($getTypeNum) ."<br>";
$getTypeArray = ["mohsen","edwin","ghorbani"];
echo gettype($getTypeArray) ."<br>";
$getTypeNull = null;
echo gettype($getTypeNull) ."<br>";
echo gettype(" ") ."<br>";
echo gettype(true) ."<br>";
echo gettype(false) ."<br>";
$getTypeStdClass = new stdClass;
echo gettype($getTypeStdClass) ."<br>";
$getTypeStdClass = tmpfile();
echo gettype($getTypeStdClass) ."<br>";
echo "<hr><hr><h3> Data Type Comparesence => empty() </h3>";
if (!empty($getTypeD)) {
    echo "فرم تکمیل شد" . "<br>";
} else {
    echo "لطفا فیلد مورد نظر را تکمیل نمایید";
}
if (empty(gettype(" "))) {
    echo "فرم تکمیل شد";
} else {
    echo "لطفا فیلد مورد نظر را تکمیل نمایید"  . "<br>";
}
if (empty($getTypeNull)) {
    echo "فرم تکمیل شد" . "<br>";
} else {
    echo "لطفا فیلد مورد نظر را تکمیل نمایید" ;
}
$getTypeSpace = gettype(" ");
if (isset($getTypeSpace)) {
    echo "فرم تکمیل شد"  . "<br>";
} else {
    echo "لطفا فیلد مورد نظر را تکمیل نمایید";
}
if (isset($getTypeNull)) {
    echo "فرم تکمیل شد";
} else {
    echo "لطفا فیلد مورد نظر را تکمیل نمایید"  . "<br>";
}
