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

    <!-- Admission form -->
    <div class="admission-form">
        <div class="container">
            <h2>School Admission Form</h2>
            <!-- Content -->
            <div class="content">
                <p>Dear Parent/Guardian,
                    <br>
                    <br> Welcome to our school's Admission Center. Please use this form to apply for your child's admission to
                    our school. We need complete and accurate information about the student, so make sure you fill out all
                    fields.
                    <br>
                    <br> School Admission Forms are processed within 48 hours. You will receive an email confirmation when we
                    process your application.
                </p>
            </div>
            <!-- Form -->
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Student Name</h4>
                            </div>
                            <div class="col-5">
                                <!-- First Name -->
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="First Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-5">
                                <!-- Last Name -->
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Class you want to apply for</h4>
                            </div>
                            <div class="col-10">
                                <!-- Class Name -->
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="First Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Student's Birth Date
                                </h4>
                            </div>
                            <div class="col-10">
                                <!-- Birth -->
                                <div class="input">
                                    <input class="form-control" type="date" placeholder="MM/DD/YY">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Parent/Guardian name
                                </h4>
                            </div>
                            <div class="col-5">
                                <!-- First Name -->
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="First Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-5">
                                <!-- Last Name -->
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">
                                    <h4>Address
                                    </h4>
                                </div>
                                <div class="col-10">
                                    <!-- Street Address -->
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="Street Address">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-5">
                                    <!-- City -->
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="City">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <!-- Region -->
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="Region">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-5">
                                    <!-- Postal -->
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="Postal/ Zip Code">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <!-- Country -->
                                    <div class="input">
                                        <input class="form-control" type="text" placeholder="Country">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Phone Number</h4>
                            </div>
                            <div class="col-10">
                                <!-- Mobile -->
                                <div class="input">
                                    <input class="form-control" type="tel" placeholder="Phone Number">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Email
                                    <span>Your admission confirmation will be sent via email.</span>
                                </h4>
                            </div>
                            <div class="col-10">
                                <!-- Email -->
                                <div class="input">
                                    <input class="form-control" type="Emil" placeholder="Email">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEND -->
                    <div class="col-12  text-center">
                        <div class="send">
                            <input type="submit" value="SEND">
                        </div>
                    </div>

            </form>
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
        <!-- Style JS -->
        <script src="js/style.js"></script>
</body>

</html>