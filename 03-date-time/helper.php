<?php
function dateToJdate(string $date)
{
    list($year, $month, $day) = explode('/', $date);
    $timeStamp = mktime($year, $month, $day);
    return jdate('j F Y', $timeStamp, '', 'Asia/Tehran', 'fa');
}
