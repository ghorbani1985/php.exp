<?php
echo "<h3> SuperGlobals Variables</h3>";
$t = 40;
$u = 70;
echo "<pre>";
var_dump($GLOBALS);
echo "</pre><hr>";
function sum()
{
    //global $t;
    $GLOBALS['q'] = $GLOBALS['t'] + $GLOBALS['u'];
}
echo sum() ."<br>";
echo $q."<hr>";
echo "<pre>";
var_dump($_SERVER);
echo "</pre><hr>";
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["SCRIPT_NAME"]."<br>";
echo $_SERVER["SERVER_SOFTWARE"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br>";
echo $_SERVER["SERVER_ADDR"]."<br>";
echo $_SERVER["REMOTE_ADDR"]."<br>";
