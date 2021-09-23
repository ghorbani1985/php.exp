<?php
session_start();
$msg = null;
$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$message  = $_POST['message'];

if (!empty(mail($email, $subject, $message, ''))) {
    $msg = "فرم با موفقیت ارسال  و لطفا صندوق وردی ایمیل خود را بررسی نمایید";
} else {
    $msg = "مشکلی در ارسال فرم رخ داده است";
}
$_SESSION['name'] = $name;
$_SESSION['msg'] = $msg;
header('Location: index.php');
exit();
