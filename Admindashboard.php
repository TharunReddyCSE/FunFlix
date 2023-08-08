<?php
session_start();

$conn = mysqli_connect("localhost:3306", "root", "", "funflix");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//once the form is submitted i.e 
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM movies WHERE mid = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Movie with ID: $id has been deleted.')</script>";
    } else {
        echo "<script>alert('Error deleting movie with ID: $id')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/jpg" href="assests/img/favicon/clapperboard.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <style>
        .fa-bars {
            color: rgba(255, 0, 0, 0.911);
        }

        .navbar-brand {
            color: rgba(255, 0, 0, 0.911);
        }

        #btn1 {
            background-color: rgba(255, 0, 0, 0.911);
        }

        .css-serial {
            counter-reset: serial-number;
            /* Set the serial number counter to 0 */
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            /* Increment the serial number counter */
            content: counter(serial-number);
            /* Display the counter */
        }

        
    </style>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script src="assests/js/jquery.min.js"></script>
    <script>
        function getMovname(val) {
            $.ajax({
                type: "POST",
                url: "get_movie.php",
                data: 'movid=' + val,
                success: function (data) {
                    //alert(data);
                    $('#moviename').val(data);
                }
            });
        }
    </script>
    <script>
    function getMovnamer(val) {
        $.ajax({
            type: "POST",
            url: "get_movie.php",
            data: 'movid=' + val,
            success: function (data) {
                //alert(data);
                $('#movienamer').val(data);
            }
        });
    }
</script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-0 border-bottom">
        <!-- Container wrapper -->
        <div class="container-fluid ms-5 me-5">
            <!-- Navbar brand -->
            <a class="navbar-brand fs-2 fw-bold" href="index.html">FUNFLIX</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <!-- Left links -->
                <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                        <a href="adminlogout.php" class="fs-5 text-dark">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <h1 class="text-dark text-center text-decoration-underline mt-5">Admin Dashboard</h1>
    <!-- Pills -->
    <section class="mb-5">
        <div class="mb-5 mt-4 ms-5 justify-content-center">
            <!-- Pills navs -->
            <ul class="nav nav-pills mb-3 justify-content-center" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="true">Add movies</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Delete movies</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Add Actors and Crew</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-5" data-mdb-toggle="pill" href="#ex1-pills-5" role="tab" aria-controls="ex1-pills-5" aria-selected="false">Rating</a>
                </li>
            </ul>
            <!-- Pills navs -->
        </div>

        <!-- Pills content -->
        <div class="tab-content" id="ex1-content">
            <!-- ALL MOVIES -->
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
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
                                <button type='submit' class="btn shadow-0" name='submit' value='<?php echo $mid ?>' style='padding: 0;'>
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
            </div>

            <!-- ADD MOVIES -->
            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <section class="d-flex justify-content-center mb-5 mt-5 ms-4">
                    <div class="flex-wrap">
                        <h3 class="text-black">Upload Movie Details to the Database.<span class="opacity-0">Actorandil</span></h3>
                        <p class="text-muted mb-4">Enter the details below.</p>
                        <!-- adding movie form -->
                        <form action="addmovie.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="mname" id="floatingInput" title="Enter Movie Name" placeholder="Movie name" minlength="4" maxlength="80" autocomplete="off" pattern="[a-zA-Z\s-,0-9]+$" required>
                                <label for="floatingInput">Movie name</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" id="formYear" name="yearr" class="form-control" id="floatingPassword" placeholder="Year of release" title="Enter the year of Release" min="1980" max="2023" required>
                                        <label for="formYear">Year of release</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" id="formGenre" name="genre" class="form-control" placeholder="Genre" title="Enter the Genre's of the Movie" pattern="[^0-9][a-zA-Z,\s-]+$" minlength="4" maxlength="25" required>
                                        <label for="formGenre">Genre</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="desc" id="floatingDes" placeholder="Description" title="Enter the Description of the Movie" minlength="15" maxlength="500" required>
                                <label for="floatingDes">Description</label>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" id="formRTime" name="runtime" class="form-control" min="20" max="250" placeholder="Runtime" required>
                                        <label for="formRTime">Runtime</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" id="formLang" name="lang" class="form-control" placeholder="Language" title="What is the Language of the Movie" pattern="[^0-9][a-zA-Z]+$" minlength="3" maxlength="20" required>
                                        <label for="formLang">Language</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="backimg">Upload Movie Background Image</label>
                                <input type="file" class="form-control" name="BImg" id="backimg" required>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label" for="movieimg">Upload Movie Image</label>
                                    <input type="file" class="form-control" name="MImg" id="movieimg" required>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="movvideo">Upload Movie Video</label>
                                    <input type="file" class="form-control" name="Mvid" id="movvideo" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-lg text-white btn-block fs-6" name="upload" id="btn1">upload</button>

                        </form>
                        <!-- adding movie form ends -->
                    </div>
                </section>
            </div>

            <!-- DELETE MOVIES -->
            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                <div class="container mb-5">
                    <table class="table table-hover table-bordered css-serial">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">ID</th>
                                <th scope="col">Movie Name</th>
                                <th scope="col">Year of release</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-normal">
                            <form method='POST'>
                            <?php
                            //setting connection with database
                            $conec = mysqli_connect("localhost:3306", "root", "", "funflix");

                            $query1 = mysqli_query($conec, "SELECT * FROM movies");
                            while ($row = mysqli_fetch_array($query1)) {

                                $mid = $row["mid"];
                                $mname = $row["mname"];
                                $year = $row["releasedate"];
                                
                                ?>
                                <tr>
                                <td></td>
                                <td><?php echo $mid;?></td>
                                <td><?php echo $mname;?></td>
                                <td><?php echo $year;?></td>
                                <td>
                                <button type='submit' class="btn text-white" id="btn1" name='delete' onclick="return confirm('Do you want to delete!! -<?php echo $mname ?>');" value='<?php echo $mid; ?>'>
                                <span>DELETE</span>
                                </button>
                                </td>
                                <?php
                            }
                            
                            ?>
                            </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ADD Actors and crew -->
            <div class="tab-pane fade" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                <section class="d-grid justify-content-center mb-5 mt-5 ms-4">
                    <div class="flex-wrap">
                        <h3 class="text-black">Upload Cast and Crew details <span class="opacity-0">Actorandcrewdetail</span> </h3>
                        <p class="text-muted mb-4">Enter the details carefully.</p>
                        <!-- adding movie form -->
                        <form action="add-actor.php" method="POST" enctype="multipart/form-data" class="needs-validation justify-content-center align-content-center" novalidate>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" name="mvid" id="formMovid1" onchange="getMovname(this.value);" placeholder="Genre" title="Enter the Genre's of the Movie" required>
                                                <option disabled selected value="">Select Movie ID</option>
                                                    <?php 
                                                    $con = mysqli_connect("localhost:3306", "root", "", "funflix");
                                                    if (!$con) {
                                                        die("error in connection" . mysqli_connect_error());
                                                    }
                                                    $query = "SELECT * FROM movies";
                                                    $result = mysqli_query($con, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                <option value="<?php echo $row['mid'];?>"><?php echo $row['mid'];?></option>
                                                <?php }
                                                    mysqli_close($con);
                                                ?>
                                        </select>
                                        <label for="formMovid1">Movie ID</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="mname" id="moviename" placeholder="Movie name" required readonly>
                                        <label for="moviename">Movie name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="actname" id="formActName" class="form-control" placeholder="Actor Name" title="Enter the Actor name" 
                                        minlength="3" maxlength="30" pattern="[^0-9][A-Za-z\s]+" autocomplete="off" required>
                                        <label for="formActName">Actor Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" name="role" id="formActRole" aria-label="Default select example" required>
                                            <option disabled selected value="">Select the Role</option>
                                            <option value="Director">Director</option>
                                            <option value="Lead Actor">Lead Actor</option>
                                            <option value="Lead Actress">Lead Actress</option>
                                            <option value="Villain">Villain</option>
                                        </select>
                                        <label for="formActRole">Actor/Crew Role</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="ActImg">Upload Actor Image</label>
                                <input type="file" name="actimg" class="form-control" id="ActImg" required>
                            </div>

                            <button type="submit" class="btn btn-lg text-white btn-block fs-6" id="btn1">upload</button>

                        </form>
                        <!-- adding movie form ends -->
                    </div>
                </section>
            </div>

            <!-- ADD RATING -->
            <div class="tab-pane fade" id="ex1-pills-5" role="tabpanel" aria-labelledby="ex1-tab-5">
                <section class="d-grid justify-content-center mb-5 mt-5 ms-4">
                    <div class="flex-wrap">
                        <h3 class="text-black">Upload Movie Rating. <span class="opacity-0">Upload Movie Rating. Upload Mov</span> </h3>
                        <p class="text-muted mb-4">Enter the Rating carefully.</p>
                        <!-- adding movie form -->
                        <form action="rating.php" method="POST" enctype="multipart/form-data" class="needs-validation justify-content-center align-content-center" novalidate>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                            <select class="form-select" name="mvidr" id="formMovid2" onchange="getMovnamer(this.value);" placeholder="Movie ID" title="Enter the Genre's of the Movie" required>
                                                <option disabled selected value="">Select Movie ID</option>
                                                    <?php 
                                                    $con = mysqli_connect("localhost:3306", "root", "", "funflix");
                                                    if (!$con) {
                                                        die("error in connection" . mysqli_connect_error());
                                                    }
                                                    $query = "SELECT * FROM movies";
                                                    $result = mysqli_query($con, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                <option value="<?php echo $row['mid'];?>"><?php echo $row['mid'];?></option>
                                                <?php } mysqli_close($con); ?>
                                            </select>
                                        <label for="formMovid2">Movie ID</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="mname" id="movienamer" placeholder="Movie name" required readonly>
                                        <label for="moviename">Movie name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" id="fromrating" name="rating" class="form-control" placeholder="Rating" title="Enter the Genre's of the Movie" pattern="([0-9](\.[0-9])?)|(10)" required>
                                <label for="fromrating">Rating</label>
                            </div>
                            <button type="submit" class="btn btn-lg text-white btn-block fs-6" id="btn1">upload</button>

                        </form>
                        <!-- adding movie form ends -->
                    </div>
                </section>
            </div>
        </div>
        <!-- Pills content -->
    </section>
</body>

</html>