<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین های مختلف سوم</title>
    <style>
        body {
            direction: rtl;
        }

        form {
            background-color: #efefef;
            width: 350px;
            margin: 0 auto;
            padding: 10px;
            border-radius: 7px;
        }

        input {
            width: 100%;
            height: 50px;
            border-radius: 5px;
            border: none;
            margin-bottom: 10px;
            font-family: iransans;
            margin-top: 20px;
        }

        input[type=submit] {
            background-color: tomato;
            color: #ffffff;
            padding: 7px;
            font-family: iransans;
        }

        .text {
            margin: 30px auto;
            text-align: center;
            width: 350px;
            padding: 8px;
            background-color: #81fb7d;
            color: #464646;
            border-radius: 5px;
            border-right: 6px solid #057901;
            border-top: 2px solid #32b52d;
            border-bottom: 2px solid #32b52d;
            border-left: 2px solid #32b52d;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table {
            border-bottom: 1px solid #ddd;
            margin: 0 auto;
            width: 400px;
            border-radius: 6px;
        }

        th {
            background-color: #04AA6D;
            color: white;
            text-align: center;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            height: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="">لطفا عددی بین ۰ تا ۱۰ وارد نمایید: </label>
        <input type="text" name="digit" placeholder="مانند ۹...">
        <input type="submit" name="submit_num" value="انتخاب عدد">
    </form>
    <?php
    # echo "<div class='text'> دایرکتوری فایل های موقت :<br>" .sys_get_temp_dir()."</div>";
    #print_r(get_extension_funcs("JSON"));
    #print_r(get_extension_funcs("XML"));
    if (isset($_POST["submit_num"])) {
        $convertDigit = $_POST["digit"];

        switch ($convertDigit) {
            case '0':
                echo "<div class='text'>عدد وارد شده صفر است .</div>";
                break;
            case '1':
                echo "<div class='text'>عدد وارد شده یک است .</div>";
                break;
            case '2':
                echo "<div class='text'>عدد وارد شده دو است .</div>";
                break;
            case '3':
                echo "<div class='text'>عدد وارد شده سه است .</div>";
                break;
            case '4':
                echo "<div class='text'>عدد وارد شده چهار است .</div>";
                break;
            case '5':
                echo "<div class='text'>عدد وارد شده پنج است .</div>";
                break;
            case '6':
                echo "<div class='text'>عدد وارد شده شش است .</div>";
                break;
            case '7':
                echo "<div class='text'>عدد وارد شده هفت است .</div>";
                break;
            case '8':
                echo "<div class='text'>عدد وارد شده هشت است .</div>";
                break;
            case '9':
                echo "<div class='text'>عدد وارد شده نه است .</div>";
                break;
            case '10':
                echo "<div class='text'>عدد وارد شده ده است .</div>";
                break;

            default:
                echo "<div class='text'>کاربر گرامی لطفا عددی بین ۰ تا ۱۰ وارد نمایید.</div>";
                break;
        }
    }
    //   function remove_duplicates_list($list1)
    //   {
    //       $nums_unique = array_values(array_unique($list1));
    //       return $nums_unique ;
    //   }
    //   $nums = array(1,1,2,2,3,4,5,5);
    //   print_r(remove_duplicates_list($nums));
    function sumNum()
    {
        return $i = 100 * (100 + 1) / 2;
    }
    echo "<div class='text'>مجموع اعداد ۰ تا ۱۰۰ : " . sumNum() . "</div>";

    echo "<div class='text'>حجم این فایل : " . filesize($_SERVER["SCRIPT_FILENAME"]) . " بایت است </div>";

    echo "<table border =\"1\" style='border-collapse: collapse'>";
    for ($a = 1; $a <= 10; $a++) {
        echo "<tr> \n";
        for ($b = 1; $b <= 10; $b++) {
            $multiplication  = $a * $b;
            echo "<td>$multiplication</td> \n";
        }
        echo "</tr>";
    }
    echo "</table>";




    //    for ($i=1;$i<=6;$i++) {
    //        for ($j=2;$j<=12;$j++) {
    //            echo "$i   $j<br/>";
    //        }
    //    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="">لطفا یک کلمه وارد نمایید: </label>
        <input type="text" name="firstLetter" placeholder="مانند سلام...">
        <input type="submit" name="submit_word" value="حذف حرف اول کلمه">
    </form><br><br>
  <br><br>
    <?php
    if (isset($_POST["submit_word"])) {
        $firstLetter = substr($_POST["firstLetter"], 1);
        echo "<div class='text'> کلمه شما بدون حرف اول : ' $firstLetter ' می باشد.";
    }
    if (isset($_POST["show_number"])) {
        $num = $_POST["get_number"];
        function addition($num)
        {
            return $num += 1;
        }
        echo "<div class='text'> عدد شما به اضافه یک : " . addition($num) . "</div>";
    }
    ?>

    <?php
    function getFirstValue()
    {
        return $array = [70, 60, 50];
    }
    var_dump(getFirstValue()[0]);

    function valueAt($arr, $i)
    {
        $val = floor($i); #Round fractions down
        return $arr[$val];
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="">لطفا یک عدد وارد نمایید: </label>
        <input type="text" name="get_number" placeholder="مانند ۵۶...">
        <input type="submit" name="show_number" value="دیدن نتیجه">
    </form>

    <?php
    echo "<br>" . valueAt([8, 7, 6, 55, 443322], 8 / 2) . "<br>";
    $one = 5.6;
    $tow = 2.9;
    echo "<div class='text'> گرد شده تقسیم <br> $one و $tow : " . floor($one / $tow) . " می باشد. </div>";
    ?>
     <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="">لطفا سن خود را وارد نمایید: </label>
        <input type="text" name="get_age" placeholder="مانند ۵۶...">
        <input type="submit" name="ageToDays" value="محاسبه">
    </form>
   <?php
    if (isset($_POST["ageToDays"])) {
        $age = $_POST["get_age"];
        function calcAge($age)
        {
            return $age *= 365;
        }
        echo "<div class='text'> سن شما " . calcAge($age) . " روز می باشد. </div>";
    }
    ?>
</body>

</html>
