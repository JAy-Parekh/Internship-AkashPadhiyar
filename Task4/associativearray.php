<?php
//Associative Array
//Method 1

$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web Development";
$a[10] = "Ten";
$a[50] = 50.50;

//Method 2

$a = array(
    0 => 10,
    "c" => "Computer",
    "php" => "Web Development",
    10 => "Ten",
    50 => 50.50
);

//Print value
echo "C for ".$a['c'];
echo "<br>PHP is used for ".$a['php'];

//Print Whole array
foreach ($a as $key => $value) {
    echo "<br>".$key." = ".$value;
}


echo "<pre>";
print_r($a);
echo "</pre>";















?>