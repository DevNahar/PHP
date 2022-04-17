<body style="margin-top: 100px;margin-left: 300px;margin-bottom: 100px;">
    
<!------- Class 6 --Assignment- 01 start ------->

<h2>Class 6 --Assignment- 01</h2>

<!-- Question 01:
		You have purchased some items from a supershop. Purchase product array is given below-
	$purchased_products = array(
        		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    	);
How much product quantity you have purchased (total purchased qty = 67)
Calculate the total amount of all purchased items (total amount = 2650 tk). -->


<?php
 $purchased_products = array(

    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);
$qty = array_column($purchased_products,'qty');
echo 'Product qty: '. array_sum($qty);
echo "<br>";

$total_price = array_column($purchased_products,'total_price');
echo 'Total_price: '. array_sum($total_price);
echo "<br>";

?>

<!------- OR ------->


<?php

 echo "<br>";
 echo "OR";
 echo "<br>";
 echo "<br>";

$x=0;
$p=0;
foreach ($purchased_products as $key=>$value)
 {  
    $x += $value['qty']; 
    $p += $value['total_price'];    
 } 
 echo 'Product qty: '.$x;
 echo "<br>";

 echo 'Total_price: '.$p ;
 echo "<br>";
 echo "<br>";

  
?>
<!------- Class 6 --Assignment- 01 end ------->






<!------- Class 6 --Assignment- 02 start ------->

<h2>Class 6 --Assignment- 02</h2>

<!-- Question 02:
		You have two array of emails, these are given below-
	$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
You have to make a single array from this two arrays
And don’t keep any value in multiple time -->

<?php  
    $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

    $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

    $two_array = array_merge($first_email_array,$second_email_array);
    $unique = array_unique($two_array);

    echo "<pre>";
    print_r($unique);
    echo "</pre>";
?>

<!------- Class 6 --Assignment- 02 end ------->




<!------ Class 6 --Assignment- 03 start -------->

<h2>Class 6 --Assignment- 03</h2>

<!-- $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

Split this given array into chunks 4 -->

<?php 

    $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

    $chunk = array_chunk($citylist,4);

    echo "<pre>";
    print_r($chunk);
    echo "</pre>";
?> 

<!------- Class 6 --Assignment- 03 end ------->




</body>