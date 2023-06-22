@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header', ['breadcrumbContent' => '
<div class="template-header-bottom-page-title">
    <h1>GALLERY</h1>
</div>

<div class="template-header-bottom-page-breadcrumb">
    <a href="' . route('home') . '">Home</a><span class="template-icon-meta-arrow-right-12"></span>GALLERY
</div>
'], ['imgClass' => 'template-header-background-2'])
@endsection

@section('content')
<div class="template-content">

    <!-- Section -->
    <div class="template-section template-section-padding-1 template-main template-align-center">

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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img17.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">

                            <!-- Thumbnail -->
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/460x678/image_01.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img17.jpeg') }}" alt="" style="height: 490px;" />

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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img7.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_01.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img7.jpeg') }}" alt="" style="height: 240px; width: 100%;" />
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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img5.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_02.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img5.jpeg') }}" alt="" style="height: 240px; width: 100%;" />
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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img15.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/760x506/image_06.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img15.jpeg') }}" alt="" style="height: 500px; width: 100%;" />
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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img9.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_04.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img9.jpeg') }}" alt="" style="height: 240px; width: 100%;" />
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
                        <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img3.jpeg') }}" class="template-fancybox" data-fancybox-group="gallery-1">
                            <!-- <img src="{{ asset('frontend-assets/media/image/sample/460x306/image_10.jpg') }}" alt="" /> -->
                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img3.jpeg') }}" alt="" style="height: 240px; width: 100%;" />
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
</div>
@endsection