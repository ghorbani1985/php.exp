<?php
echo "<h3> String Functions</h3><hr>";
echo "<h3> String Function => addcslashes()</h3>";
$addSlashFunc = '"add" c slash';
echo $addSlashFunc.' : ' .addcslashes($addSlashFunc, "s");
echo "<hr><hr><h3> String Function => addslashes()</h3>";
echo $addSlashFunc.' : ' .addslashes($addSlashFunc);
echo "<hr><hr><h3> String Function => bin2hex()</h3>";
$hashFunc = "این تابع رشته را هش می کند.";
echo $hashFunc.' : ' .bin2hex($hashFunc);
echo "<hr><hr><h3> String Function => chop()</h3>";
$chopFunc = "chop func";
echo $chopFunc.' : ' .chop($chopFunc, "func");
echo "<hr><hr><h3> String Function => chr()</h3>";
$str = chr(43);  // +
$str2 = chr(61); // =
echo("2 $str 2 $str2 4");
echo "<hr><hr><h3> String Function => chunk_split()</h3>";
$chunkFunc = "این یک تابع دیگر است";
echo $chunkFunc.' : ' .chunk_split($chunkFunc, 4, "....");
// echo "<hr><hr><h3> String Function => chr()</h3>";
// $cyrllicFunc = "This is a Cyrillic character-set to convert";
// echo $cyrllicFunc. ' ' .convert_cyr_string($cyrllicFunc, 'm', 'd');
echo "<hr><hr><h3> String Function => convert_uuencode()</h3>";
$uuencodeFunc = "این یک تایع کد کننده رشته است.";
echo $uuencodeFunc.' : ' .convert_uuencode($uuencodeFunc);
echo "<hr><hr><h3> String Function => convert_uudecode()</h3>";
$uudecodeFunc = "MV*?;C-F&(-N,VJD@V*K8I]N,V+D@VJG8KR#:J=F&V8;8K]F'(-BQV+38JMF' ((-BGV+/8JBX` `";
echo $uudecodeFunc.' : ' .convert_uudecode($uudecodeFunc);
echo "<hr><hr><h3> String Function => count_chars()</h3>";
$countCharFunc = "This is a count char function.";
echo  $countCharFunc.' : '.count_chars($countCharFunc, 3);
echo "<hr><hr><h3> String Function => crc32()</h3>";
$crcFunc = "محسن";
echo  "<div style='direction:rtl;'>".$crcFunc.' : '.crc32($crcFunc)."</div>";
echo "<hr><hr><h3> String Function => crypt()</h3>";
// 2 character salt
if (CRYPT_STD_DES == 1) {
    echo "Standard DES: ".crypt('mohsenghorbani', 'mg')."<br>";
} else {
    echo "Standard DES not supported.<br>";
}
if (CRYPT_EXT_DES == 1) {
    echo "Extended DES: ".crypt('mohsenghorbani', 'mohs')."<br>";
} else {
    // 4 character salt
    echo "Extended DES not supported.<br>";
}
// 4 character salt
if (CRYPT_MD5 == 1) {
    echo "MD5: ".crypt('mohsenghorbani', '$1$mohsenghorbani$')."<br>";
} else {
    echo "MD5 not supported.<br>";
}
    if (CRYPT_BLOWFISH == 1) {
        echo "Blowfish: ".crypt('mohsenghorbani', '$2a$09$mynameismohsenghorbani$')."<br>";
    } else {
        echo "Blowfish DES not supported.<br>";
    }
// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1) {
    echo "SHA-256: ".crypt('mohsenghorbani', '$5$mohsenghorbani')."<br>";
} else {
    echo "SHA-256 not supported.<br>";
}
// 16 character salt starting with $6$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1) {
    echo "SHA-512: ".crypt('mohsenghorbani', '$6$mohsenghorbani');
} else {
    echo "SHA-512 not supported.";
}
echo "<hr><hr><h3> String Function => get_html_translation_table()</h3>";
print_r(get_html_translation_table());echo "<br>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));echo "<br>";
print_r(get_html_translation_table(HTML_ENTITIES));echo "<br>";
echo "<hr><hr><h3> String Function => hex2bin()</h3>";
echo bin2hex("mohsen ghorbani")."<br>";
echo hex2bin("6d6f6873656e2067686f7262616e69");
echo "<hr><hr><h3> String Function => localeconv()</h3>";
setlocale(LC_MONETARY, "IRAN");
$localeinfo =localeconv();
print_r($localeinfo);
echo "<hr><hr><h3> String Function => md5_file()</h3>";
$file = "05-md5file.txt";
$md5File = md5_file($file);
echo $file .' md5 : '.$md5File;
echo "<hr><hr><h3> String Function => metaphone()</h3>";
$metaPhone = "Use metaphone function in this sentence";
echo metaphone($metaPhone);
echo "<hr><hr><h3> String Function => nl2br()</h3>";
echo nl2br("این یک \nتابع \nدیگر است");
echo "<hr><hr><h3> String Function => ord()</h3>";
echo ord("mohsen ghorbani");
echo "<hr><hr><h3> String Function => parse_str()</h3>";
parse_str("name=mohsen & family=ghorbani & expert= web developer", $mohsen);
print_r($mohsen);
echo "<hr><hr><h3> String Function => quoted_printable_encode()</h3>";
echo quoted_printable_encode("Hëllo Guy ,my name  is mohsen");
echo "<hr><hr><h3> String Function => quoted_printable_decode()</h3>";
echo quoted_printable_decode("H=C3=ABllo");
echo "<hr><hr><h3> String Function => quotemeta()</h3>";
echo quotemeta("My + name ^ (is) * [mohsen] ? $.");
echo "<hr><hr><h3> String Function => setlocale()</h3>";
echo setlocale(LC_ALL, "US");
echo "<hr><hr><h3> String Function => sha1()</h3>";
echo sha1("mohsen1985gh");
echo "<hr><hr><h3> String Function => sha1_file()</h3>";
echo sha1_file("05-secureFile.txt");
echo "<hr><hr><h3> String Function => similar_text()</h3>";
echo similar_text("mohsen ghorbani year old", "my name is mohsen and 36 years old");
echo "<hr><hr><h3> String Function => soundex()</h3>";
echo soundex("mohsen ghorbani");
echo "<hr><hr><h3> String Function => sprintf()</h3>";
$a = 36;
$b = "mohsen";
$sprintF = ("%%THis %b 	is a sprintf %s");
echo sprintf($sprintF, $a, $b);
echo "<hr><hr><h3> String Function => sscanf()</h3>";
/*
%% : It returns a percent sign.
%c : For ASCII value
%d : Signed decimal number.
%e : Scientific notation.(e.g. 1.2e+2)
%u : Unsigned decimal number
%f : Floating-point number
%o : Octal number
%s : String
%x : Hexadecimal number (lowercase letters)
%X : Hexadecimal number (uppercase letters) etc.
*/
$str = "We are Learning PHP 7";
$format = sscanf($str, "%s %s %s %s %c");
print_r($format);
echo "<hr><hr><h3> String Function => strcasecmp()</h3>";
$name = "mohsen";
$fullName = "mohsen ghorbani";
echo strcasecmp($name, $fullName);
echo "<hr><hr><h3> String Function => strchr()</h3>";
$str1="Hello mohsen ghorbani";
$str2="mohsen";
echo strchr($str1, $str2);
echo "<hr><hr><h3> String Function => strcmp()</h3>";
/*
Return 0 - It returns 0 if both strings are equal, i.e., $str1 = $str2
Return < 0 - It returns negative value if string1 is less than string2, i.e., $str1 < $str2
Return >0 - It returns positive value if string1 is greater than string 2, i.e., $str1 > $str2
*/
echo strcmp($str1, $str2);
echo "<hr><hr><h3> String Function => strcoll()</h3>";
echo strcoll($str2, $str1);
echo "<hr><hr><h3> String Function => strrev()</h3>";
echo strrev($fullName);
echo "<hr><hr><h3> String Function => strcspn()</h3>";
echo strcspn($fullName, "e");
echo "<hr><hr><h3> String Function => strtr()</h3>";
$strng1 = "Hiy! Guud Mohneng";
$from =  "yuhe";
$to = "eori";
    echo strtr($strng1, $from, $to);
