<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUEST Method</title>
    <style>
    body{direction: rtl;}
    form{background-color: #efefef;width: 350px;margin: 0 auto;padding: 10px;border-radius: 7px;}
    input{width: 100%;height: 50px;border-radius: 5px;border: none;margin-bottom: 10px;}
    input[type=submit]{background-color: tomato;color:#ffffff;padding: 7px;font-family: iransans;}
    </style>
</head>
<body>
<?php
if (isset($_REQUEST["submit"])) { //after page load we haven't else scope
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //for don't conflict between GET and POST
   if (!empty($_REQUEST["firstName"]) && !empty($_REQUEST["age"])) { //or ($_GET["age"]) !=""
       echo $_REQUEST["firstName"] ." "."عزیز خوش آمدید.<br>";
       echo  "سن شما" . $_REQUEST["age"] . "سال می باشد.";
   } else {
       echo "کاربر گرامی لطفا موردهای ضروری را وارد نمایید.";
   }
    } else {
        echo "درخواست شما نامعتبر است...";
    }
}
  
?>

   <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
   <label for="">نام <input type="text" name="firstName" placeholder="نام شما..."></label>
   <label for="">سن <input type="text" name="age" placeholder="سن شما..."></label>
   <input type="submit" name="submit" value="ارسال">

   </form>
   <?php # echo "<pre>"; var_dump($_SERVER); echo "</pre>";?>
    </body>
</html>
