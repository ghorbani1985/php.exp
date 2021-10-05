<?php
echo "<h3> Ctype Functions </h3>";
echo "<h3> Ctype Functions => ctype_alnum() </h3>";
$users = ['mohsen1985','EDWIN',' nima$%#',"\n\t\r","65","poyA"];
foreach ($users as $user) {
    if (ctype_alnum($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_alpha() </h3>";
foreach ($users as $user) {
    if (ctype_alpha($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_cntrl() </h3>";
foreach ($users as $user) {
    if (ctype_cntrl($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_digit() </h3>";
foreach ($users as $user) {
    if (ctype_digit($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_graph() </h3>";
foreach ($users as $user) {
    if (ctype_graph($user)) { #\n\t\r false because hasn't visibility in page
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_print() </h3>";
foreach ($users as $user) {
    if (ctype_print($user)) { #if value has space return true
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_lower() </h3>";
foreach ($users as $user) {
    if (ctype_lower($user)) { #value just be string
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_upper() </h3>";
foreach ($users as $user) {
    if (ctype_upper($user)) { #value just be string
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_punct() </h3>";
$users = ['mohsen1985','edwin',' nima$%#',"\n\t\r"," ","poyA","000000","16a085"];
foreach ($users as $user) {
    if (ctype_punct($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_space() </h3>";
foreach ($users as $user) {
    if (ctype_space($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => ctype_xdigit() </h3>";
foreach ($users as $user) {
    if (ctype_xdigit($user)) {
        echo "true ";
    } else {
        echo "false ";
    }
}
echo "<hr><hr><h3> Ctype Functions => Example </h3>";
echo ctype_digit('123') . PHP_EOL;  // true
echo ctype_digit(123) . PHP_EOL;    // false
echo ctype_digit('12.3') . PHP_EOL; // false
echo ctype_digit(12.3) . PHP_EOL;   // false
echo ctype_digit('-123') . PHP_EOL; // false
/**************/
$number = 123;
echo ctype_digit($number) ? 'true' : 'false' . PHP_EOL;           // false
echo ctype_digit((string) $number) ? 'true' : 'false' . PHP_EOL;  // true
/*
┌──────────┬───────────┬────────────────┐
│          │  is_int:  │  ctype_digit:  │
├──────────┼───────────┼────────────────┤
│ 123      │  true     │  false         │
├──────────┼───────────┼────────────────┤
│ 12.3     │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ "123"    │  false    │  true          │
├──────────┼───────────┼────────────────┤
│ "12.3"   │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ "-1"     │  false    │  false         │
├──────────┼───────────┼────────────────┤
│ -1       │  true     │  false         │
└──────────┴───────────┴────────────────┘
*/
