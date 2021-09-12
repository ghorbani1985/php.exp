<?php
 echo "<h3>Conditional Statement => If - Else If</h3>";
 $users = array(
     "userID1" => [
         "name"  => "pedram",
         "email" => "pedram@gmail.com",
         "username" => "pedram87",
         "role" => "editor",
          "age" => 17,
     ],
     "userID2" => [
         "name"  => "maryam",
         "email" => "maryam@yahoo.com",
         "username" => "maryam69",
         "role" => "admin",
          "age" => 26,
     ],
 );
 $jsonToObject = json_decode((json_encode($users)));
 if ($jsonToObject->userID2->role == "editor" || $jsonToObject->userID1->age > 18) {
     echo "سن شما زیر ۱۸ سال می باشد.";
 } elseif ($jsonToObject->userID2->age > 18) {
     echo "ورود شما موفقیت آمیز بود.";   #just run this scope
 } elseif ($jsonToObject->userID2->role == "admin") {
     echo "شما به عنوان مدیر سایت وارد شدید.";  #can't run
 } else {
     echo "کاربر گرامی لطفا ثبت نام خود را تکمیل نمایید."; //output when tow elseif are false
 }
 
