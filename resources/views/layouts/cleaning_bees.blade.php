<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="#">
    <title>CLEANING BEES</title>

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
            @include('layouts.website_nav')
        </div>
    </div>
</nav>

<!-- Logo and Contact Section -->
<div class="logo-contact-section py-2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo on the left -->
            <div class="col-6 col-md-6">
                <a href="{{ url('/cleaning-bees') }}">
                    <img class="logo" src="{{ asset('/images/logos/logo-cleaning-removebg-preview.png') }}" alt="Logo"
                         style="height: 100px;">
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
<nav style="background-color: #154070;" class="navbar navbar-expand-lg navbar-dark {{--bg-secondary--}}">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="{{ url('/') }}">{{--Mil-Minds Advisory--}}</a>
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
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('/advisory') }}">Cleaning Bees Cleaning Services</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('#about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('#services') }}">Our Services</a>
                </li>

                <li class="nav-item">
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('#why-choose-us') }}">Why Choose Us</a>
                </li>

                <li class="nav-item">
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('#call-to-action') }}">Call To Action</a>
                </li>

                <li class="nav-item">
                    <a style="color: #ffdc1d;" class="nav-link" href="{{ url('#contact-us') }}">Contact Us</a>
                </li>
                <!-- More nav items here -->
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<!-- Footer -->
@include('layouts.website_footer')
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
