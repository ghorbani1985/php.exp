<?php
session_start();
$_SESSION["username"] = "mohsen";
$_SESSION["userEmail"] = "mohseen.ghorbani1985@gmail.com";
echo $_SESSION["username"]."<br>";
echo $_SESSION["userEmail"];
//session_unset(); //delete sessions value
//session_destroy(); //delete session
//echo $_SESSION["userEmail"];
