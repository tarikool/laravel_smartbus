<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Free mobile app HTML landing page template to help you build a great online presence for your app which will convert visitors into users">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>smartTrip - A Trip Planning With Bus</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/styles.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">--}}
    <!-- Favicon  -->
    <link rel="icon" href="assets/frontend/images/favicon.png">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/frontend/js/forntend.js"></script>
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/smartTrip"><img src="assets/frontend/images/logo-a2.png" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">FEATURES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="loginPopup" data-toggle="modal" href="#loginModal">LOGIN</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-md-offset-3">
                    <strong><?=isset($_GET['message'])? 'Sorry!! you are not logged in. Please login first.' : '' ;?></strong>
                    <h1>Plan your next trip now!</h1>
                    <p class="lead">Save Money! Save the Environment!</p>
                    <p class="bold">You can save up to 3000$ a year using car sharing!</p>

                    <!--Sign up button-->
                    <?='<button type="button" class="btn btn-lg btn-outline-info signupPopup" data-toggle="modal" data-target="#signupModal">Sign up-It\'s free</button>';?>

                </div>
            </div><!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Testimonials -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-1.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Leno.</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-2.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">I don't know how I managed to get work done without Leno. The speed of this application is amazing!</p>
                                        <p class="testimonial-author">Roy Smith - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-3.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">This app has the potential of becoming a mandatory tool in every marketer's day to day operations.</p>
                                        <p class="testimonial-author">Marsha Singer - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-4.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">Searching for a great marketing automation app was difficult but thankfully I found Leno.</p>
                                        <p class="testimonial-author">Tim Shaw - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-5.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">Leno's support team is amazing. They've helped me with some issues and I am so grateful to them.</p>
                                        <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="assets/frontend/images/testimonial-6.jpg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">Who would have thought that Leno can provide such amazing results in just a few weeks of use</p>
                                        <p class="testimonial-author">Ann Black - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->


<!-- Features -->
<div id="features" class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>FEATURES</h2>
                <div class="p-heading p-large">Leno was designed based on input from personal development coaches and popular trainers so it offers all</div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">

            <!-- Tabs Links -->
            <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog"></i>CONFIGURING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>TRACKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>MONITORING</a>
                </li>
            </ul>
            <!-- end of tabs links -->


            <!-- Tabs Content-->
            <div class="tab-content" id="lenoTabsContent">

                <!-- Tab -->
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="container">
                        <div class="row">

                            <!-- Icon Cards Pane -->
                            <div class="col-lg-4">
                                <div class="card left-pane first">
                                    <div class="card-body">
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Goal Setting</h4>
                                            <p>Like any self improving process, everything starts with setting your goals and committing to them</p>
                                        </div>
                                        <div class="card-icon">
                                            <i class="far fa-compass"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card left-pane">
                                    <div class="card-body">
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Visual Editor</h4>
                                            <p>Leno provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                        </div>
                                        <div class="card-icon">
                                            <i class="far fa-file-code"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card left-pane">
                                    <div class="card-body">
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Refined Options</h4>
                                            <p>Each option packaged in the app's menus is provided in order to improve your personal development status</p>
                                        </div>
                                        <div class="card-icon">
                                            <i class="far fa-gem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of icon cards pane -->

                            <!-- Image Pane -->
                            <div class="col-lg-4">
                                <img class="img-fluid" src="assets/frontend/images/features-iphone-1.png" alt="alternative">
                            </div>
                            <!-- end of image pane -->

                            <!-- Icon Cards Pane -->
                            <div class="col-lg-4">
                                <div class="card right-pane first">
                                    <div class="card-body">
                                        <div class="card-icon">
                                            <i class="far fa-calendar-check"></i>
                                        </div>
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Calendar Input</h4>
                                            <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card right-pane">
                                    <div class="card-body">
                                        <div class="card-icon">
                                            <i class="far fa-bookmark"></i>
                                        </div>
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Easy Reading</h4>
                                            <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card right-pane">
                                    <div class="card-body">
                                        <div class="card-icon">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <div class="text-wrapper">
                                            <h4 class="card-title">Good Foundation</h4>
                                            <p>Get a solid foundation for your self development efforts. Try Leno mobile app for any mobile platform</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of icon cards pane -->

                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of tab-pane -->
                <!-- end of tab -->

                <!-- Tab -->
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="container">
                        <div class="row">

                            <!-- Image Pane -->
                            <div class="col-md-4">
                                <img class="img-fluid" src="assets/frontend/images/features-iphone-2.png" alt="alternative">
                            </div>
                            <!-- end of image pane -->

                            <!-- Text And Icon Cards Area -->
                            <div class="col-md-8">
                                <div class="text-area">
                                    <h3>Track Result Based On Your</h3>
                                    <p>After you've configured the app and settled on the data gathering techniques you can not start the information trackers and start collecting those <a class="turquoise" href="#your-link">interesting details</a>. You can always change them.</p>
                                </div> <!-- end of text-area -->

                                <div class="icon-cards-area">
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Good Foundation</h4>
                                            <p>Get a solid foundation for your self development efforts. Try Leno mobile app for any mobile platform</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-bookmark"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Easy Reading</h4>
                                            <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-calendar-check"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Calendar Input</h4>
                                            <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-file-code"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Visual Editor</h4>
                                            <p>Leno provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                        </div>
                                    </div>
                                </div> <!-- end of icon cards area -->
                            </div> <!-- end of col-md-8 -->
                            <!-- end of text and icon cards area -->

                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of tab-pane -->
                <!-- end of tab -->

                <!-- Tab -->
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                    <div class="container">
                        <div class="row">

                            <!-- Text And Icon Cards Area -->
                            <div class="col-md-8">
                                <div class="icon-cards-area">
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-calendar-check"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Calendar Input</h4>
                                            <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-file-code"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Visual Editor</h4>
                                            <p>Leno provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Good Foundation</h4>
                                            <p>Get a solid foundation for your self development efforts. Try Leno mobile app for any mobile platform</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-icon">
                                            <i class="far fa-bookmark"></i>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Easy Reading</h4>
                                            <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                        </div>
                                    </div>
                                </div> <!-- end of icon cards area -->

                                <div class="text-area">
                                    <h3>Monitoring Tools Evaluation</h3>
                                    <p>Monitor the evolution of your finances and health state using tools integrated in Leno. The generated real time reports can be filtered based on any <a class="turquoise" href="#your-link">desired criteria</a>.</p>
                                </div> <!-- end of text-area -->
                            </div> <!-- end of col-md-8 -->
                            <!-- end of text and icon cards area -->

                            <!-- Image Pane -->
                            <div class="col-md-4">
                                <img class="img-fluid" src="assets/frontend/images/features-iphone-3.png" alt="alternative">
                            </div>
                            <!-- end of image pane -->

                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div><!-- end of tab-pane -->
                <!-- end of tab -->

            </div> <!-- end of tab-content -->
            <!-- end of tabs content -->

        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of tabs -->
<!-- end of features -->




<!-- Contact -->
<div id="contact" class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>CONTACT</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">Don't hesitate to give us a call or just use the contact form below</li>
                    <li><i class="fas fa-map-marker-alt"></i>22 Innovative, San Francisco, CA 94043, US</li>
                    <li><i class="fas fa-phone"></i><a class="blue" href="tel:003024630820">+81 720 2212</a></li>
                    <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:office@leno.com">office@leno.com</a></li>
                </ul>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree to Leno's stated conditions in <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form -->
<!-- end of contact -->

<form method="post" action="model/login.php" id="loginform">   <!--Login form -->
    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="myModalLabel" class="modal-title">
                        Login
                    </h4>
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <!--Login message from PHP file-->
                    <div id="loginmessage"></div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email:</label>
                        <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="loginpassword" class="sr-only">Password</label>
                        <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-outline-primary" name="login" id="login" type="submit" value="Login">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-outline-primary pull-left signupPopup" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<form id="signupform" method="post" action="model/signup.php">
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color: slategray;">Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color: purple;">
                    <div id="signupmessage"></div>
                    <div class="row">
                        <input type="hidden" name="role" value="user">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirmPassword"  id="confirmPassword" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <span class="form-check-sign">Male</span>
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <span class="form-check-sign">Female</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Telephone</label>
                        <input class="form-control" type="text" name="phonenumber" id="phonenumber" placeholder="Telephone Number" maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="moreinformation">Comments</label>
                        <textarea class="form-control moreinformation" name="moreinformation" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-outline-primary" name="signup" type="submit" value="Sign Up">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>About Leno</h4>
                    <p>We're passionate about creating the best mobile apps for personal development</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Social Media</h4>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © Leno - Mobile App HTML Landing Page Template by <a href="https://inovatik.com">Inovatik</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('assets/frontend/js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
<script src="{{ asset('assets/frontend/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{ asset('assets/frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>