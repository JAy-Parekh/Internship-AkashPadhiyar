<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num = 0;
    $f1 = 0;
    $f2 = 1;
    echo $f1." , ";
    echo $f2." , ";
    while($num < 10)
    {
        $f3 = $f2 + $f2;
        echo $f3." , ";
        $f1 = $f2;
        $f2 = $f3;
        $num = $num + 1;
    }
    
    
    ?>
</body>
</html>