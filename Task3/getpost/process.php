<?php

$a = $_POST["name"];
$b = $_POST["email"];
$c = $_POST["age"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div{
        margin:5px;
    }
    </style>
</head>

<body>
    <div>
        <?php
        echo "Welcome $a <br> Your Email is $b<br> Your Age is $c<br>";
        ?>

        <a href="getpost.php">Click here to go back!</a>
    </div>
</body>

</html>