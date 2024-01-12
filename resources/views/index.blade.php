@extends('layouts.main')


@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZuuL25g2pnKuStinl1s57n8fd7bR3vrZupJ6bRfTHM5ZRnrFdVhMh6WIRwN7eZ" crossorigin="anonymous">

    <style>
        /* The main container that may contain your .slider-container and other content */
        .section {
            position: relative; /* Context for absolute positioning of navigation buttons */
        }

        /* Container for slider items */
        .slider-container {
            position: relative; /* Relative position for the absolute children */
            overflow-x: auto; /* Enables horizontal scrolling */
            white-space: nowrap; /* Ensures slider items sit in a single line */
            scroll-behavior: smooth; /* Optional: for smooth scrolling when using JS */
        }

        /* Individual slider items */
        .slider-item {
            display: inline-block; /* Aligns items in a row */
            vertical-align: top; /* Keeps items top aligned */
            width: calc(100% / 2); /* Takes up one-third of the width of the slider-container */
            box-sizing: border-box; /* Ensures padding and borders are included in the width */
        }

        /* Navigation buttons */
        .slider-nav {
            position: absolute; /* Positions the buttons absolutely within the .section */
            top: 50%; /* Centers the buttons vertically */
            transform: translateY(-50%); /* Aligns the buttons exactly at the vertical center */
            cursor: pointer; /* Changes the cursor to a pointer to indicate it's clickable */
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            color: white; /* White arrow color */
            padding: 10px; /* Padding around the arrows */
            border: none; /* Removes the border */
            outline: none; /* Removes the outline */
            z-index: 2; /* Ensures the buttons are above other content */
        }

        /* Specific styles for the left navigation button */
        .slider-nav.left {
            left: 10px; /* Positions the left button 10px from the left edge of .section */
        }

        /* Specific styles for the right navigation button */
        .slider-nav.right {
            right: 10px; /* Positions the right button 10px from the right edge of .section */
        }

        /* Optional: hide scrollbar */
        .slider-container::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }

        .slider-container {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }


    </style>
    <!-- Hero banner -->
    <div class="d-flex flex-column w-100">
        <div class="page-header-block-height d-flex align-items-center bg-image py-5"
             data-img-src="{{asset('images/2.png')}}">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-0">
                        <div class="my-5 add-animate" data-animated="fadeIn">
                            <h2 class="h3 font-weight-300 text-white">{{--Milmind Holdings--}}</h2>
                            <h1 class="display-4 font-weight-800 text-white mb-5">{{--Pioneering Progress with Diverse
                                Expertise!--}}</h1>
                            {{-- <div class="lead-sm text-white-75 pb-lg-4">Fusce nec mattis arcu rhoncus risus duis pretium condimentum purus eget cursus molestie rhoncus vestibulum pulvinar magna</div>--}}
                        </div>
                    </div>

                    <div style="background-color: #29235c;" class="col-md-10 offset-md-1 col-lg-5 offset-lg-2">
                        <div class="pl-xl-5">
                            <div style="background-color: #3491c9;"
                                 class="{{--bg-indigo--}} text-white-75 rounded-ultra shadow-lg px-4 py-5 p-md-5 my-5">

                                <h3 class="font-weight-700 text-white">Let's Get Started</h3>
                                <div class="pb-3">
                                    <p>{{--Maecenas est convallis arcu fusce sem.--}}</p>
                                </div>

                                <form class="form-light-2">

                                    <div class="input-group input-group-lg input-group-round mb-4">
                                        <div class="input-group-inner">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-icon"><i
                                                        class="far fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Your name">
                                            <div class="input-focus-bg"></div>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-lg input-group-round mb-4">
                                        <div class="input-group-inner">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-icon"><i
                                                        class="far fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control form-control-lg"
                                                   placeholder="Email address">
                                            <div class="input-focus-bg"></div>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-lg input-group-round mb-5">
                                        <div class="input-group-inner">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-icon"><i
                                                        class="far fa-list-alt"></i></span>
                                            </div>
                                            <select class="custom-select custom-select-lg">
                                                <option selected>Select Brand</option>
                                                <option value="Mil-mind advisory">Mil-mind advisory</option>
                                                <option value="Cleaning Bees">Cleaning Bees</option>
                                                <option value="Colorful Expression">Colorful Expression</option>
                                                <option value="Fly-Express">Fly-Express</option>
                                                <option value="Waymaker">Waymaker</option>
                                            </select>
                                            <div class="input-focus-bg"></div>
                                        </div>
                                    </div>

                                    <button type="submit"
                                            class="btn btn-block btn-lg btn-round btn-light shadow-none text-indigo font-weight-700">
                                        Contact Us
                                    </button>

                                    <div class="form-group custom-control custom-checkbox text-center pt-1 mb-0">
                                        <input type="checkbox" class="custom-control-input" id="registerCheck">
                                        <label class="custom-control-label text-white-75" for="registerCheck">I agree to
                                            the <a href="#" target="_blank" class="text-white font-weight-600">Terms and
                                                Conditions</a>.</label>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="main-content pb-0">

        <!-- About Us section -->
        <div id="about" class="section py-5 mb-5">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="row pb-4 pb-lg-0 mb-5 mb-lg-0">

                            <div class="col-md-12">

                                <img src="{{asset('images/Milminds Banner.png')}}" alt="image"
                                     class="img-fluid rounded-xl shadow-lg add-animate" data-animated="fadeInLeft">

                                <div data-height="30px"></div>

                                <div class="bg-secondary rounded-xl shadow-lg p-4 add-animate" data-animated="fadeInUp">

                                    <div class="d-flex align-items-center">
                                        <h2 class="display-4 text-white font-weight-500 mb-0 mr-2">6</h2>
                                        <div class="text-white-75 text-uppercase line-height-md font-weight-500">
                                            Years of<br>Experience
                                        </div>
                                    </div>

                                    <div data-height="106px"></div>

                                    <h4 class="text-white font-weight-700 line-height-sm mb-0">The Synergy of
                                        Excellence</h4>

                                </div>

                                <div class="d-md-none" data-height="30px"></div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="px-xl-5">
                            <div class="pl-lg-3">

                                <div class="mb-5 add-animate" data-animated="fadeIn">

                                    <h5 class="font-weight-400">Welcome to Milminds Holdings</h5>

                                    <div data-height="3px"></div>

                                    <h2 class="h1 section-title-3 text-left font-weight-800">About Us</h2>

                                    <div class="lead-sm pt-2">
                                        Milminds Holdings emerges as a paragon of corporate synergy, an umbrella for
                                        distinct brands that together, form a tapestry of excellence and innovation. Our
                                        collective prowess spans from strategic business advisory to lifestyle and
                                        travel management, all while championing the principles of integrity and
                                        inclusive growth.
                                    </div>

                                </div>

                                <div class="row mb-5 add-animate" data-animated="fadeIn">

                                    <div class="col-md-12">
                                        <h2 class="h1 section-title-3 text-left font-weight-800">Business
                                            Philosophy</h2>
                                        <div class="lead-sm pt-2">
                                            At Milminds, we harmonize diversity with unity, allowing each entity's
                                            unique offerings to amplify the others', weaving a strong fabric of
                                            end-to-end solutions that span multiple industries.
                                        </div>
                                    </div>


                                </div>

                                <div data-height="10px"></div>

                                <div class="add-animate" data-animated="fadeIn">
                                    <a href="#brands" class="btn btn-lg btn-round btn-indigo mb-0">Get to know the
                                        brands.</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-3"></div>
            </div>
        </div>

        <!-- Featured services section -->
        <div id="brands">
            <div class="section">
                <h1 style="font-size: 50px;" class="h1 section-title-3 text-center font-weight-800">Our Brands</h1>
                <div class="container-fluid px-2">
                    <div class="row no-gutters mx-n1">
                        <div class="slider-container">
                            <div class="slider-item col-md-6 col-xl-4 px-1 pb-2">
                                <div class="card info-box-1 border-0 rounded-0 text-center mb-0">
                                    <img class="card-img rounded-0"
                                         src="{{asset('images/Advisory.png')}}" alt="image">
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="info-box-caption">
                                                {{-- <span class="badge badge-pill badge-indigo mb-4">Advisory</span>--}}
                                                <h5 class="card-title text-white font-weight-700 mb-1">{{--il-Minds Advisory –
                                                Your Gateway to Business Brilliance--}}</h5>
                                            </div>
                                            <div class="info-box-btn">
                                                <div class="info-box-btn-inner">
                                                    <a href="#" class="btn btn-round btn-outline-light mt-4 mb-0">View
                                                        Brand</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item col-md-6 col-xl-4 px-1 pb-2">
                                <div class="card info-box-1 border-0 rounded-0 text-center mb-0">
                                    <img class="card-img rounded-0"
                                         src="{{asset('images/Cleaning Bees 1.png')}}" alt="image">
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="info-box-caption">
                                                {{--<span class="badge badge-pill badge-indigo mb-4">Cleaning Bees</span>--}}
                                                <h5 class="card-title text-white font-weight-700 mb-1">{{--Cleaning Bees –
                                                Excellence in Every Sweep!--}}</h5>
                                            </div>
                                            <div class="info-box-btn">
                                                <div class="info-box-btn-inner">
                                                    <a href="#" class="btn btn-round btn-outline-light mt-4 mb-0">View
                                                        Brand</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item col-md-6 col-xl-4 px-1 pb-2">
                                <div class="card info-box-1 border-0 rounded-0 text-center mb-0">
                                    <img class="card-img rounded-0"
                                         src="{{asset('images/colorful-expression.png')}}" alt="image">
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="info-box-caption">
                                                {{--<span class="badge badge-pill badge-indigo mb-4">Colorful Expression</span>--}}
                                                <h5 class="card-title text-white font-weight-700 mb-1"></h5>
                                            </div>
                                            <div class="info-box-btn">
                                                <div class="info-box-btn-inner">
                                                    <a href="#" class="btn btn-round btn-outline-light mt-4 mb-0">View
                                                        Brand</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item col-md-6 col-xl-4 px-1 pb-2">
                                <div class="card info-box-1 border-0 rounded-0 text-center mb-0">
                                    <img class="card-img rounded-0"
                                         src="{{asset('images/fly-express.png')}}" alt="image">
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="info-box-caption">
                                                {{--<span class="badge badge-pill badge-indigo mb-4">Fly Express</span>--}}
                                                <h5 class="card-title text-white font-weight-700 mb-1"></h5>
                                            </div>
                                            <div class="info-box-btn">
                                                <div class="info-box-btn-inner">
                                                    <a href="#" class="btn btn-round btn-outline-light mt-4 mb-0">View
                                                        Brand</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item col-md-6 col-xl-4 px-1 pb-2">
                                <div class="card info-box-1 border-0 rounded-0 text-center mb-0">
                                    <img class="card-img rounded-0"
                                         src="{{asset('images/waymaker.png')}}" alt="image">
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="info-box-caption">
                                                {{--<span class="badge badge-pill badge-indigo mb-4">Way Maker</span>--}}
                                                <h5 class="card-title text-white font-weight-700 mb-1"></h5>
                                            </div>
                                            <div class="info-box-btn">
                                                <div class="info-box-btn-inner">
                                                    <a href="#" class="btn btn-round btn-outline-light mt-4 mb-0">View
                                                        Brand</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="slider-nav left" onclick="slide('left')">&#10094;</button>
                        <button class="slider-nav right" onclick="slide('right')">&#10095;</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Why Us section -->
        <div id="why-choose-us" class="section py-5">
            <div class="container">

                <div class="row align-items-center py-3 my-5">

                    <div class="col-lg-6">
                        <div class="pt-3 pr-lg-5 mb-5 mb-lg-0">

                            <h2 class="h1 section-title-3 text-left font-weight-800 mb-5">Why Choose Us</h2>

                            <div data-height="10px"></div>

                            <div class="icon-info-1 mb-5">
                                <div class="icon-element text-primary">
                                    <span><i class="fa fa-eye" style="font-size: 50px; margin-top: 5%;"></i></span>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h5 class="font-weight-700">Our Vision</h5>
                                    <p>Our aim is to anchor ourselves as the vanguard of innovation, setting benchmarks
                                        in customer satisfaction and nurturing a prosperous legacy worldwide.</p>
                                </div>
                            </div>

                            <div class="icon-info-1 mb-5">
                                <div class="icon-element text-primary">
                                    <span><i class="fa fa-bullseye" style="font-size: 50px; margin-top: 5%;"></i></span>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h5 class="font-weight-700">Our Mission</h5>
                                    <p>We are dedicated to empowering our subsidiaries, fostering an environment where
                                        they not only thrive independently but also unite to form an indomitable force
                                        of industry leadership.</p>
                                </div>
                            </div>

                            <div class="icon-info-1">
                                <div class="icon-element text-primary">
                                    <span><i class="fa fa-balance-scale"
                                             style="font-size: 50px; margin-top: 5%;"></i></span>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h5 class="font-weight-700">Our Core Values</h5>
                                    <p>We pledge allegiance to the continual pursuit of innovation, upholding the
                                        highest standards of integrity, striving for unparalleled excellence, and
                                        placing our customers at the heart of all endeavors.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div id="carouselIndicatorsCircle"
                             class="carousel slide gallery-slides arrow-nav-overflow rounded-xl shadow-lg mb-5"
                             data-ride="carousel">
                            <ol class="carousel-indicators carousel-indicator-circle">
                                <li data-target="#carouselIndicatorsCircle" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselIndicatorsCircle" data-slide-to="1"></li>
                                <li data-target="#carouselIndicatorsCircle" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="{{asset('images/about/1.png')}}"
                                       data-fancybox="benefits-gallery" data-caption="Mauris Pulvinar Metus">
                                        <div class="gallery-slides-hover"></div>
                                        <img class="d-block w-100"
                                             src="{{asset('images/about/1.png')}}"
                                             alt="First slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="{{asset('images/about/2.png')}}"
                                       data-fancybox="benefits-gallery" data-caption="Rhoncus Congue Lacus">
                                        <div class="gallery-slides-hover"></div>
                                        <img class="d-block w-100"
                                             src="{{asset('images/about/2.png')}}"
                                             alt="Second slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="{{asset('images/about/3.png')}}"
                                       data-fancybox="benefits-gallery" data-caption="Fuspendisse Nec Mattis">
                                        <div class="gallery-slides-hover"></div>
                                        <img class="d-block w-100"
                                             src="{{asset('images/about/3.png')}}"
                                             alt="Third slide">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselIndicatorsCircle" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselIndicatorsCircle" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <h2 class="h1 section-title-3 text-left font-weight-800">Engage With Us</h2>

                        <div class="lead-sm pt-2">
                            Join us on a voyage through Milminds Holdings' world, where each step is a leap towards
                            groundbreaking achievements and exemplary service delivery.
                        </div>

                    </div>

                </div>

                <div data-height="90px"></div>

            </div>
        </div>

        <!-- Call to action section -->
        <div style="margin-top: 5%;" id="contact-us">
            <div class="section pb-5 bg-image" data-img-src="{{asset('images/contact-us.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="bg-white rounded-ultra shadow-lg px-4 py-5 p-md-5 mt-up100 mb-5">

                                <div class="row my-4">
                                    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
                                        <div class="text-center mt-2 mb-4 my-md-4">
                                            <h2 class="h1 section-title-3 font-weight-800 text-center">Request a Free
                                                Consultation</h2>
                                            <div class="lead-sm pt-2">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-10 offset-lg-1">
                                        <form class="px-md-4 px-lg-0 px-xl-4">
                                            <div class="form-row">

                                                <div class="col-lg-6">
                                                    <div class="px-1 pb-3 mb-3">
                                                        <div class="input-group input-group-lg input-group-round">
                                                            <div class="input-group-inner">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text input-group-icon"><i
                                                                        class="far fa-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control form-control-lg"
                                                                       placeholder="Your name">
                                                                <div class="input-focus-bg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="px-1 pb-3 mb-3">
                                                        <div class="input-group input-group-lg input-group-round">
                                                            <div class="input-group-inner">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text input-group-icon"><i
                                                                        class="far fa-envelope"></i></span>
                                                                </div>
                                                                <input type="email" class="form-control form-control-lg"
                                                                       placeholder="Email address">
                                                                <div class="input-focus-bg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="px-1 mb-5">
                                                        <div class="input-group input-group-lg input-group-round">
                                                            <div class="input-group-inner">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text input-group-icon"><i
                                                                        class="fas fa-mobile-alt"></i></span>
                                                                </div>
                                                                <input type="tel" class="form-control form-control-lg"
                                                                       placeholder="Phone number">
                                                                <div class="input-focus-bg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="px-1 mb-5">
                                                        <div class="input-group input-group-lg input-group-round">
                                                            <div class="input-group-inner">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text input-group-icon"><i
                                                                        class="far fa-list-alt"></i></span>
                                                                </div>
                                                                <select class="custom-select custom-select-lg">
                                                                    <option selected>Select Brand</option>
                                                                    <option value="Mil-mind advisory">Mil-mind advisory
                                                                    </option>
                                                                    <option value="Cleaning Bees">Cleaning Bees</option>
                                                                    <option value="Colorful Expression">Colorful
                                                                        Expression
                                                                    </option>
                                                                    <option value="Fly-Express">Fly-Express</option>
                                                                    <option value="Waymaker">Waymaker</option>
                                                                </select>
                                                                <div class="input-focus-bg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 offset-lg-3">
                                                    <div class="px-1">
                                                        <button type="submit"
                                                                class="btn btn-lg btn-round btn-block btn-indigo">Send a
                                                            Request
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="px-1">
                                                        <div
                                                            class="form-group custom-control custom-checkbox text-center mt-2 mb-0 mb-md-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="registerCheck_2">
                                                            <label class="custom-control-label" for="registerCheck_2">I
                                                                agree to the <a href="#" target="_blank"
                                                                                class="text-dark-gray font-weight-600">Terms
                                                                    and Conditions</a>.</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div style="background-color: white;" class="row align-items-center py-4">
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid"
                                             src="{{asset('images/logo-bg/logo-advisory-removebg-preview.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid"
                                             src="{{asset('images/logo-bg/logo-cleaning-removebg-preview.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid"
                                             src="{{asset('images/logo-bg/colorful-expressions-removebg-preview.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid"
                                             src="{{asset('images/logo-bg/logo-flyexpress-removebg-preview.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid"
                                             src="{{asset('images/logo-bg/logo-waymaker-removebg-preview.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="text-center px-2">
                                        <img class="img-fluid" src="{{asset('images/logos/logo-advisory.png')}}"
                                             alt="brand">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yEx1q6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 --}}

    <script>
        function slide(direction) {
            // Log to confirm the function is called
            console.log('Slide function called, direction:', direction);

            var container = document.querySelector('.slider-container');
            var items = document.querySelectorAll('.slider-item');

            // Log to confirm the elements are selected
            console.log('Container:', container);
            console.log('Items:', items);

            if (items.length === 0) {
                console.error('No slider items found.');
                return;
            }

            // Assuming all items are the same width
            var itemWidth = items[0].offsetWidth;
            console.log('Item width:', itemWidth);

            // Determine the scroll value based on direction
            var scrollValue = direction === 'left' ? -itemWidth : itemWidth;

            // Perform the scroll
            container.scrollBy({left: scrollValue, behavior: 'smooth'});

            // Log the new scroll position
            console.log('New scrollLeft:', container.scrollLeft);
        }

    </script>

@endsection


