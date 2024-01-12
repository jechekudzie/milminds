<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="#">
    <title>MILMINDS HOLDINGS</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/node_modules/animate.css/animate.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- OWL carousel CSS -->
    <link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">


    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">

</head>
<body>
<!-- Primary Navigation menu -->
<!-- Primary Navigation menu -->
<nav style="background-color: #29235c;" class="navbar navbar-expand-lg navbar-dark {{--bg-primary--}}">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="{{ url('/') }}">{{--MILMINDS HOLDINGS--}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary"
                aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarPrimary">
            <!-- Primary navigation items -->
            <ul class="navbar-nav {{--ml-auto--}}">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Holdings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Mil-Minds Advisory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Cleaning Bees</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">
                        Colourful Expressions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Fly Express</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Waymaker Travel & Tour </a>
                </li>
                <!-- More nav items here -->
            </ul>
        </div>
    </div>
</nav>

<!-- Logo and Contact Section -->
<div class="logo-contact-section py-2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo on the left -->
            <div class="col-6 col-md-6">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('/images/logo-holding-removebg-preview.png') }}" alt="Logo"
                         style="height: 80px;"> <!-- Adjust the height as needed -->
                </a>
            </div>

            <!-- Contact info and social icons on the right -->
            <div class="col-6 col-md-6 text-right">
                <div class="contact-info d-inline-block" style="margin-right: 20px;">
                    <p class="mb-0 d-md-inline d-none" style="margin-right: 10px;">
                        <strong>Phone:</strong> +263 242 759 055
                    </p>
                    <p class="mb-0 d-md-inline d-none">
                        <strong>Email:</strong> marketing@milmindszw.com
                    </p>
                </div>
                <div class="social-icons d-inline-block">
                    <!-- Replace href with actual links -->
                    <a href="#" style="margin-right: 10px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" style="margin-right: 10px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Secondary Navigation menu -->
<nav style="background-color: #3491c9;" class="navbar navbar-expand-lg navbar-dark {{--bg-secondary--}}">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="{{ url('/') }}">{{-- Milminds Holdings--}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSecondary"
                aria-controls="navbarSecondary" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarSecondary">
            <!-- Secondary navigation items -->
            <!-- ... -->
            <ul class="navbar-nav {{--ml-auto--}}">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#about') }}">Business Philosophy</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#brands') }}">Our Brands</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#why-choose-us') }}">Why Choose Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#contact-us') }}">Contact Us</a>
                </li>
                <!-- More nav items here -->
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<!-- Footer -->
<div class="w-100 bg-viridian-500 text-white-50">

    <div class="py-5">
        <div class="container">
            <div class="row py-5">

                <div class="col-lg-4 mb-5 mb-lg-0">

                    <div class="widget">

                        <img class="img-fluid d-block mb-4" src="{{asset('images/logos/logo-holding.png')}}" alt="logo"
                             data-width="146px" data-height="42px">

                        <div data-height="5px"></div>

                        <p>
                            Milminds Holdings emerges as a paragon of corporate synergy, an umbrella for distinct brands
                            that together, form a tapestry of excellence and innovation. Our collective prowess spans
                            from strategic business advisory to lifestyle and travel management, all while championing
                            the principles of integrity and inclusive growth.
                        </p>

                    </div>

                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <div class="widget">

                                <h6 class="widget-title text-white text-uppercase font-weight-700">Subscribe</h6>

                                <form class="form-light-1">
                                    <div class="input-group input-group-lg input-group-round">
                                        <div class="input-group-inner">
                                            <input type="email" class="form-control form-control-lg"
                                                   placeholder="Your email address">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-round btn-indigo shadow-none mb-0"
                                                        type="button">Subscribe
                                                </button>
                                            </div>
                                            <div class="input-focus-bg"></div>
                                        </div>
                                    </div>
                                    <small class="form-text mt-3">Personal data will be encrypted.</small>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="row">
                        <div class="widget">

                            <h6 class="widget-title text-white text-uppercase font-weight-700">Quick links</h6>

                            <ul class="custom-list fa-ul mb-0 ml-4">
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Milminds Holdings</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Milminds Advisory</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Cleaning Bees</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Colorful Expressions</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Fly Express</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Waymaker</a>
                                </li>
                                <li><span class="fa-li"><i class="fas fa-angle-right text-primary"></i></span>
                                    <a href="#" class="text-white-50 text-hover-primary">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="widget">

                        <h6 class="widget-title text-white text-uppercase font-weight-700">Get in touch</h6>

                        <div class="row mb-3">

                            <div class="col-2 col-lg-3 col-xl-2">
                                <span class="text-white font-weight-500">Address</span>
                            </div>

                            <div class="col-10 col-lg-9 col-xl-10">
                                <div class="pl-2">
                                    7th Floor, ZB Chambers, Cnr First Street and George Silundika Avenue, Harare,
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-2 col-lg-3 col-xl-2">
                                <span class="text-white font-weight-500">Phone</span>
                            </div>

                            <div class="col-10 col-lg-9 col-xl-10">
                                <div class="pl-2">
                                 +263 242 759 055<br>
                                    +263 772 522 373
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-2 col-lg-3 col-xl-2">
                                <span class="text-white font-weight-500">Email</span>
                            </div>

                            <div class="col-10 col-lg-9 col-xl-10">
                                <div class="pl-2">
                                    marketing@milmindszw.com
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="widget">

                        <h6 class="widget-title text-white text-uppercase font-weight-700 mb-4">Follow Us</h6>

                        <div class="d-flex ml-n2">
                            <a href="#" target="_blank"
                               class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                               data-width="36px" data-height="36px"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"
                               class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                               data-width="36px" data-height="36px"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"
                               class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                               data-width="36px" data-height="36px"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" target="_blank"
                               class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                               data-width="36px" data-height="36px"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"
                               class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                               data-width="36px" data-height="36px"><i class="fab fa-vimeo-v"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom py-4">
        <div class="container footer-bottom-container">
            <div class="row py-3">

                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <large>Copyright @ {{date('Y')}} Milminds Holdings - <a href="https://leadingdigital.africa">Developed
                            By Leading Digital.</a></large>
                </div>

                <div class="col-lg-6 text-center text-lg-right">
                    <a href="#" class="text-white-50 text-hover-primary mr-4">Terms</a>
                    <a href="#" class="text-white-50 text-hover-primary">Privacy Policy</a>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- Go to top -->
<div class="go-to-top">
    <a href="#" class="rounded-circle"><i class="fas fa-chevron-up"></i></a>
</div>

<!-- jQuery -->

<!-- jQuery -->
<script src="{{ asset('/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Navik Menu js -->
<script src="{{ asset('/components/navik-navigation-menu/dist/js/navik.menu.js') }}"></script>

<!-- Isotope and imagesloaded js -->
<script src="{{ asset('/node_modules/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/node_modules/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Fancybox js -->
<script src="{{ asset('/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

<!-- OWL carousel js -->
<script src="{{ asset('/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- Progress Circle js -->
<script src="{{ asset('/node_modules/jquery-circle-progress/dist/circle-progress.min.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('/assets/js/custom.js') }}"></script>

<script>
    $(document).ready(function () {
        // Function to highlight active anchor on click
        $('.nav-link').on('click', function () {
            $('.nav-link').removeClass('active'); // Remove the active class from all nav links
            $(this).addClass('active'); // Add the active class to the clicked nav link
        });

        // Optionally: Highlight the active section on page load based on URL hash
        var currentHash = window.location.hash;
        if (currentHash !== '') {
            $('.nav-link').removeClass('active');
            $('.nav-link[href="' + currentHash + '"]').addClass('active');
        }
    });
</script>

@stack('scripts')

</body>
</html>
