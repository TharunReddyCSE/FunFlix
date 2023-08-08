<!-- to actors/ casting to the database -->

<?php
session_start();
$con = mysqli_connect("localhost:3306", "root", "", "funflix");

$mid = $_POST["mvid"];
$mn = $_POST["mname"];
$actname = $_POST["actname"];
$role = $_POST["role"];
$targetactimg = "Admin/uploads/cast/".basename($_FILES['actimg']['name']);
$actimg = $_FILES['actimg']['name'];

if (!$con) {
    die('error in connection' .mysqli_connect_error());
}

$query = "INSERT INTO casting(mid,mname,actname,actrole,actimg) VALUES('$mid','$mn','$actname','$role','$actimg')";
mysqli_query($con,$query);


if (move_uploaded_file($_FILES["actimg"]["tmp_name"],$targetactimg)) {
    echo "All the casting details has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your details.";
}
mysqli_close($con);
?>