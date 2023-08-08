<!-- to add movie to database -->

<html>
<head>
        <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
</head>
<?php
session_start();
$con = mysqli_connect("localhost:3306", "root", "", "funflix");


$mn = $_POST["mname"];
$yr = $_POST["yearr"];
$gen = $_POST["genre"];
$des = $_POST["desc"];
$rt = $_POST["runtime"];
$lang = $_POST["lang"];
$targetbimg = "Admin/uploads/bimg/".basename($_FILES['BImg']['name']);
$targetmimg = "Admin/uploads/mimg/".basename($_FILES['MImg']['name']);
$targetvid = "Admin/uploads/videos/".basename($_FILES['Mvid']['name']);
$bimg = $_FILES['BImg']['name'];
$mimg = $_FILES['MImg']['name'];
$video = $_FILES['Mvid']['name'];

if (!$con) {
    die('Error in connection' .mysqli_connect_error());
}

$query = "INSERT INTO movies(mname,releasedate,genre,descp,runt,lang,bimg,mimg,vid) 
            VALUES('$mn','$yr','$gen','$des','$rt','$lang','$bimg','$mimg','$video')";

mysqli_query($con,$query);

if (move_uploaded_file($_FILES['BImg']['tmp_name'],$targetbimg) && move_uploaded_file($_FILES['MImg']['tmp_name'],$targetmimg) && move_uploaded_file($_FILES['Mvid']['tmp_name'],$targetvid)) {
    echo "
    <div style='left: 400px;position: absolute;'>
        <h1 style='margin-top: 100px;'>All Movie details has been uploaded</h1>
        <a class='btn btn-success mt-5 text-center' href='admindashboard.php'>Go back</a>
    </div>";
}
else {
        echo "
    <div style='left: 400px;position: absolute;'>
        <h1 class='text-capitalize' style='margin-top: 100px;'>error uploading</h1>
        <a class='btn btn-success mt-5 text-center' href='admindashboard.php'>Go back</a>
    </div>";
}
mysqli_close($con);
?>


</html>