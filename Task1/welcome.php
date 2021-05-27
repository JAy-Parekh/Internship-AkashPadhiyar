
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Welcome</title>
</head>

<body>

    <?php  require 'partials/_nav.php' ?>
    <?php
   
    $a = $_POST["username"];
    $b = $_POST["email"];
    $c = $_POST["age"];

    ?>
    <div class="container my-3">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> Welcome - <?php echo $a; ?></h4>
            <p>You logged in successfully! </p>
            <p>Your Email is - <?php echo $b; ?></p>
            <p>Your Age is - <?php echo $c; ?></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ipsum laboriosam doloribus recusandae ea
                eveniet totam quia, non facere quae corporis inventore cumque delectus vitae soluta illo corrupti iste
                ut!</p>
            <hr>
    
        </div>
    </div>
    <hr>
    <div>
    <?php  require 'partials/footer.php' ?> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>