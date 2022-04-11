<?php

// Assignment - 2
//index array
$daraz_products = ["T-shirt","baby shoes","Ear phone","Laptop","Sharii"]; 

foreach($daraz_products as $index => $product_name){
    echo ++$index." - ".$product_name."<br>";
}

// Assignment - 3
$number= array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$max_num = $number[0];
foreach($number as $index => $value){
    if($value > $max_num){
        $max_num = $value;
    }
}
 echo "maximum value is : ". $max_num;

 //Assignment - 4
 echo "<h3>Assignment - 4 </h3>";
 $nummm = [0,10,80,67,60,89,91,56,45,30,95,83,99];
 $lent = count($nummm);
 for($i = 0; $i <  $lent; $i++){
 if($i%2!=0){   
     continue;
 }
 echo $nummm[$i];
 echo "<br>";
}
?>