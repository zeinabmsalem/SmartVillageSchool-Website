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

    <!-- Alumni -->
    <div class="alumni-university">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- Side Links -->
                    <div class="side-links">
                        <ul>
                            <li>
                                <a href="alumni.php">Wall of frame</a>
                            </li>
                            <li>
                                <a href="alumni-photo.php">Photos</a>
                            </li>
                            <li class="active">
                                <a href="alumni-university.php">Alumni study universities</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="content">
                        <h2>Alumni study universities</h2>
                        <!-- Content -->
                        <div class="single-content">
                            <h4>Background/Question:</h4>
                            <p>The Harvard Alumni Study was one of the first epidemiologic studies to examine the relationship
                                between physical activity and incidence of heart attack. The study commenced in 1962 with
                                questionnaires sent to a large cohort of college-educated men.
                            </p>
                        </div>
                        <div class="single-content">
                            <h4>Methods:</h4>
                            <p>Male surviving alumni who enrolled in Harvard University between 1916 and 1950 were mailed brief
                                questionnaires in 1962 and 1966, and 16,936 men responded (71% response rate). Physical activity
                                records were examined for the periods when each subject was a student and in middle age,
                                using college archives on athleticism and personal background for data on student years.
                                Returned surveys provided data on activity level, tobacco use, parental disease history and
                                medical care for physician-diagnosed diseases. [1] Follow-up surveys of respondents, mailed
                                in 1972, 1988 and 1993, collected data on chronic diseases and death. [1] To quantify the
                                physical activity level of the respondents, an index was created that assigned values to
                                each activity based on energy expenditure. Physical activity responses on the questionnaires
                                included “light sports (e.g., bowling, baseball, biking, boating, dancing, golf, and light
                                housework),” “strenuous sports (e.g., basketball, running, mountaineering, skiing, swimming
                                and tennis),” total stairs climbed, and blocks walked per day. Based on the responses from
                                the survey, each participant was assigned an estimated value of kilocalories burned per week.
                            </p>
                        </div>
                        <div class="single-content">
                            <h4>Results:</h4>
                            <p>At the first follow-up interval in 1972, 695 deaths attributed to all causes were recorded. In
                                the 6-10 years of follow-up, 357 men had nonfatal heart attacks and 215 men died of heart
                                attack. [1] The relative risk for first heart attack for those who climbed less than 50 stairs
                                a day compared to those who climbed fifty or more was 1.25 (p= .008). For men who walked
                                less than five city blocks daily, their relative risk for first heart attack was 1.26 when
                                compared to men who walked more than five blocks a day (p= .016). Men who burned less than
                                2000 kilocalories per week had a relative risk of 1.64 (p
                                < .001) compared to men who burned more than 2000 kilocalories weekly. Comparisons of light sports play yielded a relative
                                    risk of 1.08 with an insignificant p-value (.501). [1] In the 1993 survey, 2,135 subjects
                                    had experienced coronary heart disease (87.1% response rate). In this analysis, the researchers
                                    found increased physical activity level was associated with lower coronary heart disease
                                    risk when considered singly (RR for those who burned more than 8400 kilojoules per week=0
                                    .73, 95% CI=0 .63-0.84, p <.001). [2] When considered along with age, BMI, alcohol intake,
                                    hypertension, diabetes, smoking status and early parental death, higher levels of physical
                                    activity were also apparently protective (RR for those who burn more than 4200 kilojoules
                                    per week=0 .81, 95% CI: 0.71-0.92, p=. 003) [2]. </p>
                        </div>
                        <div class="single-content">
                            <h4>Conclusions/Discussion:
                            </h4>
                            <p>The Harvard Alumni Study was pioneering in the field and used a simple questionnaire at low cost.
                                Additional strengths of the study include the lengthy follow-up period, high response rate,
                                and completeness of data. Limitations include the potential bias of self-administered questionnaires.
                                (HB)
                            </p>
                        </div>
                    </div>
                </div>
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