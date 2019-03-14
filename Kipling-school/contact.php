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

    

    <!-- Contact -->
    <div class="contact-page">
        <!-- Map and contact-info -->
        <div class="map-info">
            <div class="container">
                <div class="row p-0">
                    <div class="col-lg-6 col-md-12 p-0">
                        <!-- Map -->
                        <div id="map-canvas"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="info">
                            <h2>Contact us</h2>
                        </div>
                        <!-- Location -->
                        <div class="location">
                            <p>
                                <img src="img/map-marker-contact.png" alt="">Cairo-alex desert road, sixth of october, B149, smart village, km 28, Egypt</p>
                        </div>
                        <!-- Phone -->
                        <div class="phone">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <img src="img/phone-receiver-contact.png" alt="">+20 23570100/200
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>+20 1005590990</p>
                                </div>
                            </div>
                        </div>
                        <!-- Mail -->
                        <div class="mail">
                            <p>
                                <img src="img/message-contact.png" alt="">
                                <a href="mailto:">info@svs.edu.eg</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get in touch -->
        <div class="get-in-touch">
            <h2>Get in touch</h2>
            <div class="container">
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
                                <input class="form-control" type="email" placeholder="Your Password">
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
                        <div class="col-12 text-center">
                            <!-- Login -->
                            <input type="submit" value="SEND">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
 <?php include 'footer_kipling.php'; ?>

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