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
    <script src="{{asset('assets/frontend/js/forntend.js')}}"></script>
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
    <a class="navbar-brand logo-image" href=""><img src="assets/frontend/images/logo-a2.png" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">

            @if( auth()->user() )
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('user.show', auth()->user()->id )}}">HOME <span class="sr-only">(current)</span></a>
                </li>
            @endif

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link page-scroll" href="#contact">CONTACT</a>--}}
{{--            </li>--}}
            @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" id="loginPopup" data-toggle="modal" href="#loginModal">LOGIN</a>
                </li>

            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <span class="item-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{route('user.show', auth()->user()->id )}}"><span class="item-text">Your Profile</span></a>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->



<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <h1 class="text-center">
                @include('includes.notifications')
            </h1>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-md-offset-3">
                    <strong><?=isset($_GET['message'])? 'Sorry!! you are not logged in. Please login first.' : '' ;?></strong>
                    <h1>Plan your next trip now!</h1>
                    <p class="lead">Save Money! Save the Environment!</p>
                    <p class="bold">You can save up to 3000$ a year using car sharing!</p>

                    <!--Sign up button-->
                    @if(Auth::guest())
                        <?='<button type="button" class="btn btn-lg btn-outline-info signupPopup" data-toggle="modal" data-target="#signupModal" style="margin-bottom: 26px;">Sign up-It\'s free</button>';?>
                    @endif
                </div>
            </div><!-- end of row -->
            <div class="col-md-8">
                <div id="frontendMap" style="width: 100%; height: 350px; margin-left: 19%;"></div>
            </div>



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
                                        <p class="testimonial-text">Alias dignissimos distinctio doloribus harum laudantium magni molestiae, nihil odit quasi quidem rem, voluptas?</p>
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
                                        <p class="testimonial-text">Autem deserunt fugiat, mollitia optio porro ut vitae. </p>
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
                                        <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
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
                                        <p class="testimonial-text">Commodi dolor excepturi facere hic, ipsam itaque labore libero, maiores nisi non.</p>
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
                                        <p class="testimonial-text">sapiente, soluta tempore? Dolorem ea exercitationem expedita ipsam quia sint.</p>
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
                                        <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
    </div> <!-- end of container -->
</div> <!-- end of form -->
<!-- end of contact -->


<form class="form-horizontal" method="POST" action="{{ route('login') }}"> <!--Login form -->
    {{ csrf_field() }}

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
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <p>{{ ($errors->has('email')) ? $errors->first('email') : ''}}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <p class="text-red">{{ ($errors->has('password')) ? $errors->first('password') : ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-light">Login</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success pull-left signupPopup" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<form class="form-horizontal" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color: aliceblue;">
                    <div id="signupmessage"></div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            <p>{{ ($errors->has('name')) ? $errors->first('name') : ''}}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            <p>{{ ($errors->has('email')) ? $errors->first('email') : ''}}</p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <p>{{ ($errors->has('password')) ? $errors->first('password') : ''}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-light">Register</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
                    <h4>About Smartbus</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
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
                            <div class="media-body">Read our <a class="turquoise" href="">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5WQW9fdx6uzx85zLVwfq7mmHDTRmIYi8&libraries=places&callback=initMap"></script>

<script>
    initMap();
    $(function () {
        $(window).on('load', function () {
            initMap();
        })
    })

    function initMap() {
        var depLatLng = {lat: 23.756191, lng: 90.375571};
        var desLatLng = {lat: 23.773077, lng: 90.367489};

        console.log(depLatLng)
        console.log(desLatLng)

        var map = new google.maps.Map(document.getElementById('frontendMap'), {
            zoom: 11,
            center: {lat: 23.8151, lng: 90.4255}
        });

    }
</script>
</body>
</html>