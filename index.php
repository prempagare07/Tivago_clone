<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Voyager</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand text-capitalize float-left" href="#page-top">Voyager</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio">trip planning</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="team.html" >team</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">contact us</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <?php
                    if(isset($_SESSION['username'])){
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-truncate text-uppercase bg-primary border rounded border-primary shadow-sm" href="login/includes/logout.inc.php">Log Out</a></li>';
                    }
                    else{
                        echo'<li class="nav-item" role="presentation"><a class="nav-link text-truncate text-uppercase bg-primary border rounded border-primary shadow-sm" href="login/login.php">Sign In</a></li>';
                    }

                    ?> 
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span class="text-break">Enjoy life to the fullest with Voyager</span></div>
                <div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Services</h2>
                    <h3 class="text-muted section-subheading"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-lg-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-suitcase fa-stack-1x fa-inverse"></i></span>
                    <h4 class="text-truncate text-capitalize section-heading">handpicked deals</h4>
                    <p class="text-muted">Deals - that will drive you Crazy! If you are planning to travel anywhere - Check with us. We will serve you tailor-matched Handpicked Deals. Connect with us &amp; plan your itinerary now!<br><br></p>
                </div>
                <div class="col-md-4 col-lg-4 offset-lg-0"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-dollar fa-stack-1x fa-inverse"></i></span>
                    <h4 class="text-capitalize section-heading">best prices</h4>
                    <p class="text-muted">We not only help you making the best travel itinerary but able to say this very confidently. We offer "Best Price Guarantee". Book your itinerary and feel the difference!<br><br></p>
                </div>
                <div class="col-md-4 col-lg-4 offset-lg-0"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fas fa-user fa-stack-1x fa-inverse"></i></span>
                    <h4 class="text-capitalize section-heading">24-hours service</h4>
                    <p class="text-muted">We 24 Hours Travel Services is a boutique Travel Agency. Our strength lies in our staff who are well experienced and ready to cater clients with utmost professionalism.<br><br><br></p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">trip planning</h2>
                    <h3 class="section-subheading text-muted">plan your trip with just a few clicks</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link"  href="flight/index.php">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/1-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4 class="text-capitalize">flights</h4>
                        <p class="text-muted">domestic &nbsp;and international</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link" href="train/index.php">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/2-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4 class="text-capitalize">trains</h4>
                        <p class="text-muted">across the nation&nbsp;</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link"  href="hotel/index.php">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/3-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4 class="text-capitalize">hotels</h4>
                        <p class="text-muted">travel in luxury</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/4-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4 class="text-capitalize">holidays</h4>
                        <p class="text-muted">whole holiday planing</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid img-fluid" src="assets/img/portfolio/5-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4 class="text-capitalize">kashmir</h4>
                        <p class="text-muted">heaven on earth</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                <?php
                    if(isset($_SESSION['username'])){
                    echo '<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">';
                    }
                    else{
                        echo '<a class="portfolio-link" data-toggle="modal" href="#signinModal">';
                    }
                    ?>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/6-thumbnail.jpg"></a>
                    <div class="portfolio-caption">
                        <h4>safari</h4>
                        <p class="text-muted">be with the wild</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">amazing story of voyager</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted text-capitalize">since 2009 we are continously making people familiar with the world.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted text-capitalize">your passion combined with our determination gave birth to our agency.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted text-capitalize">your tremendous support has inspired us to expand our services.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted text-capitalize">your loyalty has helped us to establish our name all over the world.<br><br></p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Always at your service</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Voyager 2019</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" style="background:powderblue">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Flight Booking</h2>
                                    <p class="item-intro text-muted">Domestic and International.</p>
                                    <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="cityfrom">From</label>
                                                        <input type="text" class="form-control" id="cityfrom" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cityto">To</label>
                                                    <input type="text" class="form-control" id="cityto" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="form-group col-md-6 ">
                                                        <label for="datefrom">date</label>
                                                        <input type="date" class="form-control" id="datefrom" >
                                                    </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block" name="flight-submit">Find</button>
                                    </form>
                                    <br>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i></button>                                    
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body"style="background:powderblue">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                        <h2 class="text-uppercase">Train Booking</h2>
                                        <p class="item-intro text-muted">Across the Nation</p>
                                        <form action="includes/train/trains.inc.php" method="GET" >
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="cityfromtrain" id="traincityfrom">From</label>
                                                        <input type="text" class="form-control" id="cityfromtrain" placeholder="City" name="cityfrom" onkeyup="includes/train/search.php">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="citytotrain">To</label>
                                                        <input type="text" class="form-control" id="citytotrain" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="form-row ">
                                                        <div class="form-group col-md-6">
                                                            <label for="datefromtrain">Date</label>
                                                            <input type="date" class="form-control" id="datefromtrain" name="date">
                                                        </div>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block" name="train-submit">Find</button>
                                        </form>
                                        <br>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                        <h2 class="text-uppercase">Hotel Booking</h2>
                                        <p class="item-intro text-muted">Travel In Luxury.</p>
                                        <form action="">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="cityfrom" >City</label>
                                                        <input type="text" class="form-control" id="cityfrom" placeholder="City" name='hotel-city'>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="budget">Budget</label>
                                                        <select id="budget" class="form-control" name="hotel-budget">
                                                                <option selected>Choose...</option>
                                                                <option>below 2001</option>
                                                                <option>2001-5000</option>
                                                                <option>5001-7500</option>
                                                                <option>7501 - 10000</option>
                                                                <option>above 10000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="datefrom">From</label>
                                                            <input type="date" class="form-control" id="datefrom" required >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="dateto">To</label>
                                                            <input type="date" class="form-control" id="dateto" required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block" name="hotel-submit">Find</button>
                                        </form>
                                        <?php
                                        // if(isset ($_GET['hotel-submit'])){
                                        // echo "hii";
                                        // }
                                        ?>
                                        <br>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Holidays</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                <h2 class="text-uppercase">kashmir</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                <h2 class="text-uppercase">Safari</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="signinModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase" style="color:rgb(66,139,202)">Sign In</h2>
                                    <form action="login/includes/login.inc.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username/Email" name="email">
                                            
                                        </div>
                                        <div class="form-group  ">
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="login-password">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block" name="login-submit">Login</button>
                                    </form>
                                    <br>
                                    <div class="text-center"><a class="small text-info" href="login/forgot-password.html">Forgot Password?</a></div>
                                    <div class="text-center "><a class="small text-info" href="login/register.php">Create an Account!</a></div>
                                    <br>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>