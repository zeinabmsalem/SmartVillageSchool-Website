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

    <!-- Acrivities -->
    <div class="activities">
        <!-- Header -->
        <div class="header">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        
                        <?php
                         
                            $sql = "SELECT * from activites";

                             $result = mysqli_query($conn, $sql);

                             $row = mysqli_fetch_assoc($result);
                        ?>
                                                
                        <img class="d-block w-100" src="<?php echo $row['img_url']; ?>" alt="First slide">
                    </div>
<!--                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $row['img_url']; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $row['img_url']; ?>" alt="Third slide">
                    </div>-->
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

        <!-- Articles -->
        <div class="articles">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <!-- Last -->
                        <div class="last">
                            <h3>Last articles</h3>
                            <?php
                         
                            $sql = "SELECT * from last_articles where id=1";

                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                             
                            ?>
                            <div class="row">

                                <div class="col-6">
                                    <div class="img">
                                        <a href="#">
                                            <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                            <div class="content">
                                                <h4><?php echo $row['title']; ?></h4>
                                                <p><?php echo $row['summary']; ?></p>
                                            </div>
                                            
                                    
                                        </a>
                                    </div>
                                    
                                </div>
                                
                          <?php
                         
                            $sql = "SELECT * from last_articles where id=2";

                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                             
                            ?>
                                <div class="col-6">
                                    <div class="img">
                                        <a href="#">
                                            <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                            <div class="content">
                                                <h4><?php echo $row['title']; ?></h4>
                                                <p><?php echo $row['summary']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            <?php
                         
                                $sql = "SELECT * from last_articles where id=3";

                                $result = mysqli_query($conn, $sql);

                                $row = mysqli_fetch_assoc($result);
                             
                            ?>
                              <div class="col-6">
                                    <div class="img">
                                        <a href="#">
                                            <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                            <div class="content">
                                                <h4><?php echo $row['title']; ?></h4>
                                                <p><?php echo $row['summary']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            <?php
                         
                                $sql = "SELECT * from last_articles where id=4";

                                $result = mysqli_query($conn, $sql);

                                $row = mysqli_fetch_assoc($result);
                             
                            ?>
                               <div class="col-6">
                                    <div class="img">
                                        <a href="#">
                                            <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                            <div class="content">
                                                <h4><?php echo $row['title']; ?></h4>
                                                <p><?php echo $row['summary']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                    
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <!-- Popular -->
                        <div class="popular">
                            <h3>Popular articles</h3>
                            <ul>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            
                                    <?php

                                        $sql = "SELECT * from popular_articles where id=1";

                                        $result = mysqli_query($conn, $sql);

                                        $row = mysqli_fetch_assoc($result);

                                    ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                                    <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            <?php
                         
                                                $sql = "SELECT * from popular_articles where id=2";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);
                             
                                          ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                                    <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            
                                            <?php
                         
                                                $sql = "SELECT * from popular_articles where id=3";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);
                             
                                          ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                               <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            
                                            <?php
                         
                                                $sql = "SELECT * from popular_articles where id=4";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);
                             
                                          ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                                    <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            
                                            <?php
                         
                                                $sql = "SELECT * from popular_articles where id=5";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);
                             
                                          ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                                    <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="row">
                                            
                                            <?php
                         
                                                $sql = "SELECT * from popular_articles where id=6";

                                                $result = mysqli_query($conn, $sql);

                                                $row = mysqli_fetch_assoc($result);
                             
                                          ?>
                                            <div class="col-4">
                                                <div class="img">
                                                    <img src="<?php echo $row['img_url']; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="content-article">
                                                   <p><?php echo $row['summary']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="container">
                
                 <?php
                         
                        $sql = "SELECT * from endpage_activites";

                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_assoc($result);

                  ?>
                
                <img src="<?php echo $row['image']; ?>" alt="">
                <p><?php echo $row['summary']; ?></p>
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