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
echo "<hr><hr><h3> String Function => hunk_split()</h3>";
$chunkFunc = "This is a chunk function";
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

