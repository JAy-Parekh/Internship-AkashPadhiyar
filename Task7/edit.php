<?php
include"../Day6/dbconnect.php";

if(!isset($_GET['editid']) || empty($_GET['editid'])){
    header("location:../Day7/display.php");
}

$editid = $_GET['editid'];

$sql = mysqli_query($conn, "SELECT * FROM tbl_student WHERE stu_id = {$editid}") or die(mysqli_error($conn));

$editdata = mysqli_fetch_array($sql);
// echo "<pre>";
// print_r($editdata);
// echo "</pre>";

if($_POST){

    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];
    $txt7 = $_POST['txt7'];
    $txt8 = $_POST['txt8'];
    $txt9 = $_POST['txt9'];
    $txt10 = $_POST['txt10'];
 

    $updatesql = mysqli_query($conn, "Update tbl_student SET stu_fname='{$txt1}', stu_lname='{$txt2}', 
    stu_age='{$txt3}', stu_email='{$txt4}', stu_pass='{$txt5}', stu_mobile='{$txt6}', stu_gender='{$txt7}', 
    stu_city='{$txt8}', stu_address='{$txt9}', stu_pin='{$txt10}' WHERE stu_id='{$editid}'") 
    or die(musqli_error($conn));

    if($updatesql){
        echo "<script>alert('Record Updated');window.location='../Day7/display.php';</script>";
    }
}

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

    <title>Hello, world!</title>
    <style>
    .container {
        width: 500px;
    }
    </style>
</head>

<body>
    <div class="container my-4">
        <h1 class="heading"> Update </h1>
        <form action="" method="post">
            <div class="form-group my-1">
                <label for="fname">First Name</label>
                <input type="text" maxlength="15" value="<?php echo $editdata['stu_fname']; ?>" class="form-control"
                    name="txt1" required>
            </div>

            <div class="form-group my-1">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" value="<?php echo $editdata['stu_lname']; ?>" name="txt2"
                    required>
            </div>

            <div class="form-group my-1">
                <label for="age">Age</label>
                <input type="number" class="form-control" value="<?php echo $editdata['stu_age']; ?>" name="txt3"
                    required>
            </div>
            <div class="form-group my-1">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?php echo $editdata['stu_email']; ?>" name="txt4"
                    required>
            </div>

            <div class="form-group my-1">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="<?php echo $editdata['stu_pass']; ?>" name="txt5"
                    required>
            </div>

            <div class="form-group my-1">
                <label for="mobile">Mobile</label>
                <input type="number" class="form-control" value="<?php echo $editdata['stu_mobile']; ?>" name="txt6"
                    required>
            </div>

            <label for="gender">Gender</label>
            <select class="form-select my-1" name="txt7" aria-label="Default select example">
                <option selected>Select Gender</option>
                <option value="Male" <?php if($editdata['stu_gender']=="Male"){ echo "Selected"; } ?>>Male</option>
                <option value="Female" <?php if($editdata['stu_gender']=="Female"){ echo "Selected"; } ?>>Female
                </option>
            </select>

            <label for="city">City</label>
            <select class="form-select my-1" name="txt8" aria-label="Default select example">
                <option selected>Slect City</option>
                <option value="Ahmedabad" <?php if($editdata['stu_city']=="Ahmedabad"){ echo "Selected"; } ?>>Ahmedabad
                </option>
                <option value="Surat" <?php if($editdata['stu_city']=="Surat"){ echo "Selected"; } ?>>Surat</option>
                <option value="Gandhinagar" <?php if($editdata['stu_city']=="Gandhinagar"){ echo "Selected"; } ?>>
                    Gandhinagar</option>
                <option value="Rajkot" <?php if($editdata['stu_city']=="Rajkot"){ echo "Selected"; } ?>>Rajkot</option>
            </select>

            <div class="form-group my-1">
                <label for="address">Address</label>
                <input type="text" class="form-control" value="<?php echo $editdata['stu_address']; ?>" name="txt9"
                    required>
            </div>

            <div class="form-group my-1">
                <label for="pin">Pincode</label>
                <input type="number" class="form-control" value="<?php echo $editdata['stu_pin']; ?>" name="txt10"
                    required>
            </div>

            <button type="submit" class="my-1 btn btn-primary">Update</button>

            <!-- <a href="../Day7/display.php">Display Record</a> -->

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