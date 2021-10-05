<?php
session_start();
$message = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
        if (isset($_FILES['uplodedFile']) && !empty($_FILES['uplodedFile'])) {
            # echo $message = "فایل با موفقیت ارسال گردید.";
            #var_dump($_FILES['uplodedFile']);
            $fileName = $_FILES['uplodedFile']['name'];
            $fileSize = $_FILES['uplodedFile']['size'];
            $fileType = $_FILES['uplodedFile']['type'];
            $fileTmpName = $_FILES['uplodedFile']['tmp_name'];
            $fileNameSeparate = explode('.', $fileName);
            #var_dump($fileNameEx);
            $fileExtension = strtolower(end($fileNameSeparate));
            $newFileName = md5(time().$fileName) . '.'. $fileExtension;
            $allowFileExtension = ['jpg','jpeg','gif','png'];
            if (in_array($fileExtension, $allowFileExtension)) {
                if ($fileSize < 1048576) {
                    $uploadDir = 'upload/';
                    $destPath = $uploadDir . $newFileName;
                    if (move_uploaded_file($fileTmpName, $destPath)) {
                        $message = "فایل با موفقیت دریافت گردید";
                    } else {
                        $message = "خطایی در ارسال فایل وجود داشته است";
                    }
                } else {
                    $message = "حجم فایل باید زیر یک مگا بایت باشد";
                }
            } else {
                $message = "فایل مورد نظر جهت ارسال مجاز نمی باشد";
            }
        } else {
            $message = "کاربر گرامی لطفا فایل را انتخاب نمایید.";
        }
    }
}
$_SESSION['message'] = $message;
header("location: index.php");

/*

$msg = null;

if($_SERVER["REQUEST_METHOD"] == "POST")
{

        if(!isset($_FILES['fileupload']) || $_FILES['fileupload']['error'] == UPLOAD_ERR_NO_FILE))
            $msg = "لطفا فایل مورد نظر خود را انتخاب کنید";
        else
            $msg = "فرم با موفقیت ارسال شد";

}

$_SESSION["msg"] = $msg;

header("location:index.php");
exit;
*/


/*
change in php.ini file
upload_max_size= 200M
post_max_size= 210M
*/
