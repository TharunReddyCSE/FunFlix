<?php
session_start();
$con = mysqli_connect("localhost:3306", "root", "", "funflix");

$mid = $_POST["mvidr"];
$mn = $_POST["mname"];
$rating = $_POST["rating"];

if (!$con) {
    die('error in connection' .mysqli_connect_error());
}

$query = "INSERT INTO rating(mid,mname,rating_no) VALUES('$mid','$mn','$rating')";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>alert('Movie rating has been uploaded.'); location.replace('admindashboard.php');</script>";
?>