<?php
$con = mysqli_connect("localhost:3306", "root", "", "funflix");

$un = $_POST["uname"];
$psw = $_POST["upsw"];
$mail = $_POST["email"];

if (!$con) {
    die('Error in connection' .mysqli_error(mysqli_connect()));
}

$query = "INSERT INTO user_regis(uname,uemail,upsw) VALUES('$un','$mail','$psw')";

if ($con->query($query) === TRUE) {
    mysqli_close($con);
    echo "<script>alert('Registration successful!'); location.replace('signin.html');</script>";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}
?>
