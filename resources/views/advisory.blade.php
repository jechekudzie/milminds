@extends('layouts.advisory')

@section('title', 'Advisory')

@section('content')
    <!-- Banner slides -->
    <div class="banner-slides-wrapper arrow-nav-overflow" data-dots="true" data-nav="true">

        <div class="banner-slides-container owl-carousel owl-theme owl-dot-light-1">

            <!-- Slide item -->
            <div class="d-flex flex-column">
                <div class="page-header-block-height d-flex align-items-center bg-image"
                     data-img-src="{{asset('images/advisroyL.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-center py-5">
                                <div class="px-md-5 px-lg-0 px-xl-5 py-5 overflow-hidden">
                                    <h2 class="h3 font-weight-300 text-white add-animate slide-animate"
                                        data-animated="fadeInLeft">Your Success is Our Business</h2>
                                    <h1 class="display-4 font-weight-800 text-white mb-3 add-animate slide-animate"
                                        data-animated="fadeInRight">Mil-Minds <br>Advisory Services</h1>
                                    <div class="h4 font-weight-300 text-white add-animate slide-animate"
                                         data-animated="fadeInLeft"
                                    >
                                        Unlock the full potential of your business with our expert advisory services. At
                                        Mil-Minds, we don't just consult; we partner with you on your journey to
                                        excellence.
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="add-animate slide-animate" data-animated="fadeIn">
                                        <a href="#" class="btn btn-lg btn-round btn-secondary btn-gray-shadow mx-2">Get
                                            started now</a>
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
    <div class="main-content pb-0">
        <!-- Vision and mission section -->
        <div id="vision" class="section bg-light pb-5 mt-up75">

            <div class="bg-white" data-height="5px"></div>

            <div class="container pt-5">
                <div class="py-5 my-4">
                    <h2 class="text-center display-4 font-weight-800 text-black mb-4">Mil-Minds Advisory Services</h2>

                    <div data-height="10px"></div>

                    <div class="row align-items-center mt-5">

                        <div class="col-lg-6">

                            <img src="{{asset('images/aboutus.jpg')}}" alt="image"
                                 class="img-fluid rounded-lg shadow-lg add-animate" data-animated="fadeInDown">

                            <div class="d-md-none" data-height="30px"></div>

                        </div>

                        <div class="col-lg-6">
                            <div class="px-xl-5">
                                <div class="pl-lg-3">

                                    <div class="mb-5">

                                        <h5 class="font-weight-400">Redefining Business Success – Your Trusted Partner
                                            in SME Growth</h5>

                                        <div data-height="3px"></div>

                                        <h2 class="h1 font-weight-800 mb-4">Our Vision</h2>

                                        <div class="lead-sm">
                                            We envision a market where every small and medium-sized enterprise (SME) has
                                            the tools, resources, and support to scale new heights of success. Mil-Minds
                                            is committed to being the catalyst in this transformation.
                                        </div>

                                    </div>

                                    <div class="mb-5">

                                        <h5 class="font-weight-400">Inspiring Millionaires – Cultivating Success through
                                            Excellence</h5>

                                        <div data-height="3px"></div>

                                        <h2 class="h1 font-weight-800 mb-4">Our Mission</h2>

                                        <div class="lead-sm">
                                            Our mission goes beyond the financial bottom line; it's about inspiring a
                                            legacy of millionaires who value excellence, ethics, and continuous
                                            improvement in their entrepreneurial pursuits.
                                        </div>

                                    </div>


                                </div>

                                <div data-height="10px"></div>

                                <a href="#about" class="btn btn-lg btn-round btn-primary mb-0">Who are we? Read More</a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Who we are section -->
        <div id="about" class="section py-5 bg-image" data-img-src="{{asset('images/Mil-minds.jpg')}}">
            <div class="container">
                <div class="row align-items-center py-5 my-xl-3">

                    <div class="col-lg-12">
                        <div class="py-3 pr-lg-4 mb-5 mb-lg-0">

                            <h2 class="display-4 font-weight-300 text-primary mb-1">Mil-Minds Advisory Services</h2>

                            <h2 class="display-4 font-weight-800 text-white mb-4">Who We Are?</h2>

                            <div class="lead-sm text-white mb-5">
                                Mil-Minds Advisory Services stands as a pillar of governance and compliance excellence
                                in
                                Zimbabwe, sculpting the business landscape to foster growth with integrity and
                                innovation.
                                Established by a team of seasoned professionals in Accountancy and Forensic Auditing,
                                our
                                mission is to instill a culture of meticulous business practice and entrepreneurial
                                spirit,
                                aiming to nurture not just businesses, but a mindset tuned for millions.
                            </div>

                            <div data-height="10px"></div>

                            <a href="#values" class="btn btn-lg btn-round btn-outline-light mb-lg-2">Our Services</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Our services section -->
        <div id="values" class="section">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 align-self-center">

                        <div class="mt-4 mb-5">

                            <h5 class="font-weight-400">Our Comprehensive Services:</h5>

                            <div data-height="3px"></div>

                            <h2 class="h1 font-weight-800 mb-4">Values & Approach</h2>

                            <div class="lead-sm">
                                Positive Mindsets, Innovative Solutions – Transforming Challenges into Opportunities.
                                At the heart of our approach is a steadfast commitment to positivity, innovation, and
                                adaptability. We believe that the right mindset can turn any challenge into a stepping
                                stone for success.
                            </div>

                        </div>

                        <div data-height="15px"></div>

                        <div class="row">

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-rocket img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Business Startup</h5>
                                            <p>
                                                Launch your enterprise with confidence using our strategic toolkit,
                                                designed for a robust entry into the market.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-handshake img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Liaison services</h5>
                                            <p>
                                                Benefit from our streamlined processes, ensuring a seamless business
                                                setup experience.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-chart-line img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Accounting & Finance</h5>
                                            <p>Receive bespoke accounting services that bring financial clarity and
                                                ensure regulatory compliance.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-balance-scale img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Corporate Legalities</h5>
                                            <p>
                                                Navigate the complexities of company registration and compliance with
                                                ease, backed by our expertise.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-money-bill-wave img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Tax Compliance</h5>
                                            <p>
                                                Engage in strategic tax planning to fulfill corporate responsibilities
                                                and enhance fiscal diligence.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-graduation-cap img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Training Services</h5>
                                            <p>
                                                Elevate your team’s performance with our empowering training modules
                                                tailored for operational excellence.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-tasks img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Project Management</h5>
                                            <p>
                                                Guarantee the success of your projects with our comprehensive oversight
                                                and proactive project management services.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="icon-info-1">
                                    <a class="icon-info-link" href="#">
                                        <div class="icon-element">
                                            <i class="fa fa-coins img-fluid add-animate"
                                               style="font-size: 50px; color: #3491c9;"></i>
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-3">Debt Management</h5>
                                            <p>
                                                Implement intelligent debt management strategies to optimize your
                                                company’s financial health and sustainability.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>

                        <div data-height="20px"></div>

                    </div>


                </div>

                <div class="row">
                    <div class="col">

                        <div style="background-color: #3D3781" class="{{--bg-primary--}} p-3 px-md-5 py-md-4 text-white-75 rounded-lg shadow-lg">

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
                                                <p class="mb-0">Our Head Office</p>
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
                                                <p class="mb-0">Call Us Now</p>
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
                                                <p class="mb-0">Asking Question</p>
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

            </div>
        </div>
    </div>


    <!-- Call to action section -->
    <div id="community" class="section" style="margin-top: 30px;">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-7 bg-image" data-img-src="{{asset('/images/BusinessCommunity.jpg')}}">
                    <div class="d-lg-none" data-height="60vw"></div>
                </div>

                <div class="col-lg-5 bg-light p-4 p-md-5">
                    <div class="row no-gutters">
                        <div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0 col-xl-8 offset-xl-2 text-center">

                            <div data-height="100px"></div>

                            <h5 class="font-weight-400">Mil-Minds Advisory Services</h5>

                            <div data-height="3px"></div>

                            <h2 class="h1 font-weight-800 mb-3">Join Our Community</h2>

                            <div class="lead-sm mb-5">
                                Become part of a community that values growth, learning, and shared success. Attend our
                                workshops, seminars, and networking events to connect with like-minded professionals.
                            </div>

                            <div data-height="10px"></div>

                            <a href="#" class="btn btn-lg btn-round btn-primary mb-0">Join Now</a>

                            <div data-height="100px"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Contact form -->
    <div style="margin-top: 5%;" id="contact-us">
        <div class="section pb-5 bg-image" data-img-src="{{asset('images/contact-us.png')}}">
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
                                                            <textarea name="message"
                                                                      class="form-control form-control-lg"></textarea>
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

@endsection
