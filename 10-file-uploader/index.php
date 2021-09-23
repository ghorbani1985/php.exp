<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
    <style>
        .container{
            max-width: 600px;
            background: #fff;
            position: relative;
            height: 151px;
            border-radius: 5px;
            margin: 0 auto;
            margin-top: 300px;
            box-shadow: 0px 0px 6px 10px #efefef;
            padding-top: 118px;
        }
        .msg{
            position: absolute;
            top: -14px;
            background: #f9f9f9;
            width: 100%;
            padding: 14px 16px;
            box-sizing: border-box;
            color: #000;
            text-align: right;
            width: 85%;
            left: 0;
            transform: translate(8%,50%);
            border-right: 3px solid #00ceff;
            direction: rtl;
        }
        form{
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0 40px;
        }
        div.upload-wrapper{
            color: white;
            font-weight: bold;
            display: flex;
        }
        input[type="file"] {
            position: absolute;
            left: -9999px;
        }
        input[type="submit"]{
            color: white;
            background: #33bb30;
            margin: 10px 0;
            border-radius: 5px;
            font-weight: bold;
            padding: 9px 30px;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover{
            background: #555;
        }
        label[for="file-upload"]{
            padding: 0.7rem;
            display: inline-block;
            background: #5d9eff;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            border-left: 0;
        }
        label[for="file-upload"]:hover{
            background: #ca3103;
        }
        span.file-name{
            padding:0.7rem 14rem 0.7rem 0.7rem;
            white-space: nowrap;
            overflow: hidden;
            background: #ececec;
            color: black;
            border: 1px solid #ececec;
            border-radius: 5px 0 0 5px;
            border-right: 0;
            width: 100%;

        }

    </style>
</head>
<body>
   <div class="container">
        <?php
          if (isset($_SESSION["message"]) && $_SESSION["message"]):?>
            <p class="msg"><?php echo $_SESSION["message"] ?></p>
        <?php
        unset($_SESSION["message"]);
        endif ?>                                   <!-- for file upload -->
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="upload-wrapper">
                <span class="file-name">Choose a file...</span>
                <label for="file-upload">Browse<input type="file" id="file-upload" name="uplodedFile"></label>
            </div>
            <input type="submit" name="uploadBtn" value="Upload"/>
        </form>
    </div>
</body>
</html>

