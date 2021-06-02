<?php
include"../Day6/dbconnect.php";

$sql = mysqli_query($conn, "Select * FROM tbl_student");
$i = 1;

echo "<table border='1'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>First Name</th>";
echo "<th>Last NAme</th>";
echo "<th>Age</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Gender</th>";
echo "<th>City</th>";
echo "<th>Address</th>";
echo "<th>Pincode</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "<td>{$row['stu_fname']}</td>";
    echo "<td>{$row['stu_lname']}</td>";
    echo "<td>{$row['stu_age']}</td>";
    echo "<td>{$row['stu_email']}</td>";
    echo "<td>{$row['stu_mobile']}</td>";
    echo "<td>{$row['stu_gender']}</td>";
    echo "<td>{$row['stu_city']}</td>";
    echo "<td>{$row['stu_address']}</td>";
    echo "<td>{$row['stu_pin']}</td>";
    echo "<td><a href='../Day7/delete.php?deleteid={$row['stu_id']}'>Delete</a></td>";
    echo "<tr>";
    $i++;
}

echo "</table>";

?>

<a href="../Day6/stuform.php">Add Record</a>