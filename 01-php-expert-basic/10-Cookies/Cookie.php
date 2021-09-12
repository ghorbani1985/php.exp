<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <style>
        body{direction: rtl;}
    </style>
</head>
<body>
<?php
echo time()."<br>";
$cookieName = "user";
$cookieValue = "mohsen";
setcookie($cookieName, $cookieValue, time() - 86400, "/"); //time()-86400 for delete cookie => 86400 can be a number
if (!isset($_COOKIE[$cookieName])) {
    echo "  کوکی با نام:" .' '.$cookieName."ست نشده است."."<hr>";
} else {
    echo "  کوکی با نام:" .' '.$cookieName.' '."ست شده است." ."<hr>";
}
if (count($_COOKIE) > 0) {
    echo "کوکی در این دامنه وجود دارد.";
} else {
    echo "کوکی در این دامنه وجود ندارد.";
}

?>
</body>
</html>
