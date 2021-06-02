<?php
//Numerical Array
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 10.50;
$a[3] = "C";
$a[4] = "4";
$a[5] = "C++";

//Method 2
$a[] = 10;
$a[] = 20;
$a[] = 10.50;
$a[] = "C"; 
$a[] = "10";
$a[] = "C++";

//Method 3
$a = array(10,20,10.50,"C","20","C++");

//Print Array Value
echo $a[3];

//Print Whole Array
for($i=0; $i<count($a); $i++){
    echo "<br>".$a[$i];
}

$sum = array_sum($a);
echo "<br> Sum = ".$sum;

foreach ($a as $key => $value) {
    echo "<br>".$key." = ".$value;
}









?>