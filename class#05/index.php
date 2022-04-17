<body style="margin-top: 100px;margin-left: 300px;margin-bottom: 100px;">
    
<!------- Class 5 --Assignment- 01 start ------->

<h2>Class 5 --Assignment- 01</h2>

<!-- Question 01: 
	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)
Step 2: Then check the total number of factors of that number
Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number. -->


<?php
    echo "array(12, 34, 2 ,6, 78) <br>";
    echo "This is Indexed arrays <br><br>";
       
    $num= array(12, 34, 2 ,6, 78);    
    foreach ($num as $val){         
        echo " Factors of $val are : ";  //factors
        $prime = true;

        for ( $i=2; $i<$val; $i++){
            
            if ($val % $i == 0){
                echo  $i ." ";   //factors 
               
                $prime = false;  
            }  
        }         

        if ($prime){                        
            echo "<br> $val is a Prime Number <br><br>";  //When a number is divisible by only one and itself, then it is a prime number
        }else{                       
            echo "<br> $val is a Composite Number <br><br>"; //If the total number of factors is more than two, it is not a prime number but a composite number
        }
    } 
?>
<!------- Class 5 --Assignment- 01 end ------->




<!------- Class 5 --Assignment- 02 start ------->

<h2>Class 5 --Assignment- 02</h2>

<!-- Question 02:
	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
Go to daraz website and pick any 5 products and make your array.
Must mention Which type of array you have made. -->


<?php  
echo "<br>";
echo "This is Multidimensional arrays <br><br>";
$products = [
    ["Wireless Earphones",600,27],
    ["Dual-Band Wi-Fi Router",2790,13],
    ["WiFi Security Camera",2230,15],
    ["Watch",1240,22],
    ["Wallet",320,35]
];
echo " Product Name - ".$products[0][0].", Price - ".$products[0][1]."Tk".", Stock Quantity -  ".$products[0][2]."<br>"."<br>";
echo " Product Name - ".$products[1][0].", Price - ".$products[1][1]."Tk".", Stock Quantity -  ".$products[1][2]."<br>"."<br>";
echo " Product Name - ".$products[2][0].", Price - ".$products[2][1]."Tk".", Stock Quantity -  ".$products[2][2]."<br>"."<br>";
echo " Product Name - ".$products[3][0].", Price - ".$products[3][1]."Tk".", Stock Quantity -  ".$products[3][2]."<br>"."<br>"; 
echo " Product Name - ".$products[4][0].", Price - ".$products[4][1]."Tk".", Stock Quantity -  ".$products[4][2]."<br>"."<br>"; 
 echo "<br>"; 

  echo "OR"."<br>";
 
  echo "<br>";

 $products = [
    ["Wireless Earphones",600,27],
    ["Dual-Band Wi-Fi Router",2790,13],
    ["WiFi Security Camera",2230,15],
    ["Watch",1240,22],
    ["Wallet",320,35]
];

    foreach ($products as $outerkey=>$outervalue)
    {
        foreach ($outervalue as $innerkey=>$innervalue)
        {            
            echo $innervalue." ";
            echo "<br>";
            
        } 
     echo "<br>"; 
    }

?>

<!------- Class 5 --Assignment- 02 end ------->




<!------ Class 5 --Assignment- 03 start -------->

<h2>Class 5 --Assignment- 03</h2>

<!-- Question 03:
		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99)
Find the maximum value from this array.
Must use a foreach loop. -->

<?php  
echo "<br>";
$arr= array(0,10,80,67,60,89,91,56,45,30,95,83,99);
//using foreach loop
$m_val = 0;
foreach ($arr as $value)

 {
    if ($value > $m_val) {
        $m_val = $value;
    }
}
echo "Maximum value " . $m_val;
?> 

<!------- Class 5 --Assignment- 03 end ------->


<!------- Class 5 --Assignment- 04 start ------->

<h2>Class 5 --Assignment- 04</h2>

<!-- Question 04:
		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3…. -->

<?php  
echo "<br>";
$arr= array(0,10,80,67,60,89,91,56,45,30,95,83,99);

foreach ($arr as $key=>$val)
 {
    if ($key%2!=0) {
        continue;
        
    }
    echo $val."<br> ";
}

echo "<br> OR <br> <br> ";

$arr= array(0,10,80,67,60,89,91,56,45,30,95,83,99);
//using foreach loop

foreach ($arr as $index => $val)
 {
    if ($index==1) {
        continue;
        
    }elseif($index==3) {
      continue;
      
  }elseif($index==5) {
    continue;
    
}elseif($index==7) {
    continue;
    
}elseif($index==9) {
    continue;
    
}
elseif($index==11) {
    continue;
    
}
    echo $val;

    echo "<br>";
}

?>
<!------- Class 5 --Assignment- 04 end ------->

</body>