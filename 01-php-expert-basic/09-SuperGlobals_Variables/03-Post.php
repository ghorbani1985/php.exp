<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
    <style>
    body{direction: rtl;}
    form{background-color: #efefef;width: 350px;margin: 0 auto;padding: 10px;border-radius: 7px;}
    input{width: 100%;height: 50px;border-radius: 5px;border: none;margin-bottom: 10px;}
    input[type=submit]{background-color: tomato;color:#ffffff;padding: 7px;font-family: iransans;}
    </style>
</head>
<body>
    <!-- 
1=> The POST method does not have any restriction on data size to be sent.
2=> The POST method can be used to send ASCII as well as binary data.
3=> The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.
4=> The PHP provides $_POST associative array to access all the sent information using POST method.
 -->
<?php
if (isset($_POST["submit"])) { //after page load we haven't else scope
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //for security
        if (!empty($_POST["firstName"]) && !empty($_POST["age"])) { //or ($_GET["age"]) !=""
            echo $_POST["firstName"] ." "."عزیز خوش آمدید.<br>";
            echo  "سن شما" . $_POST["age"] . "سال می باشد.";
        } else {
            echo "کاربر گرامی لطفا موردهای ضروری را وارد نمایید.";
        }
    }
}
?>

   <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
   <label for="">نام <input type="text" name="firstName" placeholder="نام شما..."></label>
   <label for="">سن <input type="text" name="age" placeholder="سن شما..."></label>
   <input type="submit" name="submit" value="ارسال">

   </form>
    </body>
</html>
