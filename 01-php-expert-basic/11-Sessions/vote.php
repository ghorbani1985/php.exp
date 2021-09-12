<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
    <body class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="my-input">نظرسنجی</label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" value="خوب" class="form-check-input" name="optradio">خوب
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" value="بد" class="form-check-input" name="optradio">بد
                </label>
            </div>

            <button name="submit">ثبت کنید </button>
        </form>
    </body>

</html>


<?php
if (isset($_POST['submit']) && !empty($_POST['optradio'])) {
    if (isset($_SESSION['ip'])) {
        echo "شما قبلا رای دادید";
    } else {
        $myfile = 'pollRequest.txt';
        $poll = $_POST['optradio'] . PHP_EOL;
        
        //ساختن فایل  و درج مقدار رادیو باتن در فایل
        file_put_contents($myfile, $poll, FILE_APPEND);
        // ست کردن ای پی کاربر در سیشن برای اینکه کاربر نتونه دوبار رای بده
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    }
}
echo  session_save_path() ;
$_SESSION['login'] = 1;
?>
