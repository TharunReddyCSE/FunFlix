<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_POST['submit'])) {
    $mov_id = $_POST['submit'];

      $con = mysqli_connect("localhost:3306", "root", "", "funflix");

    if (!$con) {
    die("error in connection" . mysqli_connect_error());
    }

    $query1 = "SELECT * FROM movies WHERE mid='$mov_id'";
    $result1 = mysqli_query($con, $query1);
    $res1 = mysqli_fetch_assoc($result1);

    $mname = $res1['mname'];
    $yr = $res1["releasedate"];
    $gen = $res1["genre"];
    $des = $res1["descp"];
    $rt = $res1["runt"];
    $lang = $res1["lang"];
    $bimg = "Admin/uploads/bimg/" . $res1["bimg"];
    $mimg = "Admin/uploads/mimg/" . $res1['mimg'];
    $video = "Admin/uploads/videos/" . $res1["vid"];
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $mname ?></title>
    <link rel="shortcut icon" type="image/jpg" href="assests/img/favicon/clapperboard.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <link rel="stylesheet" href="movie.css">
</head>

<body class="bg-black">
    <!-- navbar -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar navbar-dark shadow shadow-0">
            <!-- Container wrapper -->
            <div class="container-fluid ms-5 me-5">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
    
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand fs-2 fw-bold" href="Home.php" style="color: rgb(241, 28, 28);">FUNFLIX</a>
                    <!-- Left links -->
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
    
                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
    
                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell text-light"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item">Welcome! To Funflix</a>
                            </li>
                            <li>
                                <a class="dropdown-item">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item">Something else here</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false"><i
                                class="fas fa-user text-white"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!-- navbar -->

    <!-- movie and its details -->
    <div class="contain">
        <img src="<?php echo $bimg ?>" alt="<?php echo $res1["bimg"] ?>" class=" w-100"
            style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="bottom-left ms-5 d-flex">
            <img src="<?php echo $mimg ?>" alt="<?php echo $res1["mimg"] ?>" width="230px" height="345px">
            <div class="container" id="img_details">
                <p class="text-white fw-light"><?php echo $yr ?></p>
                <h2 class="text-white"><?php echo $mname ?></h2>
                <div class="d-flex">
                    <p class="text-white me-4 fw-light" id="det">Runtime: <strong><?php echo $rt ?> mins</strong></p>
                    <p class="text-white me-4 fw-light" id="det">Language: <strong><?php echo $lang ?></strong></p>
                    <p class="text-white me-4 fw-light" id="det">Genre: <strong><?php echo $gen ?></strong></p>
                </div>
                <p class="text-white lh-base"><?php echo $des ?>
                </p>
                <?php
                $con = mysqli_connect("localhost:3306", "root", "", "funflix");

                if (!$con) {
                die("error in connection" . mysqli_connect_error());
                }

                $query2 = "SELECT * FROM rating WHERE mid='$mov_id'";
                $result2 = mysqli_query($con, $query2);
                $res2 = mysqli_fetch_assoc($result2);
                
                ?>
                <!-- this below input is used so that it doesn't show any waring on the page -->
                <input type="hidden" name="" value="<?php $rating = $res2['rating_no']; ?>">
                <!-- above code ends -->
                
                <?php
                    if(!empty($rating)) {
                    $rating = $res2['rating_no']. '/10';
                    } else {
                    $rating = "No rating available";
                    }
                ?>
                <p class='text-white'>Rating: <i class='far fa-star checked me-2 ms-1'></i><?php echo $rating ?></p>
                <a href="#movie">
                    <button type="button" class="btn text-white" id="btn1"><i class="fas fa-play me-2"></i>Watch</button>
                </a>
            </div>
        </div>
    </div>
    <!-- movie and its details -->


<!-- movie player -->
<div class="mt-5 mb-5 ms-5" id="movie">
    <h2 class="text-white mb-3 mt-5">Movie</h2>
    <div class="w-75 me-5 border">
        <video class="w-100 h-100" controls>
            <source src="<?php echo $video ?>" type="video/mp4">
        </video>
</div>
</div>

    <!-- movie cast -->
    <div class="mt-5 mb-5 ms-5">
        <h2 class="text-white mb-4">The Cast and Crew</h2>
        <div class="d-flex">
            
                <?php
                    $con = mysqli_connect("localhost:3306", "root", "", "funflix");

                    if (!$con) {
                    die("error in connection" . mysqli_connect_error());
                    }
                    $query3 = "SELECT * FROM casting WHERE mid = '$mov_id'";
                    $result3 = mysqli_query($con, $query3);
                        while ($res3 = mysqli_fetch_assoc($result3)) {

                            if (!empty($res3['actname'])) {
                                $act_name = $res3['actname'];
                                $act_role = $res3['actrole'];
                                $act_img = "Admin/uploads/cast/" . $res3["actimg"];

                            } else {
                                $det = "No details available";
                            }
                        
                ?>
                        <div class="d-block me-3">
                        <img src="<?php echo $act_img ?>" width="130px" height="170px" class="mb-2" alt="cast image"><br>
                        <span class="text-white mt-2 text-center"><?php echo $act_name ?></span><br>
                        <span class="text-muted fst-italic text-center"><?php echo $act_role ?></span>
                        </div>
                    <?php
                        }
                    ?>

        </div>
    </div>
    <!-- movie cast -->

</body>

</html>