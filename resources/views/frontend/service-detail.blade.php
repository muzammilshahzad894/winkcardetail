@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header', ['breadcrumbContent' => '
<div class="template-header-bottom-page-title">
    <h1>Service Detail</h1>
</div>

<div class="template-header-bottom-page-breadcrumb">
    <a href="' . route('home') . '">Home</a><span class="template-icon-meta-arrow-right-12"></span>Service Detail
</div>
'], ['imgClass' => 'template-header-background-4'])
@endsection

@section('content')
<div class="template-content">

    <!-- Main -->
    <div class="template-section template-main">

        <!-- Layout -->
        <div class="template-content-layout template-content-layout-sidebar-right template-clear-fix">

            <!-- Left column -->
            <div class="template-content-layout-column-left">

                <!-- Header + subheader -->
                <div class="template-component-header-subheader template-align-left">
                    <h2>Exterior Hand Wash</h2>
                    <div></div>
                    <span>Basic car wash package</span>
                </div>

                <!-- Text -->
                <p class="template-padding-reset">
                Our Exterior Hand Wash service provides meticulous care and attention to detail for your vehicle's exterior. Our skilled team uses gentle yet effective techniques to remove dirt, grime, and road contaminants, leaving your car looking refreshed and vibrant. With a focus on preserving your vehicle's paint and finish, our hand wash service ensures a streak-free shine and a flawless appearance. Experience the satisfaction of a professionally cleaned exterior with our Exterior Hand Wash service, designed to enhance and protect your vehicle's aesthetics.
                </p>

                <!-- Image -->
                <div class="template-component-image template-component-image-preloader template-margin-top-1 template-margin-bottom-1" style="background-image: none;">
                    <a href="{{ asset('frontend-assets/media/image/sample/760x506/image_10.jpg') }}" style="opacity: 1;">
                        <img src="{{ asset('frontend-assets/media/image/sample/760x506/image_10.jpg') }}" alt="">
                        <span class="template-component-image-hover"></span>
                    </a>
                </div>

                <!-- Layout 50x50% -->
                <div class="template-layout-50x50">

                    <!-- Left column -->
                    <div class="template-layout-column-left" style="visibility: visible;">

                        <!-- List -->
                        <ul class="template-component-list">
                            <li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
                            <li><span class="template-icon-meta-check"></span>Multiple car wash locations throughout Portland</li>
                            <li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
                            <li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
                            <li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
                        </ul>

                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right" style="visibility: visible;">

                        <!-- List -->
                        <ul class="template-component-list">
                            <li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
                            <li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
                            <li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
                            <li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
                            <li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
                        </ul>

                    </div>

                </div>

                <!-- Header -->
                <div class="template-component-header-subheader template-align-left">
                    <h4>Wash Me</h4>
                    <div></div>
                </div>

                <!-- Text -->
                <p class="template-padding-reset">
                    Restore your vehicle's shine and cleanliness with our expert washing services. Experience the transformation and enjoy a pristine, refreshed look.
                </p>

                <!-- Booking -->
                <div class="template-component-booking template-component-booking-style-2 template-width-768" id="template-booking">
                    <form>
                        <ul>
                            <li>
                                <!-- Content -->
                                <div class="template-component-booking-item-content">
                                    <!-- Vehicle list -->
                                    <ul class="template-component-booking-vehicle-list">
                                        <!-- Vehicle -->
                                        <li data-id="small-car" class="template-state-selected">
                                            <div>
                                                <!-- Name -->
                                                <div>Small Car</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="medium-car">
                                            <div>
                                                <div>Medium Car</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="small-suv">
                                            <div>
                                                <div>Small SUV</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="large-suv">
                                            <div>
                                                <div>Large Suv</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="truck">
                                            <div>
                                                <div>Truck</div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                            </li>

                            <li>

                                <!-- Content -->
                                <div class="template-component-booking-item-content">

                                    <!-- Service list -->
                                    <ul class="template-component-booking-service-list">

                                        <!-- Service -->
                                        <li data-id="exterior-hand-wash" data-id-vehicle-rel="small-car" class="template-clear-fix">

                                            <!-- Name -->
                                            <div class="template-component-booking-service-name">
                                                <span>Exterior Hand Wash</span>
                                            </div>

                                            <!-- Duration -->
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">10</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>

                                            <!-- Price -->
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value"></span>
                                                <span class="template-component-booking-service-price-unit">7</span>
                                                <span class="template-component-booking-service-price-decimal">.95</span>
                                            </div>

                                        </li>

                                        <!-- Service -->
                                        <li data-id="towel-hand-dry" data-id-vehicle-rel="small-car" class="template-clear-fix">
                                            <div class="template-component-booking-service-name">
                                                <span>Towel Hand Dry</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">10</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">5.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="wheel-shine" data-id-vehicle-rel="small-car" class="template-clear-fix">
                                            <div class="template-component-booking-service-name">
                                                <span>Wheel Shine</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">5.00</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="tire-dressing" data-id-vehicle-rel="medium-car" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Tire Dressing</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">2.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="windows-in-and-out" data-id-vehicle-rel="medium-car" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Windows In &amp; Out</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">4.25</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="interior-vacuum" data-id-vehicle-rel="medium-car" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Interior Vacuum</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">4.95</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="trunk-vacuum" data-id-vehicle-rel="small-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Trunk Vacuum</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">3.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="door-shuts-and-plastics" data-id-vehicle-rel="small-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Door Shuts &amp; Plastics</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">4.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="dashboard-clean" data-id-vehicle-rel="small-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Dashboard Clean</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">5.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="air-freshener" data-id-vehicle-rel="large-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Air Freshener</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">0</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">1.50</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="sealer-hand-wax" data-id-vehicle-rel="large-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Sealer Hand Wax</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">0</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">4.95</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="triple-coat-hand-wax" data-id-vehicle-rel="large-suv" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Triple Coat Hand Wax</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">30</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">17.95</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="exterior-vinyl-protectant" data-id-vehicle-rel="truck" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Exterior Vinyl Protectant</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">5.25</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="rain-x-complete" data-id-vehicle-rel="truck" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Rain-X Complete</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">5</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">4.75</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="engine-steam-clean" data-id-vehicle-rel="truck" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Engine Steam Clean</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">30</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">39.95</span>
                                            </div>
                                        </li>

                                        <!-- Service -->
                                        <li data-id="paint-protection" data-id-vehicle-rel="truck" class="template-clear-fix template-state-hidden">
                                            <div class="template-component-booking-service-name">
                                                <span>Paint Protection</span>
                                            </div>
                                            <div class="template-component-booking-service-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-service-duration-value">180</span>
                                                <span class="template-component-booking-service-duration-unit">min</span>
                                            </div>
                                            <div class="template-component-booking-service-price">
                                                <span class="template-icon-booking-meta-price"></span>
                                                <span class="template-component-booking-service-price-currency">$</span>
                                                <span class="template-component-booking-service-price-value">350.00</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </form>

                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $('#template-booking').booking();
                    });
                </script>
            </div>

            <!-- Right column -->
            <div class="template-content-layout-column-right">

                <!-- Widgets list -->
                <ul class="template-widget-list">

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">

                            <!-- Announcement -->
                            <div class="template-component-announcement">
                                <h3>Book Your Wash</h3>
                                <div class="template-component-italic">With our online booking tool</div>
                                <p>Book your car wash online. It's easy and convenient. You can book your car wash from anywhere.</p>
                                <a href="{{ route('booking') }}" class="template-component-button">Book Appointment</a>
                            </div>

                            <!-- Announcement -->
                            <div class="template-component-announcement">
                                <h3>Why Choose Us</h3>
                                <div class="template-component-italic">Learn more about us</div>
                                <p>We operate three car washes throught Portland area. Our goal is to provide our customers with the friendliest service.</p>
                                <a href="{{ route('services') }}" class="template-component-button">Why Choose Us</a>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Our Services</h6>

                            <!-- Services widget -->
                            <div class="template-widget-service">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Exterior Hand Wash</span>
                                            <span class="template-icon-meta-arrow-right-12"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Tower Hand Dry</span>
                                            <span class="template-icon-meta-arrow-right-12"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Tire Dressing</span>
                                            <span class="template-icon-meta-arrow-right-12"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Wheel Shine</span>
                                            <span class="template-icon-meta-arrow-right-12"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Interior Vacuum</span>
                                            <span class="template-icon-meta-arrow-right-12"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Latest Posts</h6>

                            <!-- Latest post widget -->
                            <div class="template-widget-latest-post">
                                <ul>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/sample/100x100/image_07.jpg') }}" alt="">
                                            <span>How to Choose Car Detailing Company</span>
                                            <span class="template-icon-meta-time"><span>April 14, 2017</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/sample/100x100/image_08.jpg') }}" alt="">
                                            <span>Interior Car Wash and Detailing Service</span>
                                            <span class="template-icon-meta-time"><span>March 25, 2017</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/sample/100x100/image_09.jpg') }}" alt="">
                                            <span>How To Book a Car Wash Online</span>
                                            <span class="template-icon-meta-time"><span>March 05, 2017</span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Text Widget</h6>

                            <!-- Text widget -->
                            <div class="template-widget-text">
                                <p class="template-padding-reset">
                                    Primus elit lectus at felis malesuada node ultricies forte uno ligula sande. Porta an urna vestibulum commodo convallis laoreet enim.
                                </p>
                                <ul class="template-component-list template-margin-top-2">
                                    <li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
                                    <li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
                                    <li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
                                </ul>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>

        </div>

    </div>

</div>
@endsection