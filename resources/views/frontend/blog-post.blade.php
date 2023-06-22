@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header', ['breadcrumbContent' => '
<div class="template-header-bottom-page-title">
    <h1>HOW TO BOOK A CAR WASH ONLINE</h1>
</div>

<div class="template-header-bottom-page-breadcrumb">
    <a href="' . route('home') . '">Home</a><span class="template-icon-meta-arrow-right-12"></span>How to book a car wash online
</div>
'], ['imgClass' => 'template-header-background-2'])
@endsection

@section('content')
<div class="template-content">

    <!-- Main -->
    <div class="template-section template-main">

        <!-- Layout -->
        <div class="template-content-layout template-content-layout-sidebar-right template-clear-fix">

            <!-- Left column -->
            <div class="template-content-layout-column-left">

                <!-- Post -->
                <div class="template-blog">

                    <!-- Header -->
                    <div class="template-blog-header">

                        <!-- Date -->
                        <div>
                            <div class="template-blog-header-date">
                                <span>Apr</span>
                                <span>14</span>
                                <span>2017</span>
                            </div>
                        </div>

                        <!-- Header + meta -->
                        <div>

                            <!-- Header -->
                            <h3 class="template-blog-header-header">
                                <a href="#">How To Book A Car Wash Online</a>
                            </h3>

                            <!-- Meta -->
                            <div class="template-blog-header-meta">
                                <span class="template-icon-meta-user">
                                    <a href="#">Admin</a>
                                </span>
                                <span class="template-icon-meta-category">
                                    <a href="#">Triple Foam</a>
                                </span>
                                <span class="template-icon-meta-comment">
                                    <a href="#">25</a>
                                </span>
                            </div>

                        </div>

                    </div>

                    <!-- Image -->
                    <div class="template-blog-image">
                        <div class="template-component-image template-component-image-preloader" style="background-image: none;">
                            <a href="{{ asset('frontend-assets/media/image/wink-detail-images/img4.jpeg') }}" style="opacity: 1;">
                                <!-- <img src="{{ asset('frontend-assets/media/image/sample/760x506/image_09.jpg') }}" alt=""> -->
                                <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img4.jpeg') }}" alt="" style="height: 540px; width: 100%;">
                                <span class="template-component-image-hover"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="template-blog-content">
                        <p>
                            Booking a car wash online has never been easier. With our user-friendly website or mobile app, you can conveniently reserve your spot for a pristine car wash. Simply visit our website or open our app and select your preferred location from the available options. Next, browse through our range of car wash packages and choose the one that suits your needs
                        </p>

                        <div class="template-component-blockquote">
                            Our company was founded back in 2005 but team of experts with more then 10 years of proffesional car wash experience. We operate three car washes.
                        </div>

                        <p>
                            Once you've selected your desired service, pick a date and time that best fits your schedule. Provide your vehicle's make, model, and any specific requirements to ensure a personalized car wash experience. Review your booking details, including the service, date, and time, and proceed to make a secure online payment. After confirming your reservation, you will receive a confirmation email or notification with all the necessary information. Experience the convenience of booking a car wash online and enjoy a sparkling clean vehicle with minimal effort.
                        </p>
                        <h4>Multiple Wash Locations</h4>
                        <p>
                            Discover the convenience of our multiple wash locations, strategically situated for easy access. Whether you're in the city or suburbs, we have a nearby facility to serve you. Experience the flexibility of choosing the most convenient wash location for your busy lifestyle.
                        </p>
                        <h4>Skilled Team Members</h4>
                        <p>
                            Our skilled team members are the heart of our car wash service, bringing expertise and attention to detail to every vehicle. With years of experience, they ensure a thorough and high-quality cleaning experience. Trust in our skilled team members to deliver exceptional results and leave your vehicle looking its best.
                        </p>
                    </div>

                    <!-- Author info -->
                    <div class="template-blog-author-info">

                        <!-- Author avatar -->
                        <img src="{{ asset('frontend-assets/media/image/avatar.jpg') }}" alt="">

                        <!-- Author name -->
                        <span class="template-icon-meta-author">
                            <span>Admin</span>
                        </span>

                        <!-- About author -->
                        <p>
                            Primare sande est terminal a metro est morbi finale. Suspendisse a novum etos pellentesque a non felis maecenas module vimeo
                            at malesuada. Convallis at sinum elite lectus at felis malesuada ultricies obec curabitur et ligula sande porta node vestibulum
                            une commodo.
                        </p>

                    </div>

                    <!-- Meta -->
                    <div class="template-blog-meta">

                        <div>

                            <!-- Social icons list -->
                            <div>
                                <span>Share:</span>
                                <ul class="template-component-social-icon-list template-component-social-icon-list-3">
                                    <li><a href="#" class="template-icon-social-twitter"></a></li>
                                    <li><a href="#" class="template-icon-social-facebook"></a></li>
                                    <li><a href="#" class="template-icon-social-pinterest"></a></li>
                                </ul>
                            </div>

                            <!-- Tags -->
                            <div>
                                <span class="template-icon-meta-tag"></span>
                                <ul>
                                    <li><a href="#">Triple Foam</a>, </li>
                                    <li><a href="#">Wheel</a>, </li>
                                    <li><a href="#">Works</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <!-- Comment form -->
                    <div class="template-blog-comment-form">

                        <!-- Header -->
                        <div class="template-component-header-subheader template-align-left">
                            <h4>Leave A Comment</h4>
                            <div></div>
                        </div>

                        <!-- Form -->
                        <form name="comment-form" id="comment-form" class="template-component-comment-form" onsubmit="return false;">
                            <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">
                                <li class="template-layout-column-left template-margin-bottom-reset" style="visibility: visible;">
                                    <div class="template-component-form-field">
                                        <label for="comment-form-name">Your Name *</label>
                                        <input type="text" name="comment-form-name" id="comment-form-name">
                                    </div>
                                    <div class="template-component-form-field">
                                        <label for="comment-form-email">Your E-mail *</label>
                                        <input type="text" name="comment-form-email" id="comment-form-email">
                                    </div>
                                    <div class="template-component-form-field">
                                        <label for="comment-form-phone">Phone Number</label>
                                        <input type="text" name="comment-form-phone" id="comment-form-phone">
                                    </div>
                                </li>
                                <li class="template-layout-column-right template-margin-bottom-reset" style="visibility: visible;">
                                    <div class="template-component-form-field">
                                        <label for="comment-form-comment">Comment *</label>
                                        <textarea rows="1" cols="1" name="comment-form-comment" id="comment-form-comment"></textarea>
                                    </div>
                                </li>
                            </ul>
                            <div class="template-align-right template-clear-fix template-margin-top-1">
                                <input type="submit" value="Post Comment" class="template-component-button" name="comment-form-submit" id="comment-form-submit">
                            </div>
                        </form>
                    </div>

                    <!-- Comments list -->
                    <div class="template-blog-comment-list">

                        <!-- Header -->
                        <div class="template-component-header-subheader template-align-left">
                            <h4>3 Comments</h4>
                            <div></div>
                        </div>

                        <!-- 1st level comments list -->
                        <ul>

                            <!-- List element -->
                            <li>

                                <!-- Comment -->
                                <div>
                                    <img src="{{ asset('frontend-assets/media/image/avatar.jpg') }}" alt="">
                                    <span class="template-icon-meta-author">
                                        <span>John Smith</span>
                                    </span>
                                    <span class="template-icon-meta-time">
                                        <span>March 25 2015</span>
                                    </span>
                                    <p>
                                        Great article! Really enjoyed reading about the benefits of eco-friendly car washes. It's important to take care of our vehicles while also being mindful of the environment. Keep up the good work!
                                    </p>
                                </div>

                            </li>

                            <!-- List element -->
                            <li>

                                <!-- Comment -->
                                <div>
                                    <img src="{{ asset('frontend-assets/media/image/avatar.jpg') }}" alt="">
                                    <span class="template-icon-meta-author">
                                        <span>John Smith</span>
                                    </span>
                                    <span class="template-icon-meta-time">
                                        <span>March 25 2015</span>
                                    </span>
                                    <p>
                                        Thanks for sharing these valuable car maintenance tips. I never knew the impact of regular detailing on the lifespan of a vehicle. Definitely going to implement these suggestions!
                                    </p>
                                </div>

                            </li>

                            <!-- List element -->
                            <li>

                                <!-- Comment -->
                                <div>
                                    <img src="{{ asset('frontend-assets/media/image/avatar.jpg') }}" alt="">
                                    <span class="template-icon-meta-author">
                                        <span>John Smith</span>
                                    </span>
                                    <span class="template-icon-meta-time">
                                        <span>March 25 2015</span>
                                    </span>
                                    <p>
                                        Your blog post on choosing the right car wash package was extremely helpful. I was always confused about the different options available, but now I feel more confident in making the right choice. Appreciate the informative content!
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <!-- Pagination -->
                    <!-- <div class="template-pagination template-clear-fix">
                        <ul>
                            <li class="template-pagination-button-prev"><a href="#" class="template-icon-meta-arrow-large-rl">&nbsp;</a></li>
                            <li><a href="#">1</a></li>
                            <li class="template-pagination-button-selected"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="template-pagination-button-next"><a href="#" class="template-icon-meta-arrow-large-rl">&nbsp;</a></li>
                        </ul>
                    </div> -->

                </div>
            </div>

            <!-- Right column -->
            <div class="template-content-layout-column-right">

                <!-- Widgets list -->
                <ul class="template-widget-list">

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">

                            <!-- Widget header -->
                            <h6>Search Blog</h6>

                            <!-- Search widget -->
                            <div class="template-widget-search">
                                <div class="template-component-search-form">
                                    <form>
                                        <div>
                                            <input type="search" name="search">
                                            <span class="template-icon-meta-search"></span>
                                            <input type="submit" name="submit" value="">
                                        </div>
                                    </form>
                                </div>
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
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img3.jpeg') }}" alt="" style="height: 100px; width: 100px;">
                                            <span>How to Choose Car Detailing Company</span>
                                            <span class="template-icon-meta-time"><span>April 14, 2017</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img9.jpeg') }}" alt="" style="height: 100px; width: 100px;">
                                            <span>Interior Car Wash and Detailing Service</span>
                                            <span class="template-icon-meta-time"><span>March 25, 2017</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img4.jpeg') }}" alt="" style="height: 100px; width: 100px;">
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
                            <h6>Most commented</h6>

                            <!-- Most commented widget -->
                            <div class="template-widget-most-comment">
                                <ul>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img3.jpeg') }}" alt="" style="height: 100px; width: 100px;">
                                            <span>Benefits and Drawbacks of Car Wx</span>
                                            <span class="template-icon-meta-comment"><span>25 Comments</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img9.jpeg') }}" alt="" style="height: 100px; width: 100px;">
                                            <span>Facts That I Bet You Did Not Know</span>
                                            <span class="template-icon-meta-comment"><span>7 Comments</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-post') }}">
                                            <img src="{{ asset('frontend-assets/media/image/wink-detail-images/img4.jpeg') }}" alt="" style="height: 100px; width: 100px;">
                                            <span>Protecting Elements of Carnauba Wax</span>
                                            <span class="template-icon-meta-comment"><span>5 Comments</span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Categories</h6>

                            <!-- Categories widget -->
                            <div class="template-widget-category">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Auto Detail</span>
                                            <span>12</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Business</span>
                                            <span>5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>General</span>
                                            <span>7</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Hand Wash</span>
                                            <span>4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>The Works</span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Trends</span>
                                            <span>2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Popular Tags</h6>

                            <!-- Popular tags widget -->
                            <div class="template-widget-tag">
                                <ul>
                                    <li><a href="#">Clear Coat</a></li>
                                    <li><a href="#">Dry</a></li>
                                    <li><a href="#">Shine</a></li>
                                    <li><a href="#">Tires</a></li>
                                    <li><a href="#">Triple Foam</a></li>
                                    <li><a href="#">Wash</a></li>
                                    <li><a href="#">Wax Polish</a></li>
                                    <li><a href="#">Wheel</a></li>
                                    <li><a href="#">Works</a></li>
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
                                    The text widget for Wink Car Detailing lets you showcase captivating descriptions and engaging content to highlight our exceptional car detailing services.
                                </p>
                                <ul class="template-component-list template-margin-top-2">
                                    <li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
                                    <li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
                                    <li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <!-- Widget -->
                    <li>
                        <div class="template-widget">
                            <h6>Archives</h6>

                            <!-- Archive widget -->
                            <div class="template-widget-archive">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>March 2015</span>
                                            <span>12</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>February 2015</span>
                                            <span>15</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>January2015</span>
                                            <span>10</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>December 2015</span>
                                            <span>16</span>
                                        </a>
                                    </li>
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