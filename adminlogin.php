<html>
    <?php
  session_start();
  $con = mysqli_connect("localhost:3306", "root", "", "funflix");

    $adname =  $_POST['adname'];
    $password =  $_POST['upsw'];


    $sql = "SELECT * FROM admin WHERE adname = '$adname' AND adpsw = '$password' ";

    $result = $con->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: Admindashboard.php");
      }

?>

</html>