<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $sum = 1;

    for($i=1;$i<=$a;$i++)
    {
        $sum = $sum * $i;
    }
    echo "Factorial of a =".$sum;
    
    ?>
</body>
</html>