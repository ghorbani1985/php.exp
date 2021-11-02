<?php
$mysqli = new mysqli("localhost", "root", "", "world");
if (!$mysqli) {
    echo "Failed to connect to mysql. ERROR: ". $mysqli-> connect_error;
    exit;
}
#connection is OK
echo "Successfully connect to mysql!" .PHP_EOL;
#$mysqli-> set_charset('utf8');
#print_r($mysqli);
