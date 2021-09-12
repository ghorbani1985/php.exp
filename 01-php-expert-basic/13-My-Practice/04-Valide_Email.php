<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین های مختلف دوم</title>
    <style>
        body{direction: rtl;}
        form{background-color: #efefef;width: 350px;margin: 0 auto;padding: 10px;border-radius: 7px;}
    input{width: 100%;height: 50px;border-radius: 5px;border: none;margin-bottom: 10px;font-family: iransans;margin-top: 20px;}
    input[type=submit]{background-color: tomato;color:#ffffff;padding: 7px;font-family: iransans;}
    .text{    margin: 30px auto;
    text-align: center;
    width: 350px;
    padding: 8px;
    background-color: #81fb7d;
    color: #464646;
    border-radius: 5px;
    border-right: 6px solid #057901;
    border-top: 2px solid #32b52d;
    border-bottom: 2px solid #32b52d;
    border-left: 2px solid #32b52d;}
    tr:nth-child(even) {background-color: #f2f2f2;}
    table{border-bottom: 1px solid #ddd;margin: 0 auto;width: 400px;border-radius: 6px;}
    th {background-color: #04AA6D;color: white;text-align: center;}
    th, td {border-bottom: 1px solid #ddd;height: 30px; text-align: center;}
    </style>
</head>
<body>
 <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <label for="">لطفا ایمیل خود را وارد نمایید: </label>
        <input type="text" name="email" placeholder="ایمیل شما ...">
        <input type="submit" name="submit" value="ارسال ایمیل">
    </form>
    <?php

  if (isset($_POST["submit"]) && $validEmail = $_POST["email"]) {
      if (filter_var($validEmail, FILTER_VALIDATE_EMAIL)) {
          echo   "<div class='text'>ایمیل $validEmail به درستی دریافت گردید.</div>";
      } else {
          echo   "<div class='text'>لطفا ایمیل صحیح را وارد نمایید.</div>";
      }
  }
  $sal1 = "6/000/000";
  $sal2 = "5/000/000";
  $sal3 = "4/000/000";
  $sal4 = "3/000/000";
  ?>
     <table>
         <th>نام</th>
         <th>نام خانوادگی</th>
         <th>میزان در آمد</th>
         <tr><td><?php echo "امین";?></td>
         <td><?php echo "نوری";?></td>
         <td><?php echo $sal1;?></td>
         </tr>
         <tr><td><?php echo "میلاد";?></td>
         <td><?php echo "گنجی";?></td>
         <td><?php echo $sal2;?></td>
         </tr>
         <tr><td><?php echo "ناهید";?></td>
         <td><?php echo "راهنورد";?></td>
         <td><?php echo $sal3;?></td>
         </tr>
         <tr><td><?php echo "مینو";?></td>
         <td><?php echo "قدرتی";?></td>
         <td><?php echo $sal4;?></td>
         </tr>
     </table>
     <?php
        //echo show_source("04-Valide_Email.php");  show page source code
        echo "<div class='text'>آخرین ویرایش فایل :<br>" .date("F d Y H:i:s.", filemtime("04-Valide_Email.php"))."</div>";
        echo  "<div class='text'> تعداد خط های فایل :".$lines = count(file("04-Valide_Email.php"))."</div>";
        echo "<div class='text'> نسخه php شما :". phpversion()."</div>";
        echo "<div class='text'> نرم افزار پس از ۳ ثانیه اجرا گردید". sleep(0)."</div>";
        for ($d=1; $d <=5 ; $d++) {
            echo "A0".$d."<br>";
        }
        // $d = 'A00';
        // for ($n=0; $n<5; $n++) {
            //     echo ++$d ."<br>";
            // }
           # echo "<div class='text'> آخرین خطای رخ داده :". error_get_last()."</div>";
            print_r(error_get_last());
            echo "<div class='text'> آخرین خطای رخ داده :". error_get_last()."</div>";
            function trinary_Test($n)
            {
                $r = $n > 30 ? "<div class='text'> عدد بزرگتر از ۳۰ است </div>" :
                ($n > 20 ? "<div class='text'> عدد بزرگتر از ۲۰ است </div>" :
                ($n >10 ? "<div class='text'> عدد بزرگتر از ۱۰ است </div>" : "<div class='text'> عدد بزرگتر از ۱۰ وارد نمایید </div>"));
                echo $r;
            }
                trinary_Test(32);
                trinary_Test(21);
                trinary_Test(12);
                trinary_Test(4);
          
                if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
                    echo "<div class='text'> نسخه php من بالاتر از ۷ است یعنی: ". PHP_VERSION ."</div>";
                }
                echo "<div class='text'>  نام کاربر سیستمی کنونی : ". get_current_user() ."</div>";
                echo "<div class='text'>  نام کاربر سیستمی کنونی : ". get_current_user() ."</div>";
                echo "<div class='text'>  نام دایرکتوری اصلی : ". getenv('DOCUMENT_ROOT') ."</div>";
                echo "<div class='text'>  IP کاربر  : ". getenv('REMOTE_ADDR') ."</div>";
                echo "<div class='text'> سیستم عامل شما : <br>". php_uname() ."</div>";
                echo "<div class='text'> سیستم عامل php : <br>". PHP_OS ."</div>";
                echo  phpcredits(CREDITS_ALL);
                echo  phpcredits(CREDITS_DOCS);
                echo  phpcredits(CREDITS_FULLPAGE);
                echo  phpcredits(CREDITS_GENERAL);
                echo  phpcredits(CREDITS_GROUP);
                echo  phpcredits(CREDITS_MODULES);
                echo  phpcredits(CREDITS_SAPI);
                
         
     ?>
</body>
</html>
