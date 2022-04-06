<body style="margin-top: 100px;margin-left: 300px;margin-bottom: 100px;">
    
<!-- Class 4 --Assignment- 01 start -->

<h2>Class 4 --Assignment- 01</h2>

<!-- Question 01:
		Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.
Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30
So days of running month should dynamic (by php build in function) -->

<h4>Select Date From Running Month </h4>

<?php echo $month = date("F");?> 
  
    <select>
      <?php        
        for ($runningDate = date("t"); $runningDate >= 1; $runningDate--){
       ?> 
             
        <option>
            
                <?php echo $runningDate ;?>
            
        </option>          
          
      <?php
         
        }
        
      ?> 
    </select>
<!-- Class 4 --Assignment- 01 end -->



<!-- Class 4 --Assignment- 02 start -->

<h2>Class 4 --Assignment- 02</h2>

<!-- Question 02:
If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
You have to rotate from 1 to 100.
Your output message should like that, “3 is a odd number”
Not need to print even number -->


  <?php
    for($n=1; $n <=100; $n++){
        if($n % 2 != 0){
            echo $n."  is a odd number"."<br>";
        }
        
    }
  ?>
<!-- Class 4 --Assignment- 02 end -->



<!-- Class 4 --Assignment- 03 start -->

<h2>Class 4 --Assignment- 03</h2>

<!-- Question 03:
		Factorial - I think everyone knows the word. Factorial of 4 is given below:        
4! = 4*3*2*1 = 24
6! = 6*5*4*3*2*1 = 720
So let’s calculate the factorial of 7. -->


<?php
    $Factorial =1;
    for($i=1; $i<=7; $i++){
    echo $Factorial = $Factorial * $i  ; // 7! = 1*2*3*4*5*6*7 or 7*6*5*4*3*2*1
    echo "<br>";
    
    }
    
    echo "<br>". "7! = 7*6*5*4*3*2*1 = " . $Factorial;
    
?>
<!-- Class 4 --Assignment- 03 end -->



<!-- Class 4 --Assignment- 04 start -->

<h2>Class 4 --Assignment- 04</h2>

<!-- Question 04:
Print out from 100 - 1 using a while loop.
You must use decrement operator -->


<?php
$num = 100;
    while( $num >= 1 ){      
        echo $num."<br>"; 
        $num--;
        
    }   
    
?>

<!-- Class 4 --Assignment- 04 end -->



<!-- Class 4 --Assignment- 05 start -->

<h2>Class 4 --Assignment- 05</h2>

<!-- You have an array of your purchased product items.
['apple', 'orange', 'banana', 'mango']
Show all products as a table list.
Output should like that: “sl- 1 and product - apple” -->


<?php
    $fruits = ['apple', 'orange', 'banana', 'mango'];
    
    ?>
    <table>
    <?php
    foreach($fruits as $serial => $allfruits){
        echo "SI- " . ++$serial . " product- " .$allfruits . "<br>";
        
    }
    echo "<br>";
    ?>

    <!-- Class 4 --Assignment- 05 end -->

    <table style="padding: 1px;background: #ddd;">   
        <tbody style="border:solid 1px #000;background: #fff;color:#000;padding: 10px;">
            <th>Serial_No</th>                    
            <th>Product</th>          
       
            <?php
            $fruits = ['apple', 'orange', 'banana', 'mango'];
            foreach($fruits as $serial => $allfruits){
                
            ?>           

            <tr >
                
                <td><?php echo ++$serial?></td>
                <td><?php echo $allfruits?></td>
                                                
            </tr>

            <?php
                }
                
            ?>
        </tbody>
    </table>
    </body>

           