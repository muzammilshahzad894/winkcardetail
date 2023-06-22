@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header', ['breadcrumbContent' => '
<div class="template-header-bottom-page-title">
    <h1>About US</h1>
</div>

<div class="template-header-bottom-page-breadcrumb">
    <a href="' . route('home') . '">Home</a><span class="template-icon-meta-arrow-right-12"></span>About Us
</div>
'], ['imgClass' => 'template-header-background-2'])
@endsection

@section('content')
<div class="template-content">
    <div class="template-section template-section-padding-1 template-clear-fix template-main">

        <!-- Layout 50x50% -->
        <div class="template-layout-50x50 template-clear-fix">

            <!-- Left column -->
            <div class="template-layout-column-left" style="visibility: visible;">

                <!-- Header -->
                <div class="template-component-header-subheader template-align-left">
                    <h2>Wink Detaling Car Wash</h2>
                    <div></div>
                    <span>Car wash &amp; deatiling service</span>
                </div>

                <!-- Text -->
                <p class="template-padding-reset">
                    Experience superior car care at Wink Car Detailing. Our friendly service and eco-friendly hand car wash ensure your vehicle looks its best. Trust us for convenient, professional detailing. Visit us today!
                </p>

                <!-- Space -->
                <div class="template-space template-component-space-1"></div>

                <!-- List -->
                <ul class="template-component-list">
                    <li>
                        <span class="template-icon-meta-check"></span>
                        We use professional equipment and have a fully trained staff
                    </li>
                    <li>
                        <span class="template-icon-meta-check"></span>
                        We make sure our customers are completely satisfied with their service
                    </li>
                    <li>
                        <span class="template-icon-meta-check"></span>
                        Professional detailing will increase the resale value of your car
                    </li>
                    <li>
                        <span class="template-icon-meta-check"></span>
                        We are a licensed and fully insured company
                    </li>
                    <li>
                        <span class="template-icon-meta-check"></span>
                        Book and pay for your wash electronically and securely
                    </li>
                    <li>
                        <span class="template-icon-meta-check"></span>
                        We are very open and easy to reach company
                    </li>
                </ul>

                <!-- Space -->
                <div class="template-space template-component-space-2"></div>

                <!-- Button -->
                <a href="{{ route('services') }}" class="template-component-button">Our Services</a>

            </div>

            <div class="template-layout-column-right template-margin-bottom-reset" style="visibility: visible;">

                <!-- Image -->
                <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                    <a href="{{ asset('frontend-assets/media/image/sample/760x506/image_06.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1" style="opacity: 1;">
                        <img src="{{ asset('frontend-assets/media/image/sample/760x506/image_06.jpg') }}" alt="">
                        <span class="template-component-image-hover"></span>
                    </a>
                </div>

                <!-- Layout 50x50% -->
                <div class="template-layout-50x50 template-clear-fix">
                    <!-- Left column -->
                    <div class="template-layout-column-left template-margin-bottom-reset" style="visibility: visible;">
                        <div class="template-component-space template-component-space-1"></div>
                        <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                            <a href="{{ asset('frontend-assets/media/image/sample/760x506/image_09.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1" style="opacity: 1;">
                                <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_09.jpg') }}" alt="">
                                <span class="template-component-image-hover"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right" style="visibility: visible;">
                        <div class="template-component-space template-component-space-1"></div>
                        <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                            <a href="{{ asset('frontend-assets/media/image/sample/760x506/image_10.jpg') }}" class="template-fancybox" data-fancybox-group="gallery-1" style="opacity: 1;">
                                <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_10.jpg') }}" alt="">
                                <span class="template-component-image-hover"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection