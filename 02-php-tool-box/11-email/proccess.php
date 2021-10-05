<?php
session_start();
$msg = null;
$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$message  = $_POST['message'];
$contactSection = $_POST['contactSection'];

if (!empty(mail('fani@gmail.com', $subject, $message, '')) && $contactSection == 'fani') {
    $msg = "فرم با موفقیت به بخش فنی ارسال  گردید";
    mail($email, $subject, $message, '');
} elseif (!empty(mail('mali@gmail.com', $subject, $message, '')) && $contactSection == 'mali') {
    $msg = "فرم با موفقیت به بخش مالی ارسال  گردید";
    mail($email, $subject, $message, '');
} elseif (!empty(mail('it.landd2020@gmail.com', $subject, $message, '')) && $contactSection == 'manager') {
    $msg = "فرم با موفقیت به بخش مدیریت ارسال  گردید";
    mail($email, $subject, $message, '');
} elseif (!empty(mail('support@gmail.com', $subject, $message, '')) && $contactSection == 'support') {
    $msg = "فرم با موفقیت به بخش پشتیانی ارسال  گردید";
} else {
    $msg = "مشکلی در ارسال فرم رخ داده است";
}
$_SESSION['name'] = $name;
$_SESSION['contactSection'] = $contactSection;
$_SESSION['msg'] = $msg;
header('Location: index.php');
exit();
