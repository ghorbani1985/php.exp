<?php
echo "<h3> File Handling </h3>";
echo "<h3> File Handling => file_exists() </h3>";
echo file_exists("dir/test.txt");
echo "<hr><hr><h3> File Handling => is_file() </h3>";
echo is_file("dir/test.txt");
echo "<hr><hr><h3> File Handling => is_dir() </h3>";
echo is_dir("dir");
echo "<hr><hr><h3> File Handling => mkdir() </h3>";
$dirPath = "dir/newDir";
if (!file_exists($dirPath)) {
    mkdir($dirPath);
    echo "<div style='direction:rtl;'>کاربر گرامی $dirPath با موفقیت ایجاد شده است.</div>";
} else {
    echo "<div style='direction:rtl;'>کاربر گرامی $dirPath قبلا ساخته شده است.</div>";
}
echo "<hr><hr><h3> File Handling => unlink() </h3>";
$deleteFile = "dir/newDir/index.html";
if (file_exists($deleteFile)) {
    unlink($deleteFile);
    echo "<div style='direction:rtl;'> کاربر گرامی فایل $deleteFile با موفقیت حذف شد.</div>";
} else {
    echo "<div style='direction:rtl;'>کاربر گرامی فایل $deleteFile یافت نشد.</div>";
}
echo "<hr><hr><h3> File Handling => fopen,fwrite,fclose() </h3>";
$dirNewFile = "dir/index.txt";
$fileOpen = fopen($dirNewFile, 'a+');
for ($i=1; $i <20 ; $i++) {
    fwrite($fileOpen, "Log $i => " . date("Y/m/d h:i:s", time()).PHP_EOL);
}
fclose($fileOpen);
/*
                            ||||||||||||||||||||
                            |PHP Open File Mode|
                            ||||||||||||||||||||
Mode	            Description
r ====>	Opens file in read-only mode. It places the file pointer at the beginning of the file.
r+ ====> 	Opens file in read-write mode. It places the file pointer at the beginning of the file.
w ====>	Opens file in write-only mode. It places the file pointer to the beginning of the file and truncates the file to zero length. If file is not found, it creates a new file.
w+ ====>	Opens file in read-write mode. It places the file pointer to the beginning of the file and truncates the file to zero length. If file is not found, it creates a new file.
a ====>	Opens file in write-only mode. It places the file pointer to the end of the file. If file is not found, it creates a new file.
a+ ====>	Opens file in read-write mode. It places the file pointer to the end of the file. If file is not found, it creates a new file.
x ====>	Creates and opens file in write-only mode. It places the file pointer at the beginning of the file. If file is found, fopen() function returns FALSE.
x+ ====>	It is same as x but it creates and opens file in read-write mode.
c ====>	Opens file in write-only mode. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file
c+ ====>	It is same as c but it opens file in read-write mode.
*/
echo "<hr><hr><h3> File Handling => fgetc() </h3>";
$dirNewFile = "dir/index.txt";
$fileOpen = fopen($dirNewFile, 'r');
for ($i=1; $i <20 ; $i++) {
    echo $fgetC = fgetc($fileOpen);
}
fclose($fileOpen);
echo "<hr><hr><h3> File Handling => fgets() </h3>";
$dirNewFile = "dir/index.txt";
$fileOpen = fopen($dirNewFile, 'r');
for ($i=1; $i <30 ; $i++) {
    echo $fgetS = fgets($fileOpen);
}
fclose($fileOpen);
echo "<hr><hr><h3> File Handling => file_put_contents() </h3>";
$newText = "This is a new sentence".PHP_EOL;
echo file_put_contents($dirNewFile, $newText, FILE_APPEND);
echo "<hr><hr><h3> File Handling => file_get_contents() </h3>";
echo file_get_contents("index.php");
echo "<hr><hr><h3> File Handling => filesize() </h3>";
echo "size of file : ".filesize($dirNewFile) ." Bytes.";
echo "<hr><hr><h3> File Handling => filetype() </h3>";
echo "type of file : ".filetype($dirNewFile)."<br>";
$fileType = "dir";
echo "type of file : ".filetype($fileType);
echo "<hr><hr><h3> File Handling => chown() </h3>";
chown("index.php", "root");
echo "<hr><hr><h3> File Handling => chgrp() </h3>";
chgrp("index.php", "root");
echo "<hr><hr><h3> File Handling => chmod() </h3>";
chmod("index.php", 0777);
echo "<hr><hr><h3> File Handling => glob() </h3>";
$listFile = glob("*.php");
var_dump($listFile);
