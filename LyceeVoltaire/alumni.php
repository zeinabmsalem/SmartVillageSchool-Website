<?php

include("dbconn.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSDI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- Lightbox Images CSS -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Loader -->
    <div class="loader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>

    <!-- Visit Request -->
    <div class="request" data-toggle="modal" data-target="#exampleModal">
        <button>Visit Request</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Admission -->
                    <div class="admission">
                        <div class="container pr-0 mr-0">
                            <div class="row pr-0 mr-0">
                                <div class="col-12">
                                    <!-- Form -->
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Name -->
                                                <div class="input">
                                                    <input class="form-control" type="text" placeholder="Your Name">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <!-- Email -->
                                                <div class="input">
                                                    <input class="form-control" type="email" placeholder="Your Email">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <!-- Inquiry -->
                                                <div class="input">
                                                    <input class="form-control" type="text" placeholder="Your Inquiry">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SEND -->
                                        <div class="send text-center">
                                            <input type="submit" value="SEND">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
       
        <?php include 'menu_lycee.php';?>
        
        <!-- Search -->
        <div id="sb-search" class="sb-search ">
            <form>
                <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Enter your search term..." onblur="monkey();" type="search"
                    value="" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search">
                    <img src="img/search.png" alt="">
                </span>
            </form>
        </div>
    </nav>

    <!-- Alumni -->
    <div class="alumni">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- Side Links -->
                    <div class="side-links">
                        <ul>
                            <li class="active">
                                <a href="alumni.php">Nos remises de diplômes</a>
                            </li>
                            <li>
                                <a href="alumni-photo.php">Photos</a>
                            </li>
                            <li>
                                <a href="alumni-university.php">Nos diplômés</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <!-- Header -->
                    
                     <?php
                        
                            $sql = "select * from header_alumni_lycee where id = 1";

                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
            
                        ?>
                    <div class="header">
                        <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <p><?php echo $row['summary']; ?></p>
                    </div>
                    <!-- Trustees -->
                    <div class="trustees">
                        <div class="conatiner">
                            <div class="row">
                                
                                <div class="col-6 text-right">
                                    <div class="chatacter">
                                        <div class="img">
                                               <?php
                        
                                                $sql = "select * from endpage_alumni_lycee where id = 1";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);

                                            ?>
                                            <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                            <div class="info">
                                                <h4><?php echo $row['name']; ?></h4>
                                                <p><?php echo $row['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               <div class="col-6 text-right">
                                    <div class="chatacter">
                                        <div class="img">
                                               <?php
                        
                                                $sql = "select * from endpage_alumni_lycee where id = 2";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);

                                            ?>
                                            <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                            <div class="info">
                                                <h4><?php echo $row['name']; ?></h4>
                                                <p><?php echo $row['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6 text-right">
                                    <div class="chatacter">
                                        <div class="img">
                                               <?php
                        
                                                $sql = "select * from endpage_alumni_lycee where id = 3";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);

                                            ?>
                                            <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                            <div class="info">
                                                <h4><?php echo $row['name']; ?></h4>
                                                <p><?php echo $row['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6 text-right">
                                    <div class="chatacter">
                                        <div class="img">
                                               <?php
                        
                                                $sql = "select * from endpage_alumni_lycee where id = 4";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);

                                            ?>
                                            <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                            <div class="info">
                                                <h4><?php echo $row['name']; ?></h4>
                                                <p><?php echo $row['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   <?php include 'footer_lycee.php'; ?>

    <!-- jQuery JS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Nice Scroll JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <!-- Lightbox Images JS -->
    <script src="js/lightbox.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper.js"></script>
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <!-- Mixitup JS -->
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <!-- Style JS -->
    <script src="js/style.js"></script>
</body>

</html>