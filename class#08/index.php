<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title> Assignment 8 </title>
</head>

<body style="margin-top: 100px;margin-left: 300px;margin-bottom: 100px;">


    <!-- =============  class 08 assignment 1 start ============== -->


    <?php

    echo "<h3>Class 08 Assignment 1 </h3><br>";

    function age($age)
    {

        if ($age < 13) {
            return "you are children";
        } elseif ($age >= 13  && $age <= 19) {
            return "you are teenager";
        } elseif ($age >= 20  && $age <= 40) {
            return "young people / you are adult";
        } elseif ($age >= 41  && $age <= 65) {
            return "middle age";
        } elseif ($age >= 66) {
            return "you are old";
        } else {
            return "Not valid Age Number";
        }
    }
    echo age(28) . "<br>";
    echo age(75) . "<br>";
    echo age(14) . "<br>";
    echo "<br><br>";
    ?>


    <!-- =============  class 08 assignment 1 end ============== -->





    <!-- =============  class 08 assignment 2 start ============== -->


    <?php

    echo "<h3>Class 08 Assignment 2 </h3><br>";

    function area($area)
    {
        $leanth = 4;
        $width = 8;
        $height = 6;
        $base = 9;

        if ($area == "rectangle") {
            $area_of_rectangle = $leanth * $width;
            return $area = $area_of_rectangle;
        } elseif ($area == "square") {
            $area_of_square = $leanth * $leanth;
            return $area = $area_of_square;
        } elseif ($area == "triangle") {
            $area_of_triangle = (1 / 2) * $base * $height;
            return $area = $area_of_triangle;
        } else {
            return "give 'rectangle' || 'square' || 'triangle' in function";
        }
    }
    echo "Area of rectangle : " . area("rectangle") . "<br>";  // give "rectangle" || "square" || "triangle" in function
    echo "Area of square : " . area("square") . "<br>";  // give "rectangle" || "square" || "triangle" in function
    echo "Area of triangle : " . area("triangle") . "<br><br>";  // give "rectangle" || "square" || "triangle" in function
    ?>

    <?php
    echo "OR <br><br>";


    function area_of_rectangle($leanth, $width)
    {
        $area_of_rectangle = $leanth * $width;
        return $area_of_rectangle;
    }
    echo "Area of rectangle : " . area_of_rectangle(6, 12) . "<br>";

    function Area_of_square($leanth)
    {
        $Area_of_square = $leanth * $leanth;
        return $Area_of_square;
    }
    echo "Area of square : " . Area_of_square(6) . "<br>";

    function Area_of_triangle($base, $height)
    {
        $Area_of_triangle = (1 / 2) * $base * $height;
        return $Area_of_triangle;
    }
    echo "Area of triangle : " . Area_of_triangle(6, 5) . "<br>";

    ?>

    <!-- =============  class 08 assignment 2 end ============== -->




    <!-- =============  class 08 assignment 3 start ============== -->

    <?php

    echo "<h3><br>Class 08 Assignment 3 </h3><br>";

    function result($subjects)
    {
        $total_mark = array_sum($subjects);
        $all_subject = count($subjects);
        $average_mark = $total_mark / $all_subject;
        $total_GPA = round($average_mark);

        foreach ($subjects as $subject) {
            if ($subject < 40) {
                return "F";
            }
        }

        if ($total_GPA >= 80 && $total_GPA <= 100) {
            return "A+";
        } elseif ($total_GPA >= 70 && $total_GPA <= 79) {
            return "A";
        } elseif ($total_GPA >= 60 && $total_GPA <= 69) {
            return "A-";
        } elseif ($total_GPA >= 50 && $total_GPA <= 59) {
            return "B";
        } elseif ($total_GPA >= 40 && $total_GPA <= 49) {
            return "C";
        } else {
            return "result no found";
        }
    }
    $subjects = ["80", "82", "60", "74", "48"];
    echo "Sumi peyese : " . result($subjects) . "<br><br>";

    $subjects = ["74", "82", "50", "24", "58"];
    echo "Kona peyese : " . result($subjects) . "<br><br>";

    $subjects = ["74", "62", "92", "64", "84"];
    echo "Karim peyese : " . result($subjects) . "<br><br>";


    ?>

    <!-- =============  class 08 assignment 3 end ============== -->





    <!-- =============  class 08 assignment 4 start ============== -->


    <h3>Class 08 Assignment 4 <br><br></h3>

    <form action="#" method="post">
        <label> Date of birth</label>
        <input type="date" name="birthdate"><br><br>
        <!-- <label> Current date</label>
        <input type="date" name="correntdate"><br><br> -->
        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $birthdate = $_POST["birthdate"];
        $today = date("Y-m-d");

        $result = date_diff(date_create($today), date_create($birthdate));
        echo " <br><br>Tomer hoyese : " . $result->format("%y year %m month %d day");

        echo "<br>.<br>";
    }

    ?>


    <?php
    echo "<br>OR <br>";

    function birth($birth)
    {

        $current_day = date("Y-m-d");

        $birth = date_diff(date_create($current_day), date_create($birth));

        return " <br> বয়স : " . $birth->format("%y year %m month %d day");
    }
    echo birth(date("2022-01-01"));
    echo "<br>.<br>";
    ?>


    <!-- =============  class 08 assignment 4 end ============== -->



    <!-- =============  class 08 assignment 5 start ============== -->


    <?php

    echo "<h3><br>Class 08 Assignment 5 </h3><br>";

    function BMI($weight, $height)
    {
        $height = $height / 100; //here height meter
        $your_bmi = $weight / ($height * $height);
        $your_bmi = number_format($your_bmi, 1);

        if ($your_bmi < 18.5) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:  ওজনহীনতা";
        } elseif ($your_bmi >= 18.5 && $your_bmi <= 24.9) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:   স্বাভাবিক";
        } elseif ($your_bmi >= 25 && $your_bmi <= 29.9) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:   ওজনাধিক্য";
        } elseif ($your_bmi >= 30 && $your_bmi <= 34.9) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:   গ্রেড-১ স্থুলতা";
        } elseif ($your_bmi >= 35 && $your_bmi <= 39.9) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:  গ্রেড-২ স্থুলতা";
        } elseif ($your_bmi > 40) {
            return "আপনার বিএমআই {$your_bmi} <br> শ্রেণি:   গ্রেড-৩ স্থুলতা/ রোগ গ্রস্থ চূড়ান্ত পর্যায়ের স্থুলতা";
        } else {
            return "Result no found";
        }
    }
    echo BMI("75", "135") . "<br><br>"; // here height centimeter
    echo BMI("66", "135") . "<br><br>"; // here height centimeter
    echo BMI("40", "135") . "<br><br>"; // here height centimeter
    echo BMI("50", "135") . "<br><br>"; // here height centimeter
    echo "<br>";


    ?>



    <!-- =============  class 08 assignment 5 end ============== -->





    <!-- =============  class 08 assignment 6 start ============== -->

    <?php

    echo "<h3>Class 08 Assignment 6 </h3><br><br>";
 

    function currency($amount, $currency)
    {


        if ($currency == "USD") {
            $onetk_to_usd = 0.0115797;
            $usd_currency = $amount * $onetk_to_usd;
            $usd_currency =  number_format($usd_currency, 2);
            return $currency = "BDT {$amount} = {$usd_currency} $";
        } elseif ($currency == "CAD") {
            $onetk_to_cad = 0.0146093;
            $cad_currency = $amount * $onetk_to_cad; //Convert Taka to Canadian Dollar
            $cad_currency =  number_format($cad_currency, 2);
            return $currency = "BDT {$amount} = {$cad_currency} Canadian $";
        } elseif ($currency == "POUND") {
            $onetk_to_pound = 0.009048;
            $pound_currency = $amount * $onetk_to_pound; // Convert Taka to Pound
            $pound_currency =  number_format($pound_currency, 2);
            return $currency = "BDT {$amount} =  £{$pound_currency} Pound";
        } elseif ($currency == "EURO") {
            $onetk_to_euro = 0.0109107;
            $pound_currency = $amount * $onetk_to_euro; // Convert Taka to Euro
            $pound_currency =  number_format($pound_currency, 2);
            return $currency = "BDT {$amount} =  {$pound_currency} EUR";
        } else {
            return "give USD || CAD || POUND ||EURO in function";
        }
    }


    echo currency(350, "USD") . "<br>"; // give "USD" || "CAD" || "POUND" ||"EURO"
    echo currency(350, "CAD") . "<br>"; // give "USD" || "CAD" || "POUND" ||"EURO"
    echo currency(350, "POUND") . "<br>"; // give "USD" || "CAD" || "POUND" ||"EURO"
    echo currency(350, "EURO") . "<br>"; // give "USD" || "CAD" || "POUND" ||"EURO"
    echo "<br>.<br>";
    ?>



    <!-- =============  class 08 assignment 6 end ============== -->

</body>

</html>