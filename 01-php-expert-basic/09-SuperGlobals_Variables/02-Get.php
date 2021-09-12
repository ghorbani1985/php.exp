<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
    <style>
    body{direction: rtl;}
    form{background-color: #efefef;width: 350px;margin: 0 auto;padding: 10px;border-radius: 7px;}
    input{width: 100%;height: 50px;border-radius: 5px;border: none;margin-bottom: 10px;}
    input[type=submit]{background-color: #2ed573;color:#ffffff;padding: 7px;font-family: iransans;}
    </style>
</head>
<body>
    <!-- 
1=> The GET method is restricted to send upto 1024 characters only.
2=> Never use GET method if you have password or other sensitive information to be sent to the server.
3=> GET can't be used to send binary data, like images or word documents, to the server.
4=> The data sent by GET method can be accessed using QUERY_STRING environment variable.
5=> The PHP provides $_GET associative array to access all the sent information using GET method.
 -->
<?php
   if (!empty($_GET["firstName"]) || !empty($_GET["age"])) { //or ($_GET["age"]) !=""
       echo $_GET["firstName"] ." "."عزیز خوش آمدید.<br>";
       // echo $_GET["lastName"] ." "."نام خانوادگی شما.<br>"; set in url query string
       echo  "سن شما" . $_GET["age"] . "سال می باشد.";
   } else {
       echo "کاربر گرامی لطفا موردهای ضروری را وارد نمایید.";
   }
?>

   <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="GET">
   <label for="">نام <input type="text" name="firstName" placeholder="نام شما..."></label>
   <label for="">سن <input type="text" name="age" placeholder="سن شما..."></label>
   <input type="submit" value="ارسال">

   </form>
     <a href="/09-SuperGlobals_Variables/single.php?id=10&name=آموزش کامل php مقدماتی">آموزش کامل php مقدماتی</a>
    </body>
</html>
