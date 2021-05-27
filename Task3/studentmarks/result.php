<?php
$a = $_POST["math"];
$b = $_POST["phy"];
$c = $_POST["chem"];
$sum = $a+$b+$c;
$percentage = (($sum/300)*100);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, Students!</title>
    <!-- <style>
    h4{
        text-align:center;
    }
    </style> -->
</head>

<body>
    <h4 class="offset-2">Your Result</h4>

    <div class=" container my-3">
        <table>
            <tr>
                <th>Maths </th>
                <td><?php echo $a;?></td>
            </tr>
            <tr>
                <th>Physics </th>
                <td><?php echo $b;?></td>
            </tr>
            <tr>
                <th>Chemistry </th>
                <td><?php echo $c;?></td>
            </tr>
            <tr>
                <th>Total </th>
                <td><?php echo $sum;?></td>
            </tr>
            <tr>
                <th>Percentage </th>
                <td><?php echo $percentage;?></td>
            </tr>
            <?php
                    if($percentage>80){
                        echo "<td style='color:green'>Congratulations! You passed the exam with A+</td>";
                    }elseif($percentage<80 && $percentage>65){
                        echo "<td style='color:yellow'>Congratulations! You passed the exam with B+</td>";
                    }elseif($percentage<65 && $percentage>50){
                        echo "<td style='color:yellow'>Congratulations! You passed the exam with C+</td>";
                    }else{
                        echo "<td style='color:red'>You Failed the exam!</td>";
                    }
        ?>
        </table>
      
    </div>
    <div class="container">
                    <a href="marks.php">Go Back</a>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>