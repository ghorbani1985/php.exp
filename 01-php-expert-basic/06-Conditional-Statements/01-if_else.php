    <?php
    echo "<h3>Conditional Statement => if</h3>";
    $num = 100;
    if ($num == 100) {
        #code be executed
        echo "$num is equal 100";
    }
    echo "<hr><hr><h3>Conditional Statement => if-else</h3>";
    if ($num > 100) {
        #code be executed
        echo "$num is equal 100";
    } else {
        echo "$num is not equal 100";
    }
    echo "<hr><hr><h3>Conditional Statement => Nested conditional sentence</h3>";
    $num2 = 50;
    $num3 = 60;
    $str = "Mohsen";
    if ($num2 == 50) {
        echo "شرط برقرار است <br>";
        if ($num3 == 60) {  #if main condition is false this bloch not execute
            echo "شرط دوم هم برقرار است <br>";
        } else {
            echo "شرط دوم برقرار نیست <br>";
        }
        if ($num2 === $num3) {
            echo "اتفاقا شرط سوم هم برقرار است";
        } else {
            echo "متاسفانه شرط سوم برقرار نیست <br>";
        }
        if ($num3 > $num2) {
            echo " اتفاقا شرط چهارم هم برقرار است <br>";
        } else {
            echo "متاسفانه شرط چهارم برقرار نیست";
        }
    } else {
        echo "شرط برقرار نیست <br>";
    }
    echo "<hr><hr><h3>Conditional Statement => Example in array</h3>";
    $users = (OBJECT) array(
        "userID1" => (OBJECT)[
            "name"  => "pedram",
            "email" => "pedram@gmail.com",
            "username" => "pedram87",
            "role" => "editor",
        ],
        "userID2" => (OBJECT)[
            "name"  => "maryam",
            "email" => "maryam@yahoo.com",
            "username" => "maryam69",
            "role" => "admin",
        ],
    );
    $users = (OBJECT) $users;
    var_dump($users);
    echo "<br>";
if ($users->userID2->role == "admin") {
    echo "مدیر سایت خوش آمدید";
} else {
    echo "شما دسترسی به این بخش را ندارید";
}
    echo "<hr><hr><h3>Conditional Statement => Cast Object way 01</h3>";
    $users = (OBJECT) array(
        "userID1" => [  //not repeated (object)
            "name"  => "pedram",
            "email" => "pedram@gmail.com",
            "username" => "pedram87",
            "role" => "editor",
        ],
        "userID2" => [
            "name"  => "maryam",
            "email" => "maryam@yahoo.com",
            "username" => "maryam69",
            "role" => "admin",
        ],
    );
if ($users->userID2["role"] == "admin") {  //role is an array
    echo "مدیر سایت خوش آمدید";
} else {
    echo "شما دسترسی به این بخش را ندارید";
}
    echo "<hr><hr><h3>Conditional Statement => Cast Object way 02</h3>";
    $users = array(   //delete object and change to array
        "userID1" => [  //not repeated (object)
            "name"  => "pedram",
            "email" => "pedram@gmail.com",
            "username" => "pedram87",
            "role" => "editor",
        ],
        "userID2" => [
            "name"  => "maryam",
            "email" => "maryam@yahoo.com",
            "username" => "maryam69",
            "role" => "admin",
        ],
    );
if ($users["userID2"]["role"] == "admin") {  //role and userIDS2 are an array
    echo "مدیر سایت خوش آمدید";
} else {
    echo "شما دسترسی به این بخش را ندارید";
}
    echo "<hr><hr><h3>Conditional Statement => Cast Object way 03 the best with encode,decode function</h3>";
    $users = array(
        "userID1" => [
            "name"  => "pedram",
            "email" => "pedram@gmail.com",
            "username" => "pedram87",
            "role" => "editor",
        ],
        "userID2" => [
            "name"  => "maryam",
            "email" => "maryam@yahoo.com",
            "username" => "maryam69",
            "role" => "admin",
        ],
    );
    // $arrayToJson = json_encode($users);
    // var_dump($arrayToJson);
    // echo "<br>";
    // $jsonToObject = json_decode($arrayToJson);
    // var_dump($jsonToObject);
    $jsonToObject = json_decode((json_encode($users)));  //more than better
    var_dump($jsonToObject);  //output Array change to Object
    echo "<br>";
if ($jsonToObject->userID2->role == "admin" || $jsonToObject->userID2->email == "maryam@yahoo.com") {
    echo "<br>مدیر سایت خوش آمدید ";
} else {
    echo "شما دسترسی به این بخش را ندارید";
}
