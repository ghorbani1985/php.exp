<?php
include 'jdf.php';
include 'helper.php';
echo "<h3> Date and Time => convert date</h3>";
print_r(gregorian_to_jalali(1985, 2, 26)) ;
echo gregorian_to_jalali(1985, 2, 26, '/');
echo "<hr><hr><h3> Date and Time => jdate() </h3>";
echo "<div style='direction:rtl;'>".jdate('j F Y H:i:s')."</div>";
$today = '9/16/2021';
echo jdate($today) ."<br>";
echo "<div style='direction:rtl;'>" .dateToJdate($today) . "</div>";
