<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین های مختلف</title>
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
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <label for="">لطفا نام خود را وارد نمایید: </label>
        <input type="text" name="name" placeholder="نام شما ...">
        <input type="submit" name="submit" value="ارسال">
    </form>
  <?php
  if (isset($_POST["submit"])) {
      echo "<div class='text'>".$_POST["name"] . " عزیز خوش آمدید.</div>";
  }
    //   $name = $_POST["name"];
    //   echo "<div class='text'>$name عزیز خوش آمدید.</div>";
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    // echo "<pre>";
    // var_dump(parse_url("url"));
    // echo "</pre>";
    echo   "<div class='text'>کاربر گرامی IP شما اعلام می گردد :".$_SERVER["REMOTE_ADDR"]."</div>";
    echo   "<div class='text'>کاربر گرامی اطلاعات مرورگر شما :<br>".$_SERVER["HTTP_USER_AGENT"]."</div>";
    echo   "<div class='text'>کاربر گرامی نام فایل شما :<br>".$_SERVER["PHP_SELF"]."</div>";
    echo   "<div class='text'>SCHEME : ".$_SERVER["REQUEST_SCHEME"]."</div>";
    echo   "<div class='text'>HOST : ".$_SERVER["HTTP_HOST"]."</div>";
    echo   "<div class='text'>PATH : ".$_SERVER["SCRIPT_FILENAME"]."</div>";
    $webUrl = "http://www.google.com";
    $webUrl = parse_url($webUrl);
    echo "<div class='text'>SCHEME: ". $webUrl["scheme"]."</div>";
    echo "<div class='text'>HOST: ". $webUrl["host"]."</div>";
    #echo "<div class='text'>PATH: ". $webUrl["path"]."</div>";
    if (isset($_SERVER["https"])) {
        echo   "<div class='text'>پروتکل وب سایت شما https است.</div>";
    } else {
        echo   "<div class='text'>پروتکل وب سایت شما http است.</div>";
    }
   #header('Location : https://www.w3resource.com/');  for redirect website

?>
</body>
</html>
