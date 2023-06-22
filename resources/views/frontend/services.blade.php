@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header', ['breadcrumbContent' => '
<div class="template-header-bottom-page-title">
    <h1>Our Services</h1>
</div>

<div class="template-header-bottom-page-breadcrumb">
    <a href="' . route('home') . '">Home</a><span class="template-icon-meta-arrow-right-12"></span>Our Services
</div>
'], ['imgClass' => 'template-header-background-3'])
@endsection

@section('content')
<div class="template-section template-section-padding-1 template-clear-fix template-main">

    <!-- Header + subheader -->
    <div class="template-component-header-subheader">
        <h2>Our Services</h2>
        <div></div>
        <span>Save time and money</span>
    </div>

    <!-- Text -->
    <div class="template-align-center">
        <p>
            We are dedicated to providing quality service, customer satisfaction at a great value in multiple locations offering convenient hours.<br>
            Our goal is to provide our customers with the friendliest, most convenient hand car wash experience possible.
        </p>
    </div>

    <!-- Space -->
    <div class="template-component-space template-component-space-2"></div>

    <!--- Layout 33x33x33% -->
    <ul class="template-layout-33x33x33 template-clear-fix">

        <!-- Left column -->
        <li class="template-layout-column-left" style="visibility: visible;">
            <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                <a href="{{ route('service.detail') }}" style="opacity: 1;">
                    <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_05.jpg') }}" alt="">
                    <span class="template-component-image-hover"></span>
                </a>
            </div>
            <h5 class="template-margin-top-2">
                <a href="{{ route('service.detail') }}">
                    Exterior Hand Wash
                </a>
            </h5>
            <p class="template-padding-reset">Revitalize your vehicle with our Exterior Hand Wash service. Meticulously clean, restore shine, and protect your car's finish. Experience the ultimate car care today!</p>
        </li>

        <!-- Center column -->
        <li class="template-layout-column-center" style="visibility: visible;">
            <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                <a href="{{ route('service.detail') }}" style="opacity: 1;">
                    <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_06.jpg') }}" alt="">
                    <span class="template-component-image-hover"></span>
                </a>
            </div>
            <h5 class="template-margin-top-2">
                <a href="{{ route('service.detail') }}">
                    Interior Detailing
                </a>
            </h5>
            <p class="template-padding-reset">Transform your car's interior with our meticulous Interior Detailing. We'll leave it spotless and rejuvenated. Experience the difference today!</p>
        </li>
        <!-- Right column -->
        <li class="template-layout-column-right" style="visibility: visible;">
            <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                <a href="{{ route('service.detail') }}" style="opacity: 1;">
                    <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_07.jpg') }}" alt="">
                    <span class="template-component-image-hover"></span>
                </a>
            </div>
            <h5 class="template-margin-top-2">
                <a href="{{ route('service.detail') }}">
                    Preparation For Sale
                </a>
            </h5>
            <p class="template-padding-reset">Prepare your car for sale with our comprehensive service. We'll enhance its appeal and maximize its value. Get ready to sell with confidence!</p>
        </li>
    </ul>
</div>

<div class="template-section template-section-padding-reset template-clear-fix">

    <!-- Flex layout 50x50% -->
    <div class="template-layout-flex template-background-color-1 template-clear-fix">

        <!-- Left column -->
        <div class="template-align-center">

            <!--- Header + subheader -->
            <div class="template-component-header-subheader">
                <h2>Why Choose Us</h2>
                <div></div>
                <span>A great value services</span>
            </div>

            <!-- Text -->
            <p class="template-padding-reset">
                We understand the value of convenience in today's busy world. That's why we offer efficient and convenient services that fit seamlessly into your schedule. You can rely on us to provide hassle-free car care, allowing you to focus on other important aspects of your life.
                <br><br>
                Choose Wink Car Detailing for exceptional service, unmatched expertise, and convenience that exceeds your expectations. Your satisfaction is our priority.
            </p>

            <!-- Space -->
            <div class="template-component-space template-component-space-2"></div>

            <!-- Button -->
            <a href="{{ route('booking') }}" class="template-component-button">Book Appointment</a>

        </div>

        <!-- Right column -->
        <div class="template-background-image template-background-image-3"></div>

    </div>

    <!-- Flex layout 50x50% -->
    <div class="template-layout-flex template-background-color-1 template-clear-fix">

        <!-- Left column -->
        <div class="template-background-image template-background-image-4"></div>

        <!-- Right column -->
        <div class="template-align-center">

            <!-- Header + subheader -->
            <div class="template-component-header-subheader">
                <h2>Experienced Team</h2>
                <div></div>
                <span>We can deliver the best result</span>
            </div>

            <!-- Text -->
            <p class="template-padding-reset">
                Our team is comprised of highly trained and experienced professionals who are passionate about cars. We are dedicated to providing the best possible service to our customers. We use the latest techniques and equipment to ensure that your car is treated with the utmost care. You can trust us to deliver exceptional results every time.
                <br><br>
                We are committed to providing our customers with the highest quality service at an affordable price. Our goal is to exceed your expectations and make you a customer for life.
            </p>

            <!-- Space -->
            <div class="template-component-space template-component-space-2"></div>

            <!-- Button -->
            <a href="{{ route('booking') }}" class="template-component-button">Book Appointment</a>
        </div>
    </div>
</div>

<div class="template-section template-section-padding-1 template-clear-fix template-main">

    <!-- Header + subheader -->
    <div class="template-component-header-subheader">
        <h2>Vehicle Type Packages</h2>
        <div></div>
        <span>We offer multiple services</span>
    </div>

    <div class="template-align-center">

        <!-- Tabs -->
        <div class="template-component-tab ui-tabs ui-corner-all ui-widget ui-widget-content" style="visibility: visible;">

            <!-- Navigation -->
            <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
                <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tab-1-small-car" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tab-1-small-car" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Small Car</a></li>
                <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tab-1-medium-car" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tab-1-medium-car" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Medium Car</a></li>
                <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tab-1-small-suv" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tab-1-small-suv" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Small Suv</a></li>
            </ul>

            <!-- Panel 1 -->
            <div id="tab-1-small-car" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
                <p class="template-padding-reset">
                Our Small Car package is tailored specifically for compact vehicles. With meticulous attention to detail, we ensure every inch of your small car receives the care it deserves. From the exterior hand wash to the interior cleaning, our team utilizes specialized techniques and high-quality products to enhance and protect your vehicle's appearance. Experience the difference of our Small Car package, designed to keep your compact vehicle looking pristine and well-maintained.
                </p>
            </div>

            <!-- Panel 2 -->
            <div id="tab-1-medium-car" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                <p class="template-padding-reset">
                Our Medium Car package is designed to cater to the needs of mid-sized vehicles. With our comprehensive services, we provide thorough cleaning and detailing to revive your medium-sized car. From the expert exterior wash to the meticulous interior treatment, our team ensures that every aspect of your vehicle is addressed. With attention to detail and a commitment to excellence, our Medium Car package guarantees impressive results, leaving your vehicle looking refreshed and in top condition.
                </p>
            </div>

            <!-- Panel 3 -->
            <div id="tab-1-small-suv" aria-labelledby="ui-id-3" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                <p class="template-padding-reset">
                Our Small SUV package is specifically crafted for compact SUVs, ensuring specialized care for your vehicle. With our meticulous approach, we pay close attention to every detail, delivering a deep clean and rejuvenation for your compact SUV. From the exterior wash to the interior detailing, our dedicated team utilizes industry-leading products and techniques to enhance and protect your vehicle's aesthetics. Experience the exceptional results of our Small SUV package, designed to keep your compact SUV looking its best, inside and out.
                </p>
            </div>

        </div>

    </div>

    <!-- Space -->
    <div class="template-component-space template-component-space-2"></div>

    <!-- Divider -->
    <div class="template-component-divider"></div>

    <!-- Space -->
    <div class="template-component-space template-component-space-2"></div>

    <!-- Features list -->
    <div class="template-component-feature-list template-component-feature-list-position-top">

        <!-- Layout 25x25x25x25% -->
        <ul class="template-layout-25x25x25x25 template-clear-fix">

            <!-- Left column -->
            <li class="template-layout-column-left" style="visibility: visible;">
                <span class="template-icon-feature-user-chat"></span>
                <h5>Easy To Reach</h5>
                <p>Our strategically located facility ensures convenient access to our exceptional services for all your car care needs.</p>
            </li>

            <!-- Center left column -->
            <li class="template-layout-column-center-left" style="visibility: visible;">
                <span class="template-icon-feature-check"></span>
                <h5>Best Results</h5>
                <p>Our unwavering commitment to perfection and utilization of premium-grade products guarantee superior outcomes that exceed expectations.</p>
            </li>

            <!-- Center right column -->
            <li class="template-layout-column-center-right" style="visibility: visible;">
                <span class="template-icon-feature-eco-car"></span>
                <h5>Eco Friendly</h5>
                <p>With a strong emphasis on environmental sustainability, we employ eco-friendly practices and products to minimize our ecological footprint.</p>
            </li>

            <!-- Right column -->
            <li class="template-layout-column-right" style="visibility: visible;">
                <span class="template-icon-feature-oil-gauge"></span>
                <h5>Oil Change</h5>
                <p>Trust our experienced technicians to perform swift and efficient oil changes, optimizing your engine's performance and longevity.</p>
            </li>

            <!-- Left column -->
            <li class="template-layout-column-left" style="visibility: visible;">
                <span class="template-icon-feature-water-drop"></span>
                <h5>Hand Wash</h5>
                <p>Experience the meticulous attention to detail and the impeccable cleanliness of our hand wash services, leaving your vehicle shining and protected.</p>
            </li>

            <!-- Center left column -->
            <li class="template-layout-column-center-left" style="visibility: visible;">
                <span class="template-icon-feature-vacuum-cleaner"></span>
                <h5>Interior Clean</h5>
                <p> Our interior cleaning services ensure that your vehicle's interior is thoroughly cleaned and protected, leaving it looking and smelling like new.</p>
            </li>

            <!-- Center right column -->
            <li class="template-layout-column-center-right" style="visibility: visible;">
                <span class="template-icon-feature-payment"></span>
                <h5>Online Payments</h5>
                <p>implify your car care experience with our seamless online payment system, providing convenience and efficiency at your fingertips.</p>
            </li>

            <!-- Right column -->
            <li class="template-layout-column-right" style="visibility: visible;">
                <span class="template-icon-feature-engine-belt"></span>
                <h5>Engine Clean</h5>
                <p>Enhance your engine's efficiency and longevity with our professional engine cleaning services, removing built-up residue and optimizing performance.</p>
            </li>
        </ul>
    </div>
</div>
@endsection