@extends('layouts.fly_express')

@section('title', 'Fly Express Courier Services')

@section('content')
    <!-- Hero banner -->
    <div class="bg-image" data-img-src="../../../assets/images/upload/section-hero-banner-04.jpg">
        <div class="container-fluid d-flex flex-column p-0">
            <div class="row no-gutters page-header-block-height align-content-between">

                <div class="col-12"></div>

                <div class="col-12">
                    <div class="container">
                        <div class="row align-items-center mt-4 mb-5 mt-md-5 mt-lg-4 mb-lg-0">

                            <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-0 py-lg-5">
                                <div class="py-5 pl-lg-4 ml-lg-n4 overflow-hidden text-center text-lg-left">
                                    <h2 class="h5 font-weight-700 text-warning letter-spacing-sm mb-lg-0 add-animate"
                                        data-animated="bounceInLeft">Elevating Courier Services</h2>
                                    <h1 class="display-2 font-weight-800 text-white add-animate"
                                        data-animated="bounceInRight">Fly Express Courier Services</h1>
                                    <div class="lead-sm font-weight-500 text-white pb-2 mb-5 add-animate"
                                         data-animated="bounceInLeft">
                                        Your Swift, Safe, and Reliable Courier Partner!
                                    </div>
                                   {{-- <div class="add-animate" data-animated="bounceInRight">
                                        <a href="#" class="btn btn-lg btn-round btn-dark mx-2 mb-xl-0 ml-xl-0"><i
                                                class="fas fa-biking"></i>View product</a>
                                        <a href="#" class="btn btn-lg btn-round btn-outline-light mx-2 mb-xl-0"><i
                                                class="fas fa-tags"></i>Go to store</a>
                                    </div>--}}
                                </div>
                            </div>

                            <div class="col-lg-7 text-center py-4 py-md-5">
                                <img class="img-fluid add-animate"
                                     src="{{asset('images/Flexible and Tailored Pricing for Every Delivery..jpg')}}" alt="image"
                                     data-animated="bounceInDown">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row no-gutters align-items-center">

                        <div class="col-lg-4 col-xl-5 px-5 mb-5 mb-lg-0">
                            <div class="px-xl-3 text-white text-center text-lg-left">
                                <a href="#" class="btn btn-round btn-lg btn-icon-only btn-outline-light mr-3 mb-0"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-round btn-lg btn-icon-only btn-outline-light mr-3 mb-0"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-round btn-lg btn-icon-only btn-outline-light mb-0"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-xl-7">
                            <div class="row no-gutters">

                                <div
                                    class="col-md-9 px-4 pr-md-0 pl-md-5 pb-5 py-md-4 text-center text-md-left d-md-flex align-items-center justify-content-between text-white bg-dark order-2 order-md-1">
                                    <div
                                        class="position-relative z-index-1 d-flex align-items-center justify-content-center mx-auto mt-n5 mb-3 my-md-0 mr-md-n5 order-md-2"
                                        data-width="6rem" data-height="6rem">

                                    </div>
                                    <div class="pr-md-4 pl-md-0 pr-xl-5 order-md-1">
                                        <h3 class="font-weight-700 text-white mb-3 mb-md-1">Beyond Boundaries, <span
                                                class="text-warning">Beyond Speed</span></h3>
                                        <p class="mb-md-0">Fly Express Courier Services, Flying without Wings.</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="about" class="section py-5">
        <div class="container">
            <div class="row align-items-center py-4 my-5">

                <div class="col-lg-12">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="animated fadeIn" data-animated="fadeIn">

                                <h2 class="h1 section-title-3 font-weight-800 text-left text-uppercase mb-4">Our
                                    Vision</h2>

                                <div class="lead-sm pt-3 mb-5">
                                    To Pioneer a Network of Seamless Courier and Cargo Services, Locally and Beyond
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="animated fadeIn" data-animated="fadeIn">

                                <h2 class="h1 section-title-3 font-weight-800 text-left text-uppercase mb-4">Our
                                    Mission</h2>

                                <div class="lead-sm pt-3 mb-5">
                                    Creating Lasting Impressions with Every Delivery – Safety, Reliability, and Comfort
                                    Guaranteed
                                </div>

                            </div>
                        </div>
                    </div>
                    <div data-height="10px" style="height: 10px;"></div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="row mb-5 mb-lg-0">

                                <div class="col-md-6 col-lg-6">

                                    <div style="background-color: #334c76" class="card text-white border-0 shadow rounded-xl bg-image animated fadeInLeft">
                                        <div class="card-header font-weight-700 text-uppercase rounded-0 bg-transparent">
                                            <a href="#" class="d-flex align-items-center text-white">
                                                <i class="fa fa-medal fa-lg mr-2"></i>
                                                <span class="mt-1">Quality First</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Placing your interests at the forefront, we are
                                                committed to exceptional service and customer delight.</p>
                                            <div class="text-right pt-2">
                                                {{--<a href="#" class="btn btn-sm btn-link text-white pr-0 mb-0"><i
                                                        class="fas fa-long-arrow-alt-right"></i>More information</a>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div data-height="5px" style="height: 5px;"></div>

                                </div>

                                <div class="col-md-6 col-lg-6">

                                    <div class="card text-white bg-rose border-0 shadow rounded-xl bg-image mb-0 animated fadeInUp">
                                        <div
                                            class="card-header font-weight-700 text-uppercase rounded-0 bg-transparent">
                                            <a href="#" class="d-flex align-items-center text-white">
                                                <i class="fa fa-rocket fa-lg mr-2"></i>
                                                <span class="mt-1">Innovation and Growth</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                Continuously exploring new horizons, we strive to be pioneers in courier
                                                solutions.
                                            </p>
                                            <div class="text-right pt-2">
                                                {{--<a href="#" class="btn btn-sm btn-link text-white pr-0 mb-0"><i
                                                        class="fas fa-long-arrow-alt-right"></i>More information</a>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-lg-none" data-height="5px" style="height: 5px;"></div>

                                </div>

                                <div class="col-md-6 col-lg-6">

                                    <div class="card text-white bg-rose border-0 shadow rounded-xl bg-image mb-0 animated fadeInUp"
                                        style="background-image: url(&quot;../../assets/images/upload/service-card-box-10.png&quot;);">
                                        <div
                                            class="card-header font-weight-700 text-uppercase rounded-0 bg-transparent">
                                            <a href="#" class="d-flex align-items-center text-white">
                                                <i class="fa fa-briefcase fa-lg mr-2"></i>
                                                <span class="mt-1">Professionalism</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                Excellence is our benchmark. We uphold the highest standards in all our
                                                undertakings.
                                            </p>
                                            <div class="text-right pt-2">
                                                {{--<a href="#" class="btn btn-sm btn-link text-white pr-0 mb-0"><i
                                                        class="fas fa-long-arrow-alt-right"></i>More information</a>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-lg-none" data-height="5px" style="height: 5px;"></div>

                                </div>

                                <div class="col-md-6 col-lg-6">

                                    <div style="background-color: #334c76" class="card text-white border-0 shadow rounded-xl bg-image mb-0 animated fadeInUp">
                                        <div class="card-header font-weight-700 text-uppercase rounded-0 bg-transparent">
                                            <a href="#" class="d-flex align-items-center text-white">
                                                <i class="fa fa-hands-helping fa-lg mr-2"></i>
                                                <span class="mt-1">Teamwork</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                United in purpose, our team from ground handlers to board members is the cornerstone of our success.
                                            </p>
                                            <div class="text-right pt-2">
                                                {{--<a href="#" class="btn btn-sm btn-link text-white pr-0 mb-0"><i
                                                        class="fas fa-long-arrow-alt-right"></i>More information</a>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-lg-none" data-height="5px" style="height: 5px;"></div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- Overview section -->
    <div id="services" class="section pb-5">
        <div class="container">
            <div class="row align-items-center pb-5 mb-5">

                <div class="col-lg-4 order-2 order-lg-1">

                    <div class="icon-info-5 text-center pb-4 mb-5">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4 add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-file img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Document Delivery</h4>
                                <p class="mb-0">
                                    Safeguarding your crucial documents with utmost care and speed.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="icon-info-5 text-center pb-4 mb-5 pb-lg-0 mb-lg-0">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4 add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-utensils img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Food Courier</h4>
                                <p class="mb-0">
                                    Revolutionizing the way food reaches you – fresh, fast, and flawless.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="icon-info-5 text-center pb-4 mb-5 pb-lg-0 mb-lg-0">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4 add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-money-bill img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Cash Handling</h4>
                                <p class="mb-0">
                                    Secure and swift movement of cash with meticulous precision.
                                </p>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="text-center pb-5 pb-lg-0 mx-md-5 mx-lg-0 mb-5 mb-lg-0">
                        <img src="{{asset('images/middle.jpg')}}" alt="image" class="img-fluid add-animate" data-animated="fadeIn">
                    </div>
                </div>

                <div class="col-lg-4 order-3">

                    <div class="icon-info-5 text-center pb-4 mb-5">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4  add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-tshirt img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Clothing Transport</h4>
                                <p class="mb-0">
                                    Delivering your fashion statements with care, from the boutique to your doorstep.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="icon-info-5 text-center">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4 add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-prescription-bottle img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Pharmaceutical Deliveries</h4>
                                <p class="mb-0">
                                    Ensuring timely and safe transport of medical essentials.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="icon-info-5 text-center">
                        <a class="icon-info-link" href="#">
                            <div class="icon-element d-flex bg-white align-items-center justify-content-center mb-4 add-animate faster" data-animated="zoomIn">
                                <i class="fa fa-gift img-fluid add-animate"
                                   style="font-size: 50px; color: #3491c9;"></i>
                            </div>
                            <div class="icon-info-text px-4 pt-3">
                                <h4 class="font-weight-700 mb-3">Gifts and Parcels</h4>
                                <p class="mb-0">
                                    Every gift we deliver carries your emotions, handled with the utmost respect and care.
                                </p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Contact form -->
    <div style="margin-top: 5%;" id="contact-us">
        <div class="section pb-5 bg-image" style="background-color: #334c76">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="bg-white rounded-ultra shadow-lg px-4 py-5 p-md-5 mt-up100 mb-5">

                            <div class="row my-4">
                                <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
                                    <div class="text-center mt-2 mb-4 my-md-4">
                                        <h2 style="color: #154070;" class="h1 section-title-3 font-weight-800 text-center">
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
                                                    <button style="background-color: #154070;" type="submit"
                                                            class="btn btn-lg btn-round btn-block">Send a
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
