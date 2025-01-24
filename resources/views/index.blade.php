<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from wordpressboss.com/opb/vtravel-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 21:10:41 GMT -->
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="smelle - Creative One Page Bootstrap Template">
    <meta name="keywords" content="onepageboss, new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Rahman Hridoy">
    <!-- PAGE TITLE -->
    <title>V-Travel - Travel agency Responsive Website Template</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,800,900" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="fonts/linear-fonts.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/css/owl.theme.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- START PRELOADER AREA-->
    <div class="preloader-area">
        <div class="spinner">
            
            <h2><img src="img/autobus.png"></h2>
        </div>
    </div>
    <!-- END PRELOADER AREA -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="img/WhatsApp Image 2025-01-19 à 19.36.24_4d72fecc.jpg" alt="">
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Acceuil <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#place">Places</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#About">A propos </a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#gallery">Galerie</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#testimonial">Clients</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#team">Equipe</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Nous contacter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START HEADER DESIGN AREA -->
    <section class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-text text-center">
                                <h1>Bienvenue à <span>MEN-TRAVEL</span></h1>
                                <p>Voyagez vers n'importe quel coin du pays, sans tourner en rond.</p>
                                <a href="#myModal" role="button" data-toggle="modal">Effectuer une reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END HEADER DESIGN AREA -->


    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- START FORM DESIGN AREA -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2>Effectuer une reservation</h2>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                    <form id="contact-form" method="POST" action="/api/index">
                        
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            <input type="text" name="nom" class="form-control" id="first-name" placeholder="Enter Name" required="required">
        </div>
        <div class="form-group col-md-12">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required="required">
        </div>
        <div class="form-group col-md-12">
            <select name="destination" class="form-control" id="person" required>
                <option value="">Choisissez une destination</option>
                <option value="Douala">Douala</option>
                <option value="Yaounde">Yaounde</option>
                <option value="kribi">Kribi</option>
                <option value="bafan">Bafan</option>
                <option value="Baganté">Baganté</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <input type="date" name="date_depart" class="form-control" placeholder="Entrer votre date" required="required">
        </div>
        <div class="form-group col-md-12">
            <input type="number" name="nombre_billets" class="form-control" placeholder="Entrer un nombre" required="required">
        </div>
        <div class="form-group col-md-12">
            <button type="submit">Réserver</button>
        </div>
    </div>
</form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">fermer</button>
                </div>
            </div>
            <!-- / END FORM DESIGN AREA -->
        </div>
    </div>




    <!-- START TOUR PLACE DESIGN AREA -->
    <section id="place" class="tour-places section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Notre agence</h2>
                    </div>
                </div>
            </div>
            <div class="tour-list">
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="img/2.jpg">
                    
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="img/WhatsApp Image 2025-01-19 à 19.36.22_0d3acd32.jpg">
                    
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="img/WhatsApp Image 2025-01-19 à 19.36.22_dfa0312f.jpg">
                   
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="img/WhatsApp Image 2025-01-19 à 19.36.22_e9f52587.jpg">
                    
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place">
                    <img src="img/WhatsApp Image 2025-01-19 à 19.36.23_1719d919.jpg">
                    
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END  TOUR PLACE DESIGN AREA -->


    <!-- START COMPANY DESIGN AREA -->
   
    <!-- / END COMPANY DESIGN AREA -->

    <!-- START ABOUT DESIGN AREA -->
    <section id="About" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Qui nous sommes?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START ABOUT IMAGE DESIGN AREA -->
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="about-image">
                        <img src="img/WhatsApp Image 2025-01-19 à 19.36.22_dfa0312f.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <!-- / END ABOUT IMAGE DESIGN AREA -->
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-md-6">
                    <div class="about-text">
                        <h2 class="wow fadeInDown" data-wow-delay=".2s">Nous sommes des experts en voyage.</h2>
                        <p class="wow fadeInDown" data-wow-delay=".4s"> Mentravel est une plateforme dédiée aux passionnés de voyage, offrant des services variés tels que la réservation de vols, d'hôtels et de transports, ainsi que des itinéraires personnalisés adaptés aux besoins des voyageurs. En plus de fournir des conseils pratiques et des guides sur des destinations populaires, Mentravel favorise une communauté active où les utilisateurs peuvent partager leurs expériences et échanger des conseils. Avec des applications mobiles pour une accessibilité optimale et un engagement envers des pratiques de voyage durables, Mentravel s'efforce de rendre chaque expérience de voyage mémorable et enrichissante.</p>
                        <a href="#" class="read-more wow fadeInDown" data-wow-delay=".6s">Apprendre encore plus</a>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->

    <!-- START SERVICE DESIGN AREA -->
    <section id="service" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i>
                        </div>
                        <h4>Personalized matching</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-cubes" aria-hidden="true"></i>
                        </div>
                        <h4>wide variety of destinations</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-archive" aria-hidden="true"></i>
                        </div>
                        <h4>highly qualified service</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".8s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <h4>Handpicked Hotels</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="1s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-umbrella" aria-hidden="true"></i>
                        </div>
                        <h4>Best Price Guarantee</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="1.2s">
                    <div class="single-service">
                        <div class="service-icon"><i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h4>24/7 support</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SERVICE DESIGN AREA -->



    <!-- VIDEO BACKGROUND DESIGN AREA -->
    <section class="video-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-area-text text-center wow bounceIn">
                        <a href="https://www.youtube.com/watch?v=RrXi1gc7Rqs&pp=ygUebCdpbnTDqXJpZXVyZSBkdSBidXMgbWVudHJhdmVs" class="video-play mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                        <h2>Une video sur nous</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END VIDEO BACKGROUND DESIGN AREA -->

    <!-- START PLACE DESIGN AREA -->
    <section id="gallery" class="work section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>tour gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/1.jpg" class="work-popup">
                            <img src="img/WhatsApp Image 2025-01-19 à 19.36.21_7d596de8.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        Istanbul, Turkey
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/2.jpg" class="work-popup">
                            <img src="img/WhatsApp Image 2025-01-19 à 19.36.21_16020f1f.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        Longs Peak, the USA
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/3.jpg" class="work-popup">
                            <img src="img/WhatsApp Image 2025-01-19 à 19.36.21_fc86c20e.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        London, Great Britain
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/4.jpg" class="work-popup">
                            <img src="img/WhatsApp Image 2025-01-19 à 19.36.24_7d497e77.jpg" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        Swiss Alps, Switzerland
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/1.jpg" class="work-popup">
                            <img src="" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        Istanbul, Turkey
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="project-item">
                        <a href="images/work/2.jpg" class="work-popup">
                            <img src="" class="img-responsive" alt="">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h2 class="wow fadeInUp">
                                        Longs Peak, the USA
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END PLACE WORK DESIGN AREA -->




    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Clients satisfaits</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-list">
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Jhonathon doe</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            </div>
                            <div class="testi-name">
                                <h2>katrina kaif</h2>
                                <h3>actress</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Jhonathon doe</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial">
                            <div class="single-testi-des">
                                <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            </div>
                            <div class="testi-name">
                                <h2>Jhonathon doe</h2>
                                <h3>Businees men</h3>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START TEAM DESIGN AREA -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Equipe professionnelle</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="assets/images/team/team1.jpg" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>jonathon doe</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="#" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>Jessica jui</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="#" class="img-responsive">
                        </div>
                        <div class="team-description">
                            <h4>Monalisa lui</h4>
                            <h5>Taxi driver & traveler</h5>
                            <p>I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END TEAM DESIGN AREA -->


    <!-- START CALL TO ACTION DESIGN AREA -->
    <section id="download" class="call-to-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-area-text text-center">
                        <h2>Voulez vous toujours voyager auprès de nous?</h2>
                        <p>We offer a wide range of procedures to help you get the perfect smile</p>
                        <a href="#myModal" role="button" data-toggle="modal">Effectuer une reservation!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END CALL TO ACTION DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>questions?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <h2>our office:</h2>
                        <p>Jurain,Dhaka Bangladesh</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h2>contact number:</h2>
                        <p>+237 653861183</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h2>Email us:</h2>
                        <p>papaoukalory@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="row contact-form-design-area">
                <div class="col-md-12">
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="actions wow fadeInUp" data-wow-delay=".4s">
                                        <input type="submit" value="Envoyer votre message" name="submit" id="submitButton" class="" title="Submit Your Message!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-text">
                        <h6>Men-travel 2017.all right Reserved</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->




    <!-- LATEST JQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="owlcarousel/js/owl.carousel.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- STEALLER JS -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- CONTCAT FORM JS -->
    <script src="js/form-contact.js"></script>
    <!-- scripts js -->
    <script src="js/scripts.js"></script>
</body>


<!-- Mirrored from wordpressboss.com/opb/vtravel-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 21:11:30 GMT -->
</html>
