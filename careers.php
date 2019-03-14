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
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

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

    <!-- Careers -->
    <div class="careers">
        <div class="container">
            <h2>Job opening</h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aperiam ipsum impedit doloribus nemo maxime
                    obcaecati ullam sequi consequatur earum laudantium odit similique explicabo id eaque architecto porro
                    inventore fuga natus eligendi, esse minus veniam! Asperiores veritatis quos esse id rerum maxime, illo
                    repudiandae dicta accusantium nihil amet, optio dolorem!</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ea perferendis libero praesentium alias ad aliquam
                    quod recusandae, architecto cupiditate, saepe iste, consequuntur quis. Laborum vero temporibus blanditiis
                    sit facere animi veniam, id maxime cum veritatis dicta? Reprehenderit veritatis, quis praesentium reiciendis
                    deserunt dolore, dolorum quisquam, itaque consequuntur eligendi ullam.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, beatae.</p>
            </div>
            <div class="jobs">
                <details open>
                    <summary>Does this product have what I need?</summary>
                    <p>Totally. Totally does.</p>
                    <a href="#">Apply Now</a>
                </details>

                <details>
                    <summary>Can I use it all the time?</summary>
                    <p>Of course you can, we won't stop you.</p>
                    <a href="#">Apply Now</a>
                </details>

                <details>
                    <summary>Are there any restrictions?</summary>
                    <p>Only your imagination my friend. Go forth!</p>
                    <a href="#">Apply Now</a>
                </details>
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