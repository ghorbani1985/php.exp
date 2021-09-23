<?php
function generateRandomString($length) :string
{
    $char = "0123456789asdfghjklqwertyuiopzxcvbnmCXDFGBHYTOKIL!@#$%^&*()";
    $charLength = strlen($char);
    $randString = "";
    for ($i=0; $i < $length ; $i++) {
        $randString .= $char[rand(0, $charLength -1)];
    }
    return $randString;
}
