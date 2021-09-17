<?php
date_default_timezone_set("Asia/Tehran");
echo "<h3> Date and Time => date()</h3>";
echo date('Y-M-d-l') ."<br>";
echo date('h:i:s a') ."<br>";
echo date('H:i:s') ."<br>";
echo date('Y/M/d l H:i:s');
echo "<hr><hr><h3> Date and Time => time()</h3>";
echo time() ."<br>";
echo date('Y/M/d l H:i:s', time());
echo "<hr><hr><h3> Date and Time => mktime()</h3>";
echo "time stamp is: " .mktime(11, 32, 40, 02, 26, 1985) ."<br>";
echo "mktime to date is: ".date("M-d-Y H:i:s", mktime(11, 32, 40, 02, 26, 1985));
echo "<hr><hr><h3> Date and Time => strtotime()</h3>";
echo strtotime("07:00 pm Feb 26 1985") ."<br>";
echo "Tomorrow : ".date("M-d-Y H:i:s", strtotime("tomorrow")) ."<br>";
echo "Yesterday : ".date("M-d-Y H:i:s", strtotime("yesterday"));
echo "<hr><hr><h3> Date and Time => microtime()</h3>";
echo microtime();
