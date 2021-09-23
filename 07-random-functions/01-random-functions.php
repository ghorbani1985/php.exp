<?php
echo "<h3> Random Functions </h3>";
echo "<h3> Random Functions => rand() </h3>";
echo rand(1, 100);
echo "<hr><hr><h3> Random Functions => mt_rand() </h3>";
echo mt_rand(); # 4 times faster than rand()
echo "<hr><hr><h3> Random Functions => random_int() </h3>";
echo random_int(100, 1000);
echo "<hr><hr><h3> Random Functions => random_bytes() </h3>";
echo $randomByte = random_bytes(10) ."<br>";
echo gettype($randomByte) ."<br>";
echo bin2hex(random_bytes(10));
echo "<hr><hr><h3> Random Functions => openssl_random_pseudo_bytes() </h3>";
echo openssl_random_pseudo_bytes(15); # random_bytes() better than this
echo "<hr><hr><h3> Random Functions => mt_rand() </h3>";
echo srand() . "<br>";
echo mt_rand();
echo "<hr><hr><h3> Random Functions => Custom Function </h3>";
include 'custom_random_func.php';
echo generateRandomString(50);
