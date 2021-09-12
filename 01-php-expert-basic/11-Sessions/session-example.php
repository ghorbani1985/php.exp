<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
    echo $_SESSION['counter'];
} else {
    //echo "سشن ست شده است";
    $_SESSION['counter'] += 1;
}
echo $msg = " این صفحه " . $_SESSION['counter'] . " بار بازدید شده است ...";
