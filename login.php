<?php
  session_start();
  $con = mysqli_connect("localhost:3306", "root", "", "funflix");


    $usermail =  $_POST['uemail'];
    $password =  $_POST['upsw'];


    $sql = "SELECT * FROM user_regis WHERE uemail = '$usermail' AND upsw = '$password' ";

    $result = $con->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "<script>alert('incorrect username or password'); location.replace('signin.html');</script>";
    }
    else {
        $_SESSION['id'] = $row['id'];
        header("Location: Home.php");
      }
session_name($uname);
?>
