<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .container {
        width: 500px;
    }
    </style>
</head>

<body>
    <?php
    include"./dbconnect.php";

    if($_POST){
        $fname = $_POST['txt1'];
        $lname = $_POST['txt2'];
        $age = $_POST['txt3'];
        $email = $_POST['txt4'];
        $password = $_POST['txt5'];
        $mobile = $_POST['txt6'];
        $gender = $_POST['txt7'];
        $city = $_POST['txt8'];
        $address = $_POST['txt9'];
        $pin = $_POST['txt10'];

        $sql = mysqli_query($conn, "INSERT INTO `tbl_student` (`stu_fname`, `stu_lname`, `stu_age`,
         `stu_email`, `stu_pass`, `stu_mobile`, `stu_gender`, `stu_city`, `stu_address`, `stu_pin`) 
         VALUES ('$fname', '$lname', ' $age', '$email', '$password', '$mobile', '$gender', '$city',
          '$address', '$pin');");

        if($sql){
            echo "<script>alert('Inserted Successfully!')</script>";
        }
    }
    
    ?>



    <div class="container my-4">
        <h1 class="heading"> Register </h1>
        <form action="" method="post">
            <div class="form-group my-1">
                <label for="fname">First Name</label>
                <input type="text" maxlength="15" class="form-control" name="txt1" required>

            </div>

            <div class="form-group my-1">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" name="txt2" required>

            </div>

            <div class="form-group my-1">
                <label for="age">Age</label>
                <input type="number" class="form-control" name="txt3" required>

            </div>
            <div class="form-group my-1">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="txt4" required>

            </div>

            <div class="form-group my-1">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="txt5" required>
            </div>

            <div class="form-group my-1">
                <label for="mobile">Mobile</label>
                <input type="number" class="form-control" name="txt6" required>
            </div>

            <select class="form-select my-1" name="txt7" aria-label="Default select example">
                <option selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>


            <select class="form-select my-1" name="txt8" aria-label="Default select example">
                <option selected>Slect City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Surat">Surat</option>
                <option value="Gandhinagar">Gandhinagar</option>
                <option value="Rajkot">Rajkot</option>
            </select>

            <div class="form-group my-1">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="txt9" required>
            </div>

            <div class="form-group my-1">
                <label for="pin">Pincode</label>
                <input type="number" class="form-control" name="txt10" required>
            </div>

            <button type="submit" class="my-1 btn btn-primary">Submit</button>

            <a href="../Day7/display.php">Display Record</a>

        </form>
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