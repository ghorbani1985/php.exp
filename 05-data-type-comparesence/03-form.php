<?php
$message = null;
$sucssesMsg = false;
$errorMsg = false;
if (isset($_POST["submit"])) {
    #echo "form submited!";
    if (empty($_POST["name"]) && empty($_POST["email"])) {
        $errorMsg =true;
        $message = "please enter your name and email...";
    } else {
        $sucssesMsg = true;
        $message = "form submited!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
     <input type="text" name="name" placeholder="name">
     <input type="text" name="email" placeholder="email">
     <input type="submit" name="submit">
    </form>
    <?php
    if ($sucssesMsg == true) {
        echo $message;
    }
    if ($errorMsg ==true) {
        echo $message;
    }
    ?>
</body>
</html>
