<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>

    <?php include"./dbconnect.php"; 

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['gender'];
    $mobile = $_POST['txt2'];

$sql = mysqli_query($conn,"INSERT INTO `tbl_user` (`user_name`, `user_gender`, `user_mobile`)
VALUES ('$name', '$gender', '$mobile')") or die("Error".mysqli_error($conn));

if($sql){
    echo "<script>alert('Inserted');</script>";
}

}


?>
    <div>
        <form method="POST">
            <label for="name">Enter Name</label>
            <input type="text" name="txt1">
            <br>
            <label for="gender">Gender</label>
            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <label for="mob">Mobile</label>
            <input type="number" name="txt2">
            <br>
            <input type="submit" name="" id="">

        </form>
    </div>
</body>

</html>