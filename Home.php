<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$con = mysqli_connect("localhost:3306", "root", "", "funflix");

if (!$con) {
    die("error in connection" . mysqli_connect_error());
}
$id = $_SESSION['id'];
$quer = "SELECT * FROM user_regis WHERE id = '$id' ";
$check = mysqli_query($con,$quer);
$rel = mysqli_fetch_assoc($check);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNFLIX</title>
    <link rel="shortcut icon" type="image/jpg" href="assests/img/favicon/clapperboard.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <link href="demo.css" rel="stylesheet">
</head>

<body class="bg-black">
    <!-- navbar -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar navbar-dark shadow shadow-0">
            <!-- Container wrapper -->
            <div class="container-fluid ms-5 me-5">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand fs-2 fw-bold" href="Home.php" style="color: rgb(241, 28, 28);">FUNFLIX</a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">

                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->

                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell text-light"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item">Welcome! To Funflix <?php echo $rel['uname'] ?></a>
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
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false"><i class="fas fa-user text-white"></i></a>
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

    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="5" aria-label="Slide 6"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <form method='POST' action='movies.php'>
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="assests/img/cropped/doctormadness.png" class="d-block w-100" alt="Doctor Strange multiverse of Madness" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">Doctor Strange in the Multiverse <br> of Madness</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">Doctor Strange teams up with a mysterious
                        teenage girl from his dreams who can travel across multiverses, to battle
                        multiple threats, including other-universe versions of himself, which threaten to wipe out
                        millions across the
                        multiverse.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="3" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                        </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="3" class="btn text-light btn-outline-light">More Info</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="assests/img/overlay images/avatar2overlay.png" class="d-block w-100" alt="Avatar: The Way of Water" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">Avatar: The Way of Water</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">Jake Sully and Ney'tiri have formed a
                        family and are doing everything to stay together. However, they must leave their
                        home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a
                        difficult war against the
                        humans.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="4" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                        </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="4" class="btn text-light btn-outline-light">More Info</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="assests/img/cropped/junglecruise-crop2.png" class="d-block w-100" alt="Jungle Cruise" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">Jungle Cruise</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">Dr Lily Houghton, a researcher, and her
                        brother team up
                        with Frank, a skipper, to locate a mystical tree in the Amazon.
                        However, they are pursued by evil entities lusting after immortality.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="5" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                        </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="5" class="btn text-light btn-outline-light">More Info</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="assests/img/cropped/thorthunder-crop.png" class="d-block w-100" alt="Thor: Love and Thunder" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">Thor: Love and Thunder</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">Marvel Studios’ “Thor: Love and Thunder”
                        finds the God of Thunder on a journey unlike anything he’s ever faced—one of
                        self-discovery. But his efforts are interrupted by a galactic killer known as Gorr the God
                        Butcher, who seeks the
                        extinction of the gods. To combat the threat, Thor enlists the help of King Valkyrie, Korg and
                        ex-girlfriend Jane
                        Foster, who—to Thor’s surprise—inexplicably wields his magical hammer, Mjolnir, as the Mighty
                        Thor.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="6" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                        </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="6" class="btn text-light btn-outline-light">More Info</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="assests/img/overlay images/johnwick3overlay.png" class="d-block w-100" alt="John Wick: Chapter 3 – Parabellum" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">John Wick: Chapter 3 – Parabellum</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">John Wick is declared excommunicado and a
                        hefty bounty is set on him after he murders an international crime lord. He
                        sets out to seek help to save himself from ruthless hitmen and bounty hunters.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="2" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                        </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="2" class="btn text-light btn-outline-light">More Info</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="assests/img/cropped/spiderm1an-crop.png" class="d-block w-100" alt="Spider-Man: No Way Home" />
                <div class="carousel-caption d-grid justify-content-start start-0 ps-5 text-block">
                    <h1 class="text-start">Spider-Man: No Way Home</h1>
                    <p class="text-start w-50 mt-3" style="font-size: 15px;">Spider-Man seeks the help of Doctor Strange to forget his exposed
                        secret identity as Peter Parker. However, Strange's spell goes horribly wrong, leading to unwanted guests entering their universe.</p>
                    <div class="d-flex justify-contents-start">
                        <a class="text-start pe-3">
                            <button type="submit" name="submit" value="7" class="btn text-light" id="btn1"><i class="fas fa-play pe-2"></i>Play</button>
                    </a>
                        <a class="text-start">
                            <button type="submit" name="submit" value="7" class="btn text-light btn-outline-light">More
                                Info</button>
                            </a>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->

    <!-- Latest Movies -->
    <div class="container-fluid justify-content-between start-0 ps-5 mb-5 mt-5" id="mov">
        <h3 class="text-white mb-4">Latest Movies</h3>
        <hr class="text-white">
        <div class="row d-flex gy-5">
            <div class="col">
                <form method='POST' action='movies.php'>
                    <?php
                    $con = mysqli_connect("localhost:3306", "root", "", "funflix");

                    if (!$con) {
                        die("error in connection" . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM movies ORDER BY mid DESC LIMIT 6";
                    $result = mysqli_query($con, $query);
                    while ($res = mysqli_fetch_assoc($result)) {

                        $mid = $res['mid'];
                        $target = "Admin/uploads/mimg/" . $res['mimg'];

                    ?>
                        <button type='submit' class='btn' name='submit' value='<?php echo $mid ?>' style='padding: 0;'>
                            <img src='<?php echo $target ?>' class='me-2 mb-5' id='zimg' width='200' height='300' alt='Submit Form'></button>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <!-- Latest Movies -->

    <!-- All Movies -->
    <div class="container-fluid justify-content-between start-0 ps-5 mb-5 mt-5" id="mov">
        <h3 class="text-white mb-4">All Movies</h3>
        <hr class="text-white">
        <div class="row d-flex gy-5">
            <div class="col">
                <form method='POST' action='movies.php'>
                    <?php
                    $con = mysqli_connect("localhost:3306", "root", "", "funflix");

                    if (!$con) {
                        die("error in connection" . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM movies ORDER BY mname ASC";
                    $result = mysqli_query($con, $query);
                    while ($res = mysqli_fetch_assoc($result)) {

                        $mid = $res['mid'];
                        $target = "Admin/uploads/mimg/" . $res['mimg'];

                    ?>
                        <button type='submit' class='btn shadow-0' name='submit' value='<?php echo $mid ?>' style='padding: 0;'>
                            <img src='<?php echo $target ?>' class='me-2 mb-5' id='zimg' width='200' height='300' alt='Submit Form'></button>
                    <?php
                    }
                    mysqli_close($con);
                    ?>
                </form>
            </div>
        </div>
    </div>
    <!-- All Movies -->
</body>

</html>