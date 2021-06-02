<?php
include"../Day6/dbconnect.php";

$delete = $_GET['deleteid'];
$sql = mysqli_query($conn, "Delete From tbl_student Where stu_id = '$delete'") or die("Error");
if($sql){
    echo "<script>alert('Record Deleted');window.location='display.php';</script>";
}
?>