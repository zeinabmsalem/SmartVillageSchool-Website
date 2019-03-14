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
        
     <?php include 'menu_kipling.php'; ?>
    
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

    <!-- Header -->
    <div class="header">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slider1.png" alt="First slide">
                    <!-- Title -->
                    <div class="title text-center">
                        <h1>Welcome to
                            <span>Kipling School</span>
                        </h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider1.png" alt="First slide">
                    <!-- Title -->
                    <div class="title text-center">
                        <h1>Welcome to
                            <span>Kipling School</span>
                        </h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider1.png" alt="First slide">
                    <!-- Title -->
                    <div class="title text-center">
                        <h1>Welcome to
                            <span>Kipling School</span>
                        </h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    
    
    <!-- Articles and events -->
    <div class="articles-events">
        <div class="container p-0 m-0">
            <div class="row p-0 m-0">
                <div class="col-lg-7 col-12 pl-0">
                    <!-- Acrticles -->
                    <div class="articles">
                        <div class="article">
                            <div class="row">
                                <div class="col-6">
                                    <div class="content-link">
                                        <!-- Content -->
                                        
                                            <?php

                                                    $sql = "select * from current_events_kipling where id = 1";

                                                    $result = mysqli_query($conn, $sql);

                                                    $row = mysqli_fetch_assoc($result);

                                            ?>
                                        
                                        <div class="content">
                                            <p><?php echo $row['summary']; ?></p>
                                        </div>
                                        <!-- Link -->
                                        <div class="link">
                                            <a href="#" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 p-0">
                                    <div class="img">
                                        <img src="<?php echo $row['image']; ?>" alt="article" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <div class="img">
                                        <img src="<?php echo $row['image']; ?>" alt="article" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content-link">
                                        <!-- Content -->
                                        
                                            <?php

                                                    $sql = "select * from current_events_kipling where id = 1";

                                                    $result = mysqli_query($conn, $sql);

                                                    $row = mysqli_fetch_assoc($result);

                                            ?>
                                        <div class="content">
                                            <p><?php echo $row['summary']; ?></p>
                                        </div>
                                        <!-- Link -->
                                        <div class="link">
                                            <a href="#" class="btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Link -->
                    <div class="link-all float-right">
                        <a href="#">View more</a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 p-0">
                    <!-- Events -->
                    <div class="events">
                        <!-- Title -->
                        <h2 class="text-center">Upcoming Events</h2>
                        <!-- Event list -->
                        <ul class="event-list">
                            <li>
                                
                                <?php

                                    $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from upcoming_events_kipling where id = 1";

                                    $result = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($result);

                                ?>
                                
                                <div class="row p-0 m-0">
                                    <div class="col-2">
                                        <!-- Date -->
                                        <div class="date">
                                            <div class="month">
                                                <?php 
                                                
                                                $month =  $row['month']; 
                                                echo substr($month, 0, 3);
                                                ?>
                                            </div>
                                            <div class="day">
                                                <?php echo $row['day']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <!-- Content -->
                                        <div class="content">
                                            <h3><?php echo $row['title']; ?></h3>
                                            <p><?php echo date('g:i a', strtotime($row['start_time'])); ?> to <?php echo date('g:i a', strtotime($row['end_time'])); ?> , <?php echo $row['location']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                
                                <?php

                                    $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from upcoming_events_kipling where id = 2";

                                    $result = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($result);

                                ?>
                                
                                <div class="row p-0 m-0">
                                    <div class="col-2">
                                        <!-- Date -->
                                        <div class="date">
                                            <div class="month">
                                                <?php 
                                                
                                                $month =  $row['month']; 
                                                echo substr($month, 0, 3);
                                                ?>
                                            </div>
                                            <div class="day">
                                                <?php echo $row['day']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <!-- Content -->
                                        <div class="content">
                                            <h3><?php echo $row['title']; ?></h3>
                                            <p><?php echo date('g:i a', strtotime($row['start_time'])); ?> to <?php echo date('g:i a', strtotime($row['end_time'])); ?> , <?php echo $row['location']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                
                                <?php

                                    $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from upcoming_events_kipling where id = 3";

                                    $result = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($result);

                                ?>
                                
                                <div class="row p-0 m-0">
                                    <div class="col-2">
                                        <!-- Date -->
                                        <div class="date">
                                            <div class="month">
                                                <?php 
                                                
                                                $month =  $row['month']; 
                                                echo substr($month, 0, 3);
                                                ?>
                                            </div>
                                            <div class="day">
                                                <?php echo $row['day']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <!-- Content -->
                                        <div class="content">
                                            <h3><?php echo $row['title']; ?></h3>
                                            <p><?php echo date('g:i a', strtotime($row['start_time'])); ?> to <?php echo date('g:i a', strtotime($row['end_time'])); ?> , <?php echo $row['location']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                
                                <?php

                                    $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from upcoming_events_kipling where id = 4";

                                    $result = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($result);

                                ?>
                                
                                <div class="row p-0 m-0">
                                    <div class="col-2">
                                        <!-- Date -->
                                        <div class="date">
                                            <div class="month">
                                                <?php 
                                                
                                                $month =  $row['month']; 
                                                echo substr($month, 0, 3);
                                                ?>
                                            </div>
                                            <div class="day">
                                                <?php echo $row['day']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <!-- Content -->
                                        <div class="content">
                                            <h3><?php echo $row['title']; ?></h3>
                                            <p><?php echo date('g:i a', strtotime($row['start_time'])); ?> to <?php echo date('g:i a', strtotime($row['end_time'])); ?> , <?php echo $row['location']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Link -->
                        <div class="link-all float-right">
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <?php

            $sql = "select * from kipling_school_homepage";

            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            
             $sql = "SHOW COLUMNS FROM kipling_school_homepage";

                $result = mysqli_query($conn, $sql);

                while ($record = mysqli_fetch_array($result)){
                    $fields[] = $record['0']; 

                }

        ?>
    
    <!-- Chairman -->
    <div class="chairman">
        <div class="container">
            <div class="row">
                
                 <?php
                    
                        $sql = "select * from kipling_school_homepage";
        
                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_assoc($result);
                    
                    ?>
                    
                     <?php
                                                       
                        $sql = "SHOW COLUMNS FROM kipling_school_homepage";

                         $result = mysqli_query($conn, $sql);

                         while ($record = mysqli_fetch_array($result)){
                             $fields[] = $record['0']; 

                         }
                    ?>
                
                <div class="col-6 text-center">
                    <h3><?php echo $fields[4]; ?></h3>
                    <a href="#">SHOW</a>
                </div>
                <div class="col-6">
                    <img src="<?php echo $row["$fields[4]"]; ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Mission and vision -->
    <div class="mission-vision">
        <div class="container">
            <div class="row">
                <!-- Mission -->
                <div class="col-6 text-center">
                    <h3><?php echo $fields[1]; ?></h3>
                </div>
                <div class="col-6">
                    <p><?php echo $row["$fields[1]"]; ?></p>
                </div>
                <!-- Vision -->
                <div class="col-6">
                    <p><?php echo $row["$fields[2]"]; ?></p>
                </div>
                <div class="col-6 text-center">
                    <h3><?php echo $fields[2]; ?></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Accreditation -->
    <div class="accreditation">
        <div class="container">
            <h3><?php echo $fields[3]; ?></h3>
            <div class="content">
                <p><?php echo $row["$fields[3]"]; ?></p>
            </div>
        </div>
    </div>


    <!--  testimonial  -->
    <div class="testimonial">
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="chatacter">
                            <div class="img">
                                
                                 <?php

                                        $sql = "select * from endpage_kipling where id = 1";

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
                    
                   <div class="swiper-slide">
                        <div class="chatacter">
                            <div class="img">
                                
                                 <?php

                                        $sql = "select * from endpage_kipling where id = 2";

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
                    <div class="swiper-slide">
                        <div class="chatacter">
                            <div class="img">
                                
                                 <?php

                                        $sql = "select * from endpage_kipling where id = 3";

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
                    <div class="swiper-slide">
                        <div class="chatacter">
                            <div class="img">
                                
                                 <?php

                                        $sql = "select * from endpage_kipling where id = 4";

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
                   <div class="swiper-slide">
                        <div class="chatacter">
                            <div class="img">
                                
                                 <?php

                                        $sql = "select * from endpage_kipling where id = 5";

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
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Annual Calendar -->
    <div class="annual">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="img/schedule.png" alt="" class="img-fluid">
                </div>
                <div class="col-6 text-center">
                    <h3>Annual
                        <br>Calendar</h3>
                    <a href="#">SHOW</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer_kipling.php'; ?>
    
    <!-- End Footer -->
    
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
    <!-- Style JS -->
    <script src="js/style.js"></script>
</body>

</html>