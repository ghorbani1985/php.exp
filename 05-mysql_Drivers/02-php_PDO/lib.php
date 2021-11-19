<?php

function echoline($var,$newline = PHP_EOL)
{
    echo $var . $newline;
}

function mydump($var)
{
    var_dump($var);
    echo PHP_EOL;
}
