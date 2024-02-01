@extends('layouts.colorful_expressions')

@section('title', 'Colorful Expressions')

@section('content')

    <!-- Banner slides -->
    <div class="banner-slides-wrapper arrow-nav-overflow" data-dots="true" data-nav="true">

        <div class="banner-slides-container owl-carousel owl-theme owl-dot-light-1">

            <!-- Slide item -->
            <div class="bg-image overflow-hidden"
                 data-img-src="{{asset('images/colorful_banner.jpg')}}">
                <div class="container d-flex flex-column">
                    <div class="row page-header-block-height">

                        <div class="col-lg-8 d-flex">
                            <div class="align-self-center w-100 px-md-5 pr-lg-0 pl-lg-3 ml-lg-n3 py-5 overflow-hidden">
                                <div {{--style="background-color: #cb0096"--}} class="pl-lg-4 pl-xl-5 text-center text-lg-left add-animate slide-animate"
                                     data-animated="fadeInRight">
                                   {{-- <h2 style="color: white" class="h3 font-weight-300 --}}{{--text-white--}}{{-- mt-4 mt-lg-0">Colourful Expressions</h2>
                                    <h1 style="color: white" class="display-4 font-weight-800 --}}{{--text-white--}}{{-- mb-3">Unleash Creativity with
                                        Colourful Expressions <br>– Where Ideas Bloom!
                                    </h1>--}}

                                    {{--<a href="#" class="btn btn-round btn-lg btn-dark-gray mx-2 ml-md-0 mr-md-3"><i
                                            class="fab fa-app-store"></i>App Store</a>
                                    <a href="#" class="btn btn-round btn-lg btn-dark-gray mx-2 mx-md-0"><i
                                            class="fab fa-google-play"></i>Google Play</a>--}}
                                </div>
                            </div>
                        </div>

                        {{--<div class="col-lg-6 d-flex">
                            <div class="align-self-end w-100 px-5">
                                <div class="px-md-5 px-lg-4 px-xl-5 mt-md-4 mt-xl-0">
                                    <div class="d-none d-xl-block" data-height="120px"></div>
                                    <img src="../../../assets/images/upload/hand-holding-phone-01.png" alt="image"
                                         class="img-fluid add-animate slide-animate" data-animated="slideInLeft">
                                </div>
                            </div>
                        </div>--}}

                    </div>
                </div>
            </div>

            <!-- Slide item -->
            <div class="bg-image overflow-hidden"
                 data-img-src="{{asset('images/colorful3.jpg')}}">
                <div class="container d-flex flex-column">
                    <div class="row page-header-block-height align-items-center">

                        {{--<div class="col-lg-6">
                            <div class="px-4 px-md-5 px-lg-4 pt-5 pt-lg-0">
                                <div class="d-none d-xl-block" data-height="150px"></div>
                                <img src="../../../assets/images/upload/phone-mockup-02.png" alt="image"
                                     class="img-fluid mt-4 mt-md-5 mt-lg-0 add-animate slide-animate"
                                     data-animated="slideInUp">
                                <div class="d-none d-xl-block" data-height="60px"></div>
                            </div>
                        </div>--}}

                        <div class="col-lg-8 offset-6">
                            <div style="background-color: #29235c" class="px-md-5 px-lg-0 py-5">
                                <div class="text-center px-lg-4">

                                    <div  class="add-animate slide-animate" data-animated="fadeInDown">
                                        <h2 style="color: white" class="h3 font-weight-300 {{--text-white--}}">Ready to Elevate Your Brand?</h2>
                                        <h1 style="color: white" class="display-4 font-weight-800 {{--text-white--}} mb-3">Get In Touch<br></h1>
                                        <div class="lead-sm text-white-75 pb-2 pb-xl-3 mb-5">
                                            Inspiring Lasting Impressions – Crafting Brands that Echo Beyond Time
                                        </div>
                                    </div>

                                    <div class="px-3 mb-4 mb-md-5 mb-lg-0 add-animate slide-animate"
                                         data-animated="fadeInUp">
                                        <div class="row">
                                            <div
                                                class="col-md-10 offset-md-1 col-lg-12 offset-lg-0 col-xl-10 offset-xl-1">
                                                <form class="form-light-2">
                                                    <div class="input-group input-group-lg input-group-round">
                                                        <div class="input-group-inner">
                                                            <input type="email" class="form-control form-control-lg"
                                                                   placeholder="Your email address">
                                                            <div class="input-group-append">
                                                                <button
                                                                    class="btn btn-lg btn-round btn-light shadow-none mb-0"
                                                                    type="button">Subscribe
                                                                </button>
                                                            </div>
                                                            <div class="input-focus-bg"></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text text-white-75 mt-3">* Personal data will be
                                                        encrypted.</small>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation -->
        <div class="carousel-custom-nav carousel-nav-lg d-none d-lg-block">
            <a class="carousel-control-prev" href="#" data-width="9%">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#" data-width="9%">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <!-- Content -->
    <div class="main-content py-0">

        <!-- About Us section -->
        <div id="about" class="section bg-light py-5">
            <div class="container">
                <div class="row align-items-center py-5">

                    <div class="col-lg-6 order-2 order-lg-1 overflow-hidden py-3">
                        <div class="pr-lg-5 add-animate" data-animated="fadeInLeft">
                            <h1>Unleash Creativity with
                            Colourful Expressions <br>– Where Ideas Bloom!
                            </h1>
                            <br/>

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">Trusted by The People</h2>

                            <div class="zz-separator zz-separator-wide mb-4" data-width="93px"></div>

                            <div data-height="20px"></div>
                            <h4 class="font-weight-700 mb-4">Vision</h4>
                            <div class="lead mb-5">
                                Inspiring Lasting Impressions – Crafting Brands that Echo Beyond Time.
                            </div>
                            <h4 class="font-weight-700 mb-4">Mission</h4>
                            <div class="lead mb-5">
                                Crafting Digital Masterpieces – Where Value Meets Creativity and Professionalism.
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="px-3 pb-4 mb-5 px-md-5 px-lg-0 pb-lg-0 mb-lg-0">
                            <img src="../../../assets/images/upload/smartphone-users-01.png" alt="image"
                                 class="img-fluid add-animate" data-animated="fadeInRight">
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Services section -->
        <div id="services" class="section bg-image py-5" data-img-src="{{asset('images/colorful_big/1.jpg')}}">
            <div class="container">

                <div class="row my-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center text-white-75 mt-3">

                            <h2 class="h1 font-weight-800 text-white line-height-sm mb-4">Our Services</h2>
                            <div class="zz-separator zz-separator-wide zz-separator-white ml-auto mr-auto mb-4"
                                 data-width="93px"></div>

                        </div>
                    </div>
                </div>

                <div class="row align-items-lg-center mb-5">

                    <div class="col-md-6 col-lg-4 order-2 order-lg-1">
                        <div class="px-4 px-lg-0 pl-xl-4 pr-xl-5">

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">

                                    <i class="fa fa-bullhorn mr-3 mr-lg-0 ml-lg-3 order-lg-2"
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>

                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">
                                        Corporate Communications & Media Management
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>
                                        Revolutionizing Corporate Communications – Your Partner in Effective and
                                        Spam-Free Bulk Email Services.
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <i class="fa fa-globe mr-3 mr-lg-0 ml-lg-3 order-lg-2"
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>

                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">
                                        Online Presence Management
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>
                                        Domain registration, email hosting, and website creation services that redefine
                                        professional online presence
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <i class="fa fa-mobile-alt mr-3 mr-lg-0 ml-lg-3 order-lg-2"
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>

                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">
                                        Mobile App Development & E-tech Innovation
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>
                                        Innovate with Us – Cutting-edge mobile applications and e-tech solutions
                                        tailored to your needs.
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <i class="fa fa-legal mr-3 mr-lg-0 ml-lg-3 order-lg-2"
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>

                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">
                                        Trademarking & Intellectual Protection:
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>
                                        Protecting Your Brand's Legacy – We collaborate with Mil-Minds Advisory Services
                                        for robust intellectual property protection.
                                    </p>
                                </div>
                            </div>

                            <div class="d-lg-none" data-height="56px"></div>

                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="text-center px-4 pb-4 mb-5 pb-lg-0 mb-lg-0">
                            <img src="{{asset('images/digital_presence.jpg')}}" alt="image"
                                 class="img-fluid add-animate" data-animated="fadeInUp">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 order-3 order-lg-3">
                        <div class="px-4 px-lg-0 pl-xl-5 pr-xl-4">

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">

                                    <i class="fa fa-id-card mr-3 "
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>
                                    <h5 class="mb-0 font-weight-700 text-white">Corporate Branding </h5>
                                </div>
                                <div class="text-white-75">
                                    <p>
                                        Branding that Speaks Volumes – From internal to external signage, we ensure your
                                        brand stands out.
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <i class="fa fa-gift mr-3 "
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>
                                    <h5 class="mb-0 font-weight-700 text-white">Promotional Material & Gifts </h5>
                                </div>
                                <div class="text-white-75">
                                    <p>
                                        Branding Beyond Boundaries – Personalize your corporate presence with our range
                                        of branded materials and gifts.
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <i class="fa fa-paint-brush mr-3 "
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>
                                    <h5 class="mb-0 font-weight-700 text-white">Brand Management</h5>
                                </div>
                                <div class="text-white-75">
                                    <p>
                                        Crafting Distinct Brands – Our creative team is dedicated to designing unique,
                                        trademarkable logos and managing your brand lifecycle.
                                    </p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <i class="fa fa-print mr-3 "
                                       style="font-size: 50px; color: #3491c9;">
                                    </i>
                                    <h5 class="mb-0 font-weight-700 text-white">Printing </h5>
                                </div>
                                <div class="text-white-75">
                                    <p>
                                        Print Perfection – Specialized in printing high-quality reports, magazines,
                                        journals, and more.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="d-none d-lg-block" data-height="20px"></div>

            </div>
        </div>

        <div id="call-to-action"  class="row">
            <div class="col">

                <div style="background-color: #cb0096;" class="{{--bg-primary--}} p-3 px-md-5 py-md-4 text-black-75 rounded-lg shadow-lg">

                    <div data-height="25px"></div>

                    <div class="row">

                        <div class="col-md-6 col-xl-4">
                            <div class="px-2 pb-3 mb-4 pb-xl-0 mb-xl-0">
                                <div class="icon-info-1">
                                    <div class="icon-element">
                                        <img src="../../../assets/svg/upload/contact-icon-01.svg" alt="icon"
                                             class="img-fluid add-animate" data-animated="zoomIn"
                                             data-width="42px" data-height="42px">
                                    </div>
                                    <div class="icon-info-text pl-3">
                                        <p class="mb-0 text-white font-weight-100">Our Head Office</p>
                                        <p class="mb-0 text-white">7th Floor, ZB Chambers, Cnr
                                            First Street & George Silundika Avenue</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3">
                            <div class="px-2 pb-3 mb-4 pb-xl-0 mb-xl-0">
                                <div class="icon-info-1">
                                    <div class="icon-element">
                                        <img src="../../../assets/svg/upload/contact-icon-02.svg" alt="icon"
                                             class="img-fluid add-animate" data-animated="zoomIn"
                                             data-width="42px" data-height="42px">
                                    </div>
                                    <div class="icon-info-text pl-3">
                                        <p class="mb-0 text-white font-weight-100">Call Us Now</p>
                                        <p class="mb-0 text-white">
                                            +263 242 759 055 <br/>
                                            +263 772 522 373
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3">
                            <div class="px-2 pb-3 mb-4 pb-md-0 mb-md-0">
                                <div class="icon-info-1">
                                    <div class="icon-element">
                                        <img src="../../../assets/svg/upload/contact-icon-03.svg" alt="icon"
                                             class="img-fluid add-animate" data-animated="zoomIn"
                                             data-width="42px" data-height="42px">
                                    </div>
                                    <div class="icon-info-text pl-3">
                                        <p class="mb-0 text-white font-weight-100">Asking Question</p>
                                        <h6 class="mb-0 font-weight-700 text-white">
                                            marketing@milmindszw.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div data-height="27px"></div>

                </div>

            </div>
        </div>
        <!-- Contact form -->
        <div style="margin-top: 5%;" id="contact-us">
            <div style="background-color: #cb0096;" class="section pb-5 bg-image" >
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="bg-white rounded-ultra shadow-lg px-4 py-5 p-md-5 mt-up100 mb-5">

                                <div class="row my-4">
                                    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
                                        <div class="text-center mt-2 mb-4 my-md-4">
                                            <h2 class="h1 section-title-3 font-weight-800 text-center">
                                                Contact Us
                                            </h2>
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

                                                <div class="col-lg-12">
                                                    <div class="px-1 mb-5">
                                                        <div class="input-group input-group-lg input-group-round">
                                                            <div class="input-group-inner">
                                                                <div class="input-group-prepend"></div>
                                                                <textarea name="message" class="form-control form-control-lg"></textarea>
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

@endsection
