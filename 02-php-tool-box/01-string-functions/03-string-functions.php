<?php
echo "<h3> String Functions</h3><hr>";
echo "<h3> String Function => stripos()</h3>";
echo stripos("Mohsen is 36 years old.", "old") . "   # stripos() is case sensitive";
echo "<hr><hr><h3> String Function => strpos()</h3>";
echo strpos("Mohsen is 36 years old.", "Old") . "strpos() is case insensitive"; //case insensitive
echo "<hr><hr><h3> String Function For Security => md5()</h3>";
$hashFunc = "mohsen1985";
echo md5($hashFunc);
echo "<hr><hr><h3> String Function For Security => Character Entities </h3>";
echo "&lt; &gt;" . "<br>";
#echo "<script>alert('hacked');</script>"; //script run...
echo "<hr><hr><h3> String Function For Security => htmlspecialchars </h3>";
$htmlEnt = '<a href="https://www.7learn.com">سون لرن</a>';
echo "without htmlentities function: $htmlEnt <br>";
echo "with htmlentities function: "  . htmlentities($htmlEnt);
echo "<hr><hr><h3> String Function For Security => html_entity_decode() </h3>";
$htmlEntDecode = '&lt;a href=&quot;https://www.7learn.com&quot;&gt;سون لرن&lt;/a&gt;';
echo html_entity_decode($htmlEntDecode);
echo "<hr><hr><h3> String Function For Security => htmlspecialchars() </h3>";
$htmlSpecial = '<a href="https://www.7learn.com">سون لرن</a>';
echo "without htmlspecialchars function: $htmlSpecial <br>";
echo "with htmlspecialchars function: "  . htmlspecialchars($htmlSpecial); //same act with htmlspecialchars()
echo "<hr><hr><h3> String Function For Security => htmlspecialchars_decode() </h3>";
$htmlSpecialDecode = '<a href="https://www.7learn.com">سون لرن</a>';
echo "with htmlspecialchars_decode function: "  . htmlspecialchars_decode($htmlSpecialDecode);
echo "<hr><hr><h3> String Function For Security => strip_tags() </h3>";
$stripTags = '<a href="https://www.7learn.com">سون لرن</a>';
echo "with strip_tags function: "  . strip_tags($stripTags) . "<br>";
$stripBoldTag = " در این جمله <b>قسمت حذف</b> <i>تگ ها حذف می شوند.</i> ";
echo "without strip_tags function: $stripBoldTag <br>";
echo "with strip_tags function: "  . strip_tags($stripBoldTag);
echo "<hr><hr><h3> String Function => implode() </h3>";
$implodeFunc = ["BMW ", "BENZ", " VOLVO", " MAZDA"];
print_r($implodeFunc);
echo "<br>برخی از برندهای معروف ماشین: "  . implode($implodeFunc); //It is used to return a string from the elements of an array.
