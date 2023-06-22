@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.index-header')
@endsection

@section('content')
<!-- Section -->
<div class="template-section template-section-padding-1 template-clear-fix template-main">

    <!-- Header + subheader -->
    <div class="template-component-header-subheader">
        <h2>Who Is Wink Car Detailing</h2>
        <div></div>
        <span>Car wash &amp; detailling service</span>
    </div>

    <!-- Layout 33x66% -->
    <div class="template-layout-33x66 template-clear-fix">

        <!-- Left column -->
        <div class="template-layout-column-left">
            <img src="{{ asset('frontend-assets/media/image/sample/460x678/image_01.jpg') }}" alt="" />
        </div>

        <!-- Right column -->
        <div class="template-layout-column-right">

            <!-- Text -->
            <p class="template-padding-reset">
                Wink Car Detailing Hand Wash is an eco-friendly, hand car wash and detailing service based in Portland.
                Our company was founded back in 2005 by a team of experts with more then 10 years of professional car wash experience.
                We operate three car washes throught Portland area. Our goal is to provide our customers with the friendliest, most convenient
                hand car wash experience possible. We use the most modern and up-to-date water reclamation modules as a part of our car wash systems.
                Our products are all biodegradable and eco-friendly.
            </p>

            <!-- Feature list -->
            <div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">

                <!-- Layout 50x50% -->
                <ul class="template-layout-50x50 template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left template-margin-bottom-reset">
                        <div class="template-component-space template-component-space-2"></div>
                        <span class="template-icon-feature-water-drop"></span>
                        <h5>The Best Car Wash</h5>
                        <ul class="template-component-list">
                            <li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
                            <li><span class="template-icon-meta-check"></span>Multiple car wash locations throughout Portland</li>
                            <li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
                            <li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
                            <li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
                        </ul>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right template-margin-bottom-reset">
                        <div class="template-component-space template-component-space-2"></div>
                        <span class="template-icon-feature-user-chat"></span>
                        <h5>Contacting Us</h5>
                        <ul class="template-component-list">
                            <li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
                            <li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
                            <li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
                            <li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
                            <li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
                        </ul>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- Section -->
<div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">

    <!-- Call to action -->
    <div class="template-component-call-to-action">
        <div class="template-main">
            <h3>No 1. Car Wash Booking System</h3>
            <a href="{{ route('booking') }}" class="template-component-button">Book Appointment</a>
        </div>
    </div>

</div>

<!-- Section -->
<div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">

    <!-- Mian -->
    <div class="template-main">

        <!-- Header + subheader -->
        <div class="template-component-header-subheader">
            <h2>Our Process</h2>
            <div></div>
            <span>We know your time is valuable</span>
        </div>

        <!-- Space -->
        <div class="template-component-space template-component-space-1"></div>

        <!-- Process list -->
        <div class="template-component-process-list template-clear-fix">

            <!-- Layout 25x25x25x25% -->
            <ul class="template-layout-25x25x25x25 template-clear-fix template-layout-margin-reset">

                <!-- Left column -->
                <li class="template-layout-column-left">
                    <span class="template-icon-feature-check"></span>
                    <h5>1. Booking</h5>
                    <span class="template-icon-meta-arrow-large-rl"></span>
                </li>

                <!-- Center left column -->
                <li class="template-layout-column-center-left">
                    <span class="template-icon-feature-car-check"></span>
                    <h5>2. Inspection</h5>
                    <span class="template-icon-meta-arrow-large-rl"></span>
                </li>

                <!-- Center right column -->
                <li class="template-layout-column-center-right">
                    <span class="template-icon-feature-payment"></span>
                    <h5>3. Valuation</h5>
                    <span class="template-icon-meta-arrow-large-rl"></span>
                </li>

                <!-- Right column -->
                <li class="template-layout-column-right">
                    <span class="template-icon-feature-vacuum-cleaner"></span>
                    <h5>4. Completion</h5>
                </li>

            </ul>

        </div>

    </div>


</div>

<!-- Section -->
<div class="template-section template-section-padding-1 template-clear-fix template-main">

    <!-- Header + subheader -->
    <div class="template-component-header-subheader">
        <h2>Wash Packages</h2>
        <div></div>
        <span>Which wash is the best for your vehicle?</span>
    </div>

    <!-- Booking -->
    <div class="template-component-booking" id="template-booking">

        <form>

            <ul>


                <li>

                    <!-- Content -->
                    <div class="template-component-booking-item-content">

                        <!-- Vehicle list -->
                        <ul class="template-component-booking-vehicle-list">

                            <!-- Vehicle -->
                            <li data-id="regular-size-car">

                                <div>

                                    <!-- Icon -->
                                    <div class="template-icon-vehicle-small-car"></div>

                                    <!-- Name -->
                                    <div>Regular Size Car</div>

                                </div>

                            </li>

                            <!-- Vehicle -->
                            <li data-id="medium-size-car">
                                <div>
                                    <div class="template-icon-vehicle-car-mid-size"></div>
                                    <div>Medium Size Car</div>
                                </div>
                            </li>

                            <!-- Vehicle -->
                            <li data-id="compact-suv">
                                <div>
                                    <div class="template-icon-vehicle-suv"></div>
                                    <div>Compact SUV</div>
                                </div>
                            </li>

                            <!-- Vehicle -->
                            <li data-id="minivan">
                                <div>
                                    <div class="template-icon-vehicle-minivan"></div>
                                    <div>Minivan</div>
                                </div>
                            </li>

                            <!-- Vehicle -->
                            <li data-id="pickup-truck">
                                <div>
                                    <div class="template-icon-vehicle-pickup"></div>
                                    <div>Pickup Truck</div>
                                </div>
                            </li>

                            <!-- Vehicle -->
                            <li data-id="cargo-truck">
                                <div>
                                    <div class="template-icon-vehicle-truck-mid-size"></div>
                                    <div>Cargo Truck</div>
                                </div>
                            </li>

                        </ul>

                    </div>

                </li>

                <li>

                    <!-- Content -->
                    <div class="template-component-booking-item-content">

                        <!-- Package list -->
                        <ul class="template-component-booking-package-list">

                            <!-- Package -->
                            <li data-id="basic-hand-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">

                                <!-- Header -->
                                <h4 class="template-component-booking-package-name">Basic Hand Wash</h4>

                                <!-- Price -->
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">15</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>

                                <!-- Duration -->
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">25</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>

                                <!-- Services -->
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                </ul>

                                <!-- Button -->
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>

                            </li>

                            <!-- Package -->
                            <li data-id="basic-hand-wash-2" data-id-vehicle-rel="medium-size-car">

                                <!-- Header -->
                                <h4 class="template-component-booking-package-name">Basic Hand Wash</h4>

                                <!-- Price -->
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">17</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>

                                <!-- Duration -->
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">30</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>

                                <!-- Services -->
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                </ul>

                                <!-- Button -->
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>

                            </li>

                            <!-- Package -->
                            <li data-id="deluxe-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">
                                <h4 class="template-component-booking-package-name">Deluxe Wash</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">27</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">45</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>
                            </li>

                            <!-- Package -->
                            <li data-id="deluxe-wash-2" data-id-vehicle-rel="medium-size-car">
                                <h4 class="template-component-booking-package-name">Deluxe Wash</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">30</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">55</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>
                            </li>

                            <!-- Package -->
                            <li data-id="ultimate-shine-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan">
                                <h4 class="template-component-booking-package-name">Ultimate Shine</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">40</span>
                                    <span class="template-component-booking-package-price-decimal">45</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">60</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                    <li data-id="interior-vacuum">Interior Vacuum</li>
                                    <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                    <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                    <li data-id="dashboard-clean">Dashboard Clean</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>
                            </li>

                            <!-- Package -->
                            <li data-id="ultimate-shine-2" data-id-vehicle-rel="medium-size-car">
                                <h4 class="template-component-booking-package-name">Ultimate Shine</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">52</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">80</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                    <li data-id="interior-vacuum">Interior Vacuum</li>
                                    <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                    <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                    <li data-id="dashboard-clean">Dashboard Clean</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>
                            </li>

                            <!-- Package -->
                            <li data-id="platinium-works-1" data-id-vehicle-rel="regular-size-car">
                                <h4 class="template-component-booking-package-name">Platinum Works</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">65</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">100</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                    <li data-id="interior-vacuum">Interior Vacuum</li>
                                    <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                    <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                    <li data-id="dashboard-clean">Dashboard Clean</li>
                                    <li data-id="air-freshener">Air Freshener</li>
                                    <li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
                                    <li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
                                </div>
                            </li>

                            <!-- Package -->
                            <li data-id="platinium-works-2" data-id-vehicle-rel="medium-size-car">
                                <h4 class="template-component-booking-package-name">Platinum Works</h4>
                                <div class="template-component-booking-package-price">
                                    <span class="template-component-booking-package-price-currency">$</span>
                                    <span class="template-component-booking-package-price-total">82</span>
                                    <span class="template-component-booking-package-price-decimal">95</span>
                                </div>
                                <div class="template-component-booking-package-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-package-duration-value">125</span>
                                    <span class="template-component-booking-package-duration-unit">min</span>
                                </div>
                                <ul class="template-component-booking-package-service-list">
                                    <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                    <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                    <li data-id="wheel-shine">Wheel Shine</li>
                                    <li data-id="tire-dressing">Tire Dressing</li>
                                    <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                    <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                    <li data-id="interior-vacuum">Interior Vacuum</li>
                                    <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                    <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                    <li data-id="dashboard-clean">Dashboard Clean</li>
                                    <li data-id="air-freshener">Air Freshener</li>
                                    <li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
                                    <li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
                                </ul>
                                <div class="template-component-button-box">
                                    <a href="{{ route('booking') }}" class="template-component-button">Book Now</a>
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

<!-- Section -->
<div class="template-section template-section-padding-reset template-clear-fix">

    <!-- Flex layout 50x50% -->
    <div class="template-layout-flex template-background-color-1 template-clear-fix">

        <!-- Left column -->
        <div class="template-background-image template-background-image-1"></div>

        <!-- Right column -->
        <div class="template-section-padding-1">

            <!-- Features list -->
            <div class="template-component-feature-list template-component-feature-list-position-top">

                <!-- Layout 50x50% -->
                <ul class="template-layout-50x50 template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left">
                        <span class="template-icon-feature-location-map"></span>
                        <h5>Convenience</h5>
                        <p>We are dedicated to providing quality service, customer satisfaction at a great value in multiple locations offering convenient hours.</p>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right">
                        <span class="template-icon-feature-eco-nature"></span>
                        <h5>Organic products</h5>
                        <p>Our products are eco-friendly and interior products are all organic. We use less than a gallon of water with absolutely zero-waste.</p>
                    </li>

                    <!-- Left column -->
                    <li class="template-layout-column-left">
                        <span class="template-icon-feature-team"></span>
                        <h5>Experienced Team</h5>
                        <p>Our crew members are all trained and skilled and fully equiped with equipment and supplies needed that we can deliver the best results.</p>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right">
                        <span class="template-icon-feature-spray-bottle"></span>
                        <h5>Great Value</h5>
                        <p>We offer multiple services at a great value to meet your needs. We offer a premium service while saving your time and money.</p>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- Section -->
<div class="template-section template-clear-fix template-main">

    <!-- Header + subheader -->
    <div class="template-component-header-subheader">
        <h2>Latest Projects</h2>
        <div></div>
        <span>Car wash gallery</span>
    </div>


    <!-- Gallery -->
    <div class="template-component-gallery">

        <!-- Filter buttons list -->
        <ul class="template-component-gallery-filter-list">
            <li><a href="#" class="template-filter-all template-state-selected">All</a></li>
            <li><a href="#" class="template-filter-hand-wash">Hand Wash</a></li>
            <li><a href="#" class="template-filter-auto-detail">Auto Detail</a></li>
            <li><a href="#" class="template-filter-triple-foam">Triple Foam</a></li>
            <li><a href="#" class="template-filter-hand-polish">Hand Polish</a></li>
            <li><a href="#" class="template-filter-hand-wax">Hand Wax</a></li>
        </ul>

        <!-- Images list -->
        <ul class="template-component-gallery-image-list">

            <!-- Image -->
            <li class="template-filter-hand-wash">

                <div class="template-component-image template-component-image-preloader">

                    <!-- Orginal image -->
                    <a href="{{ asset('frontend-assets/media/image/sample/460x678/image_01.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">

                        <!-- Thumbnail -->
                        <img src="{{ asset('frontend-assets/media/image/sample/460x678/image_01.jpg') }}" alt="" />

                        <!-- Image hover -->
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">BMW i3</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Triple Foam</span>
                                </span>
                            </span>
                        </span>

                    </a>

                    <!-- Fancybox description -->
                    <div class="template-component-image-description">
                        The BMW i3 is a revolutionary electric vehicle that combines sustainability, innovation, and style in one package. With its sleek design, advanced technology, and impressive range, the BMW i3 offers a driving experience that is both eco-friendly and exhilarating. Embrace the future of mobility with the BMW i3 and discover a new level of driving pleasure.
                    </div>

                </div>

            </li>

            <!-- Image -->
            <li class="template-filter-auto-detail template-filter-triple-foam">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/460x306/image_01.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_01.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">Renault Clio</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Hand Polish</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The Renault Clio - A perfect blend of style and performance in a compact package. With its sleek design and modern features, the Renault Clio offers a dynamic driving experience. Enjoy the comfort and efficiency of its advanced engine options, making every journey a pleasure. Whether you're cruising through the city or hitting the open road, the Renault Clio delivers a balance of practicality and style that sets it apart. Experience the joy of driving with the Renault Clio, a compact car that exceeds expectations.
                    </div>
                </div>
            </li>

            <!-- Image -->
            <li class="template-filter-hand-wash template-filter-auto-detail template-filter-hand-wax">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/460x306/image_02.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_02.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">Volkswagen Polo</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Interior Dusting</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The Volkswagen Polo is a compact car that exudes style and versatility. With its sleek design and advanced features, the Polo offers a delightful driving experience, combining comfort and performance effortlessly. Engineered with precision and built to last, the Polo strikes the perfect balance between elegance and practicality. Whether navigating city streets or embarking on open highways, the Volkswagen Polo delivers a dynamic ride that is sure to leave a lasting impression. Experience the epitome of automotive excellence with the Volkswagen Polo, a car that exceeds expectations in every way.
                    </div>
                </div>
            </li>

            <!-- Image -->
            <li class="template-component-gallery-image-list-width-2 template-filter-hand-wash template-filter-triple-foam">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/760x506/image_06.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/760x506/image_06.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">Fiat Bravo</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Cleaning Waterless Wash &amp; Wax with Carnauba</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The Fiat Bravo is a stylish and dynamic compact car that commands attention on the road. With its striking design and sporty aesthetics, the Bravo exudes confidence and flair. Equipped with advanced features and cutting-edge technology, it offers a thrilling driving experience with optimal performance. The Bravo's spacious interior ensures comfort for both driver and passengers, making every journey a pleasurable one. Embrace the spirit of Italian automotive excellence with the Fiat Bravo, a car that combines style, functionality, and driving pleasure in a captivating package.
                    </div>
                </div>
            </li>

            <!-- Image -->
            <li class="template-filter-triple-foam template-filter-hand-polish">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/460x678/image_03.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/460x678/image_03.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">BMW Mini Cooper</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Wheel Shine</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The BMW Mini Cooper is an iconic and spirited compact car that packs a punch. With its distinctive design and compact size, the Mini Cooper turns heads wherever it goes. Its agile handling and responsive performance make it a joy to drive, whether you're navigating city streets or embarking on thrilling adventures. The Mini Cooper's stylish interior offers a blend of retro charm and modern features, ensuring a comfortable and enjoyable driving experience. Experience the legendary fun and personality of the BMW Mini Cooper, a car that stands out from the crowd with its timeless appeal.
                    </div>
                </div>
            </li>

            <!-- Image -->
            <li class="template-filter-auto-detail template-filter-hand-polish">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/460x306/image_04.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_04.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">Mazda 3</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Scratch Repair</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The Mazda 3 is a sleek and dynamic compact car that embodies elegance and performance. With its eye-catching design and sculpted lines, the Mazda 3 commands attention on the road. Equipped with advanced Skyactiv technology, it delivers responsive handling and exceptional fuel efficiency. The Mazda 3's refined interior offers a comfortable and luxurious driving experience, complemented by intuitive infotainment features. Whether cruising on highways or navigating city streets, the Mazda 3 provides a thrilling and engaging ride.
                    </div>
                </div>
            </li>

            <!-- Image -->
            <li class="template-filter-triple-foam template-filter-hand-polish template-filter-hand-wax">
                <div class="template-component-image template-component-image-preloader">
                    <a href="{{ asset('frontend-assets/media/image/sample/460x306/image_10.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                        <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_10.jpg') }}" alt="" />
                        <span class="template-component-image-hover">
                            <span>
                                <span>
                                    <span class="template-component-image-hover-header">Mercedes A200</span>
                                    <span class="template-component-image-hover-divider"></span>
                                    <span class="template-component-image-hover-subheader">Hazy Headlights Restoring</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="template-component-image-description">
                        The Mercedes A200 is a symbol of luxury and sophistication in the compact car segment. With its sleek and aerodynamic design, the A200 exudes elegance and modernity. The meticulously crafted interior offers refined comfort and cutting-edge technology, creating a truly premium driving experience. Equipped with powerful yet efficient engines, the A200 delivers impressive performance and dynamic handling. Whether you're cruising on the open highway or navigating urban streets, the Mercedes A200 ensures a smooth and exhilarating ride. Embrace the epitome of luxury and performance with the Mercedes A200, a car that redefines compact luxury.
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Section -->
<div class="template-section template-section-padding-reset template-clear-fix">

    <!-- Flex layout 50x50% -->
    <div class="template-layout-flex template-clear-fix template-background-color-1">

        <!-- Left column -->
        <div>

            <!-- Header + subheader -->
            <div class="template-component-header-subheader">
                <h2>Testimonials</h2>
                <div></div>
                <span>Our customers love us</span>
            </div>

            <!-- Space -->
            <div class="template-component-space template-component-space-2"></div>

            <!-- Testimonials list -->
            <div class="template-component-testimonial-list template-clear-fix">

                <!-- Content -->
                <ul class="template-clear-fix">
                    <li>
                        <p>I could not be happier with the job you did on my car. It looks great. Thank you for your great service and I will continue to refer friends and family to you all.</p>
                        <h6>Dotti Newman</h6>
                        <span>Audi Q5</span>
                    </li>
                    <li>
                        <p>I think Wink Car Detailing is the best car washers ever. Love the price, convenience and customer service. Thanks so much! My car looks like new. I will definitely come again.</p>
                        <h6>David Magnus</h6>
                        <span>Nissan Titan X5</span>
                    </li>
                    <li>
                        <p>Finally a car wash that does pay attention to the detail. I have a little extra time and money and I let them do the full detail and it always has turned out great.</p>
                        <h6>Josh Williams</h6>
                        <span>Toyota Avensis</span>
                    </li>
                </ul>

                <!-- Navigation -->
                <div class="template-component-testimonial-list-navigation">
                    <a href="#" class="template-component-testimonial-list-navigation-left template-icon-meta-arrow-large-rl"></a>
                    <span class="template-component-testimonial-list-navigation-center template-icon-feature-testimonials"></span>
                    <a href="#" class="template-component-testimonial-list-navigation-right template-icon-meta-arrow-large-rl"></a>
                </div>

            </div>

        </div>

        <!-- Right column -->
        <div class="template-background-image template-background-image-2 template-color-white">

            <!-- Header + subheader -->
            <div class="template-component-header-subheader">
                <h2>Recent News</h2>
                <div></div>
                <span>Recent from the blog</span>
            </div>

            <!-- Recent posts list -->
            <ul class="template-component-recent-post">
                <li>
                    <a href="{{ route('blog-post') }}">
                        <span>How to choose car detailing company</span>
                        <span>April 14, 2015</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog-post') }}">
                        <span>Interior car wash and detailing service</span>
                        <span>March 25, 2015</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog-post') }}">
                        <span>How to book a car wash online</span>
                        <span>March 05, 2015</span>
                    </a>
                </li>
            </ul>

        </div>

    </div>

</div>

<!-- Section -->
<div class="template-section template-section-padding-1 template-clear-fix template-main">

    <!-- Features list -->
    <div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">

        <!-- Layout 33x33x33% -->
        <ul class="template-layout-33x33x33 template-clear-fix">

            <!-- Left column -->
            <li class="template-layout-column-left">
                <span class="template-icon-feature-phone-circle"></span>
                <h5>Call Us At</h5>
                <p>
                    (+505) 122 225 225<br />
                    (+505) 122 225 224<br />
                </p>
            </li>

            <!-- Center column -->
            <li class="template-layout-column-center">
                <span class="template-icon-feature-location-map"></span>
                <h5>Our Address</h5>
                <p>
                    464 Rhode Island Av.<br />
                    Portland, OR 97219
                </p>
            </li>

            <!-- Right column -->
            <li class="template-layout-column-right">
                <span class="template-icon-feature-clock"></span>
                <h5>Working hours</h5>
                <p>
                    Monday - Friday: 8 am - 6 pm<br />
                    Saturday: 8 am - 3 pm
                </p>
            </li>

        </ul>
    </div>

</div>
@endsection