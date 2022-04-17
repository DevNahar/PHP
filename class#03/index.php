
<h3><?php echo "Class3 - Assignment 1" ?></h3>
<?php
$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;
$total = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
$averagemark = $total / 4;

if($averagemark >=80 && $averagemark <= 100 ){
    echo "You got A+";
}elseif($averagemark >=70 && $averagemark <= 79 ){
    echo "You got A";
}elseif($averagemark >=60 && $averagemark <= 69 ){
    echo "You got A-";
}elseif($averagemark >=50 && $averagemark <= 59 ){
    echo "You got B";
}elseif($averagemark >=40 && $averagemark <= 49 ){
    echo "You got C";
}elseif($averagemark >=1 && $averagemark <= 39 ){
    echo "You got F";
}
else {
    echo "No result found";
}

?>



<h3><?php echo "Class3 - Assignment 2" ?></h3>

<?php
   
   $bike = "give_gear";
  
   switch($bike){
       case "start_button":
        echo "your bike takes a start";

        break;

        case "stop_button":
            echo "your bike takes a stop";

            break;

        case "press_break":
            echo "your bike take break";

            break;

        case "give_gear":
            echo "your bike move faster and faster";

            break;

        case "signal_button":
            echo "your bike shows a signal light";

            break; 

        case "headlight_button":
            echo "your bike’s headlight will start";
              
   }


?>




