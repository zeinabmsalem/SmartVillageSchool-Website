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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      
     <?php include 'menu.php'; ?>
        
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
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h1>Welcome to
                    <span>CSDI Schools</span>
                </h1>
                <p>“International Education That Respects Our Egyptian Heritage”?</p>
            </div>
            <!-- Schools -->
            <div class="schools">
                <div class="row">
                    <div class="col-md-4 d-sm-none d-md-block p-0">
                        <div class="grid">
                            <figure class="effect-oscar">
                                <img src="img/Kipling.png" alt="kipling">
                                <figcaption>
                                    <a href="Kipling-school/index.php">Visit</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-sm-none d-md-block p-0">
                        <div class="grid">
                            <figure class="effect-oscar">
                                <img src="img/logovoltaire.png" alt="kipling">
                                <figcaption>
                                    <a href="LyceeVoltaire/index.php">Visit</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-sm-none d-md-block p-0">
                        <div class="grid">
                            <figure class="effect-oscar">
                                <img src="img/smartkids.png" alt="kipling">
                                <figcaption>
                                    <a href="#">Visit</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles and events -->
    <div class="articles-events">
        <div class="container p-0 m-0">
            <div class="row p-0 m-0">
                <div class="col-lg-7 col-12 pl-0">
                    <!-- Acrticles -->
                    <div class="articles">
                        
                        <?php
                        
                            $sql = "select * from current_events where id = 1";

                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
            
                        ?>
                        
                        <div class="article">
                            <div class="row">
                                <div class="col-6">
                                    <div class="content-link">
                                        <!-- Content -->
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
                                        <img src="<?php echo $row['img_url']; ?>" alt="article" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                         <?php
                        
                         $sql = "select * from current_events where id = 2";
        
                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_assoc($result);
            
                        ?>
                        
                        <div class="article">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <div class="img">
                                        <img src="<?php echo $row['img_url']; ?>" alt="article" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content-link">
                                        <!-- Content -->
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
                        
                        <?php  
                         
                           $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from events where id = 1";
                           
                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                        ?>
                        
                        <ul class="event-list">
                            <li>
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
                            
                            <?php  
                         
                                $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from events where id = 2";

                                $result = mysqli_query($conn, $sql);

                                $row = mysqli_fetch_assoc($result);
                           ?>
                            
                            <li>
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
                            
                            <?php  
                         
                                $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from events where id = 3";

                                 $result = mysqli_query($conn, $sql);

                                 $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <li>
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
                            
                            
                            <?php  
                         
                                $sql = "SELECT *, MONTHNAME(event_day) as month, DAYOFMONTH(event_day) as day from events where id = 4";

                                 $result = mysqli_query($conn, $sql);

                                 $row = mysqli_fetch_assoc($result);
                           ?>
                            
                            <li>
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

    <!-- Admission -->
    <div class="admission">
        <div class="container pr-0 mr-0">
            <div class="row pr-0 mr-0">
                <div class="col-md-12 col-lg-5">
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
                <div class="col-md-7 d-sm-none d-md-block p-0 float-right">
                    <div class="title">
                        <h3>SEND ANDMISSIOM INQUIRY</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Images -->
    <div class="images">    
        <div class="container">
            <div id="columns">
                
    <?php  
    
        $sql = "select * from images where id = 1";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                
             <figure>
                    <a class="example-image-link" href="img/Mask Group 4.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>
                <?php  
    
        $sql = "select * from images where id = 2";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                <figure>
                    <a class="example-image-link" href="img/Mask Group 5.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>
                <?php  
    
        $sql = "select * from images where id = 3";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                <figure>
                    <a class="example-image-link" href="img/Mask Group 4.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>
                <?php  
    
        $sql = "select * from images where id = 4";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                <figure>
                    <a class="example-image-link" href="img/Mask Group 3.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>
                <?php  
    
        $sql = "select * from images where id = 5";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                <figure>
                    <a class="example-image-link" href="img/Mask Group 2.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>
                <?php  
    
        $sql = "select * from images where id = 6";
        
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
    ?>
                <figure>
                    <a class="example-image-link" href="img/Mask Group 6.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <img class="example-image" src="<?php echo $row['img_url']; ?>" alt="" />
                    </a>
                </figure>   
               
            </div>
        </div>
    </div>

    <!-- Footer -->
<?php include 'footer.php'; ?>
    
    
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
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <!-- Style JS -->
    <script src="js/style.js"></script>
</body>

</html>