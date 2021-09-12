<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables-and-Constants</title>
</head>

<body>

    <!-- ---Rule of Variables Name---
    Rule01 => start with $ sign
    Rule02 => (a-z),(A-Z),(a-Z),_
    Rule03 => Can't start with Numbers
    Rule04 => Can't use space between name
    Rule05 => Use $test_no_one
-->
    <?php
    //variables in php are case-sensitive

    $_a = 5;
    $txt = "txt";
    echo $txt;
    echo "<br>";
    $TXT = "TXT";
    echo $TXT;
    echo "<br>";
    $TxT = "TxT";
    echo $TxT;
    echo "<br>";
    $Txt = "Txt";
    echo $Txt;
    echo "<br>";
    $Number = 10;
    echo $Number;
    echo "<br>";
    $Number = 30;
    echo $Number;
    echo "<br>";
    ?>
    <!-- Constants in php -->
    <?php
    /**
     * 1- values are static
     * 2- Global scope
     * 3- case-sensitive
     */
    const URL = "https://www.7learn.com"; //const Faster than define,because define is a function
    echo "<hr>";
    echo URL;
    echo "<br>";
    define("BASEURL", "http://www.7learn.com");
    echo BASEURL;
    echo "<br>";
    define("BASE", "http://www.7learn.com", true); //true for case-sensitive
    //echo base;
    echo "<hr>";
    function test()
    {
        echo BASE; // global variable
    }
    test();
    ?>
</body>

</html>
