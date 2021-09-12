<?php
 echo "<h3>Conditional Statement => Switch</h3>";
$dayOfWeek =2;
switch ($dayOfWeek) {
    case 1:
       echo "شنبه";
       break;
       case 2:
        echo "یکشنبه";
        break;
        case 3:
          echo "دوشنبه";
          break;
          case 4:
            echo "سه شنبه";
            break;
            case 5:
               echo "چهارشنبه";
               break;
               case 6:
                echo "پنج شنبه";
                break;
                case 7:
                    echo "جمعه";
                    // no break
    default:
      echo "لطفا عدد را صحیح وارد نمایید.";
    break;
}
 echo "<hr><hr><h3>Conditional Statement => Switch- Persion Day</h3>";
$dayOfWeek = strtolower(date("l"));  //strtolower change capital letters to lowercase
echo $dayOfWeek . "<br>";
#$dayOfWeek = strtolower($dayOfWeek);
#echo $dayOfWeek;
#exit(); #don't run other codes
switch ($dayOfWeek) {
    case "saturday":
       echo "شنبه";
       break;
       case "sunday":
        echo "یکشنبه";
        break;
        case "monday":
          echo "دوشنبه";
          break;
          case "tuesday":
            echo "سه شنبه";
            break;
            case "wednesday":
               echo "چهارشنبه";
               break;
               case "thursday":
                echo "پنج شنبه";
                break;
                case "friday":
                    echo "جمعه";
                    // no break
    default:
      echo "لطفا عدد را صحیح وارد نمایید.";
    break;
}
