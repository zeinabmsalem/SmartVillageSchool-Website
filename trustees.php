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
    <div class="about-page-trustees">
        <!-- Side nav-->
        <div class="side-nav">
            <ul>
                <li>
                    <a href="#">
                        <img src="img/info-sign.png" alt="about">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/email.png" alt="Letter">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/group.png" alt="trustees">
                    </a>
                </li>
            </ul>
        </div>

        <!-- Header -->
        <div class="header">
            <h2>Board of trustees</h2>
        </div>

        <!-- Trustees -->
        <div class="trustees">
            <div class="conatiner">
                <div class="row">
                    <div class="col-6 text-right">
                        <div class="chatacter">
                            <div class="img">
                                <img src="img/trustees-1.png" alt="" class="img-fluid">
                                <div class="info">
                                    <h4>Lisa Voorwinde</h4>
                                    <p>Deputy Chairperman, Parent Trustee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-left">
                        <div class="chatacter">
                            <div class="img">
                                <img src="img/trustees-1.png" alt="" class="img-fluid">
                                <div class="info">
                                    <h4>Lisa Voorwinde</h4>
                                    <p>Deputy Chairperman, Parent Trustee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="chatacter">
                            <div class="img">
                                <img src="img/trustees-1.png" alt="" class="img-fluid">
                                <div class="info">
                                    <h4>Lisa Voorwinde</h4>
                                    <p>Deputy Chairperman, Parent Trustee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-left">
                        <div class="chatacter">
                            <div class="img">
                                <img src="img/trustees-1.png" alt="" class="img-fluid">
                                <div class="info">
                                    <h4>Lisa Voorwinde</h4>
                                    <p>Deputy Chairperman, Parent Trustee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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