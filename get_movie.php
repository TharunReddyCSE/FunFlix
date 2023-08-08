<?php

//this is used by the ajax code present in the admindashboard.php 
//file to ge the movie name when the movie id is selected

$conn = mysqli_connect("localhost:3306", "root", "", "funflix");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['movid'])){
    $value = $_POST['movid'];
    $query = "SELECT * FROM movies WHERE mid = '$value'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['mname'];
    }
}

mysqli_close($conn);
?>