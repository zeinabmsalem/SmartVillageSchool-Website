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

    <!-- About -->
    <div class="about-page">
        <!-- Side nav-->
        <div class="side-nav">
            <ul>
                <li>
                    <a href="about.php">
                        <img src="img/info-sign.png" alt="about">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/email.png" alt="Letter">
                    </a>
                </li>
                <li>
                    <a href="trustees.php">
                        <img src="img/group.png" alt="trustees">
                    </a>
                </li>
            </ul>
        </div>

                <?php

                     $sql = "select * from header_about";

                     $result = mysqli_query($conn, $sql);

                     $row = mysqli_fetch_assoc($result);

                 ?>
        
        <!-- Header -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php echo $row['img_url']; ?>" alt="">
                    </div>
                    <div class="col-8">
                        <div class="content">
                            <h2><?php echo $row['title']; ?></h2>
                            <p>“<?php echo $row['summary']; ?>” </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-about">
            <div class="container">
                <p><?php echo $row['content']; ?></p>
                <p><?php echo $row['content']; ?></p>
            </div>
        </div>
        
        <!-- Chairman -->
        <div class="chairman">
            <div class="container">
                <div class="row">
                    
                    <?php
                    
                        $sql = "select * from letter_from_chairman_about";
        
                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_assoc($result);
                    
                    ?>
                    
                     <?php
                                                       
                        $sql = "SHOW COLUMNS FROM letter_from_chairman_about";

                         $result = mysqli_query($conn, $sql);

                         while ($record = mysqli_fetch_array($result)){
                             $fields[] = $record['0']; 

                         }
                    ?>
                    
                    <div class="col-6 text-center">
                        <h3><?php echo $fields[1]; ?></h3>
                        <a href="#">SHOW</a>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo $row["$fields[1]"]; ?>" alt="" class="img-fluid">
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
                        <h3><?php echo $fields[2]; ?></h3>
                    </div>
                    <div class="col-6">
                        <p><?php echo $row["$fields[2]"]; ?></p>
                    </div>
                    <!-- Vision -->
                    <div class="col-6">
                        <p><?php echo $row["$fields[3]"]; ?></p>
                    </div>
                    <div class="col-6 text-center">
                        <h3><?php echo $fields[3]; ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trustees -->
        <div class="trustees">
            <div class="container">
                <h3 class="text-center">
                    Board of trustees
                </h3>
                <a href="trustees.php">MEET</a>
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