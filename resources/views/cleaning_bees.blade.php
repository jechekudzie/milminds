@extends('layouts.cleaning_bees')

@section('title', 'Cleaning Bees')

@section('content')
    <!-- Hero banner -->
    <div class="d-flex flex-column w-100">
        <div class="page-header-block-height d-flex align-items-center bg-image py-5"
             data-img-src="{{asset('images/cleaning_services2.jpg')}}">
            <div class="container">
                <div class="row py-5">

                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center mb-5">
                        <div class="add-animate" data-animated="fadeIn">
                            <h1 style="color: white;font-weight: bolder;" class="display-4 {{--text-white--}} {{--font-weight-800--}} text-uppercase mb-3">
                                Where Cleanliness <br/>
                                & <br/>
                                Comfort Converge
                            </h1>
                            <div
                                style="background-color: #ffdc1d;color: #154070;font-size: large;text-align: center;text-transform: capitalize;font-weight: bolder"
                                class="lead-sm">
                                Immerse yourself in an environment where every corner sparkles, and every sweep brings a
                                sense of excellence to your space.
                            </div>
                        </div>
                    </div>

                    <div class="w-100 mb-4"></div>

                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-12 offset-xl-0">
                        <div style="background-color: #154070;" class="form-box {{--bg-indigo--}} rounded-xl shadow-lg">
                            <form class="form-light-2">
                                <div class="row">

                                    <div class="col-xl-3 mb-4 mb-xl-0">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-inner">
                                                <div class="input-group-prepend border-left-0">
                                                    <span class="input-group-text input-group-icon bg-transparent"><i
                                                            class="fas fa-mobile"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg pl-0"
                                                       placeholder="Enter Mobile Number">
                                                <div
                                                    class="input-focus-bg rounded-0 shadow-none border-top-0 border-right-0 border-left-0"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 mb-4 mb-xl-0">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-inner">
                                                <div class="input-group-prepend border-left-0">
                                                    <span class="input-group-text input-group-icon bg-transparent"><i
                                                            class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg pl-0"
                                                       placeholder="What's your address?">
                                                <div
                                                    class="input-focus-bg rounded-0 shadow-none border-top-0 border-right-0 border-left-0"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 mb-4 mb-xl-0">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-inner">
                                                <div class="input-group-prepend border-left-0">
                                                    <span class="input-group-text input-group-icon bg-transparent"><i
                                                            class="fas fa-layer-group"></i></span>
                                                </div>
                                                <select class="custom-select custom-select-lg pl-0">
                                                    <option selected>Choose service category</option>
                                                    <option value="Residential cleaning">Residential cleaning</option>
                                                    <option value="Commercial cleaning">Commercial cleaning</option>
                                                    <option value="Cleaning Chemical Manufacturing">Cleaning Chemical
                                                        Manufacturing
                                                    </option>
                                                    <option value="Landscaping and Property Maintenance">Landscaping and
                                                        Property Maintenance
                                                    </option>
                                                    <option value="Specialty Services">Specialty Services</option>
                                                    <option value="Pest Control">Pest Control</option>
                                                    <option value="Renovation Services">Renovation Services</option>
                                                    <option value="Florist Services">Florist Services</option>
                                                    <option value="Gardener Services and Placements">Gardener Services
                                                        and Placements
                                                    </option>

                                                </select>
                                                <div
                                                    class="input-focus-bg rounded-0 shadow-none border-top-0 border-right-0 border-left-0"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 pt-3 pt-xl-0">
                                        <button style="background-color: #ffdc1d" type="submit"
                                                class="btn btn-block btn-lg btn-round {{--btn-dark-gray--}} mb-xl-0">
                                            Book With Us
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- About Us section -->
    <div id="about" class="section py-5">
        <div class="container">
            <div class="row align-items-center my-5">

                <div class="col-lg-8">
                    <div class="pr-lg-5 mb-5 mb-lg-0">

                        <h5 class="font-weight-400">Cleaning Bees Services</h5>

                        <div data-height="3px"></div>

                        <h2 style="color: #154070;" class="h1 section-title-4 text-left font-weight-800 mb-4">
                            About Us
                            <div class="title-divider-round"></div>
                        </h2>
                        <div class="lead-sm pt-2 mb-5">
                            Guardians of cleanliness, Cleaning Bees takes pride as a vibrant subsidiary of Mil-Minds
                            Holdings, committed to delivering exceptional cleaning services throughout Zimbabwe. We are
                            the architects of pristine environments, catering to the dynamic needs of commercial
                            establishments as well as the tranquility of residential homes.
                        </div>

                        <h5 class="font-weight-400">Our Vision</h5>
                        <div class="lead-sm pt-2 mb-5">
                            To be Zimbabwe's beacon of brilliance in the cleaning industry, synonymous with innovation,
                            quality, and immaculate service."
                            We aspire to set the standard for the cleaning industry in Zimbabwe, becoming a household
                            name that is equivalent to excellence and innovation.
                        </div>

                        <h5 class="font-weight-400">Our Mission</h5>
                        <div class="lead-sm pt-2 mb-5">
                            To catalyze business and personal growth through unparalleled cleaning solutions.
                            Our mission is to empower our clients by providing superior cleaning services that
                            contribute to their growth and success.
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row mb-5 my-lg-4">

                        <div class="icon-info-1 pb-2 mb-4">
                            <a class="icon-info-link" href="#">
                                <div class="icon-element">
                                    <i class="fa fa-hands-helping img-fluid add-animate"
                                       style="font-size: 50px; color: #154070;"></i>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h6 class="font-weight-700">Teamwork</h6>
                                    <p>
                                        Collaborating for the collective success of our clients and our team.
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="icon-info-1 pb-2 mb-4">
                            <a class="icon-info-link" href="#">
                                <div class="icon-element">
                                    <i class="fa fa-award img-fluid add-animate"
                                       style="font-size: 50px; color: #154070;"></i>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h6 class="font-weight-700">Commitment</h6>
                                    <p>
                                        Dedication to delivering consistent, high-quality results.
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="icon-info-1  mb-4">
                            <a class="icon-info-link" href="#">
                                <div class="icon-element">
                                    <i class="fa fa-tools img-fluid add-animate"
                                       style="font-size: 50px; color: #154070;"></i>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h6 class="font-weight-700">Hard work</h6>
                                    <p>
                                        A robust work ethic that ensures thoroughness and attention to detail.
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="icon-info-1  mb-4">
                            <a class="icon-info-link" href="#">
                                <div class="icon-element">
                                    <i class="fa fa-balance-scale img-fluid add-animate"
                                       style="font-size: 50px; color: #154070;"></i>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h6 class="font-weight-700">Integrity</h6>
                                    <p>
                                        Conducting our business with honesty and moral uprightness.
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="icon-info-1  mb-4">
                            <a class="icon-info-link" href="#">
                                <div class="icon-element">
                                    <i class="fa fa-spray-can img-fluid add-animate"
                                       style="font-size: 50px; color: #154070;"></i>
                                </div>
                                <div class="icon-info-text pl-4">
                                    <h6 class="font-weight-700">Cleanliness</h6>
                                    <p>
                                        Upholding the highest standards of cleanliness as the cornerstone of our
                                        service.
                                    </p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Our Services section -->
    <div id="services" class="section bg-light py-5">
        <div class="container">

            <div class="row my-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center">

                        <h3 style="color: #154070" class="font-weight-400">Cleaning Bees</h3>

                        <div data-height="3px"></div>

                        <h2 style="color: #154070" class="h1 section-title-4 font-weight-800">
                            Our Great Services
                            <div class="title-divider-round"></div>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row mb-5">

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-home img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Residential Cleaning</h6>
                            <div class="pb-2">
                                <!-- Button -->
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Residential">Read More
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Residential" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Residential Cleaning
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Craft a sanctuary of cleanliness with our tailored home
                                                                cleaning services, designed for your comfort and
                                                                well-being.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-building img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Commercial Cleaning</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Commercial">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Commercial" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Commercial Cleaning
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Present a professional image with our comprehensive
                                                                cleaning services, customized for business environments
                                                                of any scale.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-flask img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Cleaning Chemical Manufacturing</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Chemical">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Chemical" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Cleaning Chemical Manufacturing
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Choose sustainability with our range of eco-friendly and
                                                                effective cleaning products, created with your health
                                                                and the environment in mind.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-tree img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Landscaping and Property Maintenance</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Landscaping">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Landscaping" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Landscaping and Property Maintenance
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Elevate the aesthetic of your outdoor areas with our
                                                                expert landscaping and diligent property maintenance
                                                                services.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-cogs img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Specialty Services</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Specialty">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Specialty" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Speciality Services
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Address your unique cleaning challenges with our
                                                                specialized solutions, including meticulous
                                                                post-construction clean-ups and thorough event
                                                                preparation.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-bug img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Pest Control</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Pest">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Pest" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Pest Control
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Maintain a hygienic, pest-free environment with our
                                                                effective pest management solutions.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-paint-roller img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Renovation Services</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Renovation">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Renovation" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Renovation Services
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Revitalize your space with our transformative painting,
                                                                tiling, and carpeting services.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-seedling img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Florist Services</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Florist">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Florist" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Forist Services
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Beautify your spaces with stunning floral arrangements
                                                                from our talented in-house florists.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

                <div style="background-color: #ffdc1d" class="col-md-4 col-lg-4">
                    <div class="text-reset">
                        <div class="bg-white text-center rounded-xl shadow-sm p-4">
                            <div class="py-4 mt-2">
                                <i class="fa fa-leaf img-fluid add-animate"
                                   style="font-size: 50px; color: #154070;"></i>
                            </div>
                            <h6 class="font-weight-700">Gardener Services and Placements</h6>
                            <div class="pb-2">
                                <button style="background-color: #154070;color: #ffdc1d;" type="button"
                                        class="btn btn-round btn-sm " data-toggle="modal"
                                        data-target="#Gardener">Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Gardener" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content rounded-xl">
                                <div class="modal-body p-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>

                                    <div class="px-4 px-md-5 py-5">
                                        <div class="px-lg-2 pt-2 pb-4 pt-md-4 pb-md-5">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-1">
                                                    <div class="px-lg-4 text-center">

                                                        <i class="fa fa-home img-fluid add-animate"
                                                           style="font-size: 50px;background-color: black; color: black;">
                                                        </i>

                                                        <h2 style="color: black;"
                                                            class="section-title-4 title-light-2 text-center font-weight-700 py-2 mb-4">
                                                            Gardener Services and Placements
                                                            <div class="title-divider-round"></div>
                                                        </h2>

                                                        <div class="py-1 text-white-75">
                                                            <p style="color: black; font-size: 18px;">
                                                                Keep your gardens lush and vibrant with our professional
                                                                gardening services.
                                                            </p>
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
                    <div data-height="30px"></div>
                </div>

            </div>

        </div>
    </div>

    <!--why-choose-us section -->
    <div id="why-choose-us" class="section py-5 bg-image"
         data-img-src="{{asset('images/cleaning_services.jpg')}}">
        <div class="container">

            <div class="row my-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center">

                        <h5 style="color: #154070;" class="font-weight-400 {{--text-white-75--}}">Cleaning Bees</h5>

                        <div data-height="3px"></div>

                        <h2  style="color: #154070;" class="h1 section-title-4 title-light-1 font-weight-800">
                            Why Choose Us
                            <div class="title-divider-round"></div>
                        </h2>

                        <p style="color: #154070;font-size: 18px;background-color: #ffdc1d;">
                            With a team that is both professional and technically skilled, we pledge to enhance the
                            hygiene and comfort of our clients' environments. At Cleaning Bees, excellence isn't
                            just an aspiration; it's a standard we live by every day.
                        </p>

                        <h2 style="color: #154070;" class="h1 section-title-4 title-light-1 font-weight-800">
                            Our Team
                            <div class="title-divider-round"></div>
                        </h2>

                        <p style="color: #154070;font-size: 18px;background-color: #ffdc1d;">
                            Get acquainted with our passionate leaders, Tariro Samantha Guma and Marshall Tinashe
                            Guma, who guide Cleaning Bees with their extensive expertise and commitment to ethical
                            standards in the industry.
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--Call to action section -->
    <div id="call-to-action" class="section py-5">
        <div class="container">

            <div class="row pb-4 mb-5">
                <div class="col">

                    <!-- Timeline default -->
                    <div class="timeline-wrapper">
                        <div class="timeline-container">

                            <!-- Timeline block -->
                            <div style="background-color: #154070" class="timeline-block d-flex">
                                <div class="timeline-content rounded shadow-sm p-4 p-md-5 animated fadeInLeft"
                                     data-animated="fadeInLeft">
                                    <h4 class="font-weight-700 mt-2 mt-md-0 mb-4">Time to action.</h4>
                                    <div class="pb-2 pb-md-4">
                                        <p>
                                            Are you ready to elevate your standard of cleanliness? Reach out to us,
                                            and let Cleaning Bees orchestrate the perfect ambiance of purity and
                                            comfort for you.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!-- Timeline block -->
                            <div style="background-color: #ffdc1d" class="timeline-block d-flex">

                                <div class="timeline-content rounded shadow-sm p-4 p-md-5 animated fadeInRight"
                                     data-animated="fadeInRight">
                                    <h4 class="font-weight-700 mt-2 mt-md-0 mb-4">Book your clean</h4>
                                    <div class="pb-2 pb-md-4">
                                        <p>
                                            Embark on a journey to a cleaner, more serene tomorrow. Reserve your
                                            service with Cleaning Bees today and embrace a lifestyle where
                                            cleanliness harmonizes with ease and comfort.
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- Contact form -->
    <div style="margin-top: 5%;" id="contact-us">
        <div class="section pb-5 bg-image" style="background-color: #154070">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="bg-white rounded-ultra shadow-lg px-4 py-5 p-md-5 mt-up100 mb-5">

                            <div class="row my-4">
                                <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
                                    <div class="text-center mt-2 mb-4 my-md-4">
                                        <h2 style="color: #154070;"
                                            class="h1 section-title-3 font-weight-800 text-center">
                                            Contact Us
                                        </h2>
                                        <p style="color: black;font-size: 18px;">
                                            Step into a world where every detail is a testament to ultimate
                                            cleanliness. Explore our services and let us craft a bespoke cleaning
                                            strategy for you.
                                        </p>
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
