<!-- Header -->
<div class="template-header template-header-background {{ $imgClass ?? '' }}">

    <!-- Top header -->
    <div class="template-header-top">

        <!-- Logo -->
        <div class="template-header-top-logo">
            <a href="{{ route('home') }}" title="">
                <img src="{{ asset('frontend-assets/media/image/logo.png') }}" alt="" class="template-logo">
                <img src="{{ asset('frontend-assets/media/image/stickylogo.png') }}" alt="" class="template-logo template-logo-sticky" />
            </a>
        </div>

        <!-- Menu-->
        <div class="template-header-top-menu template-main">
            <nav>
                @php
                    $currentRoute = Route::currentRouteName();
                @endphp

                <!-- Default menu-->
                <div class="template-component-menu-default">
                    <ul class="sf-menu">
                        <li><a href="{{ route('home') }}" class="{{ $currentRoute === 'home' ? 'template-state-selected' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ $currentRoute === 'about' ? 'template-state-selected' : '' }}">About</a></li>
                        <li><a href="{{ route('booking') }}" class="{{ $currentRoute === 'booking' ? 'template-state-selected' : '' }}">Booking</a></li>
                        <li><a href="{{ route('services') }}" class="{{ $currentRoute === 'services' ? 'template-state-selected' : '' }}">Services</a></li>
                        <li><a href="{{ route('blog-post') }}" class="{{ $currentRoute === 'blog-post' ? 'template-state-selected' : '' }}">Blog</a></li>
                        <li><a href="{{ route('gallery') }}" class="{{ $currentRoute === 'gallery' ? 'template-state-selected' : '' }}">Gallery</a></li>
                        <li><a href="{{ route('contact-us') }}" class="{{ $currentRoute === 'contact-us' ? 'template-state-selected' : '' }}">Contact</a></li>
                        <!-- <li>
                            <a href="#">Services</a>
                            <ul>
                                <li><a href="index371c.html?page=service-style-1">Services Style 1</a></li>
                                <li><a href="index3550.html?page=service-style-2">Services Style 2</a></li>
                                <li><a href="indexb643.html?page=single-service-right-sidebar">Single Service - Right Sidebar</a></li>
                                <li><a href="index1d42.html?page=single-service-left-sidebar">Single Service - Left Sidebar</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>

            </nav>
            <nav>

                <!-- Mobile menu-->
                <div class="template-component-menu-responsive">
                    <ul class="flexnav">
                        <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                        <li><a href="{{ route('home') }}" class="{{ $currentRoute === 'home' ? 'template-state-selected' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ $currentRoute === 'about' ? 'template-state-selected' : '' }}">About</a></li>
                        <li><a href="{{ route('booking') }}" class="{{ $currentRoute === 'booking' ? 'template-state-selected' : '' }}">Booking</a></li>
                        <li><a href="{{ route('services') }}" class="{{ $currentRoute === 'services' ? 'template-state-selected' : '' }}">Services</a></li>
                        <li><a href="{{ route('blog-post') }}" class="{{ $currentRoute === 'blog-post' ? 'template-state-selected' : '' }}">Blog</a></li>
                        <li><a href="{{ route('gallery') }}" class="{{ $currentRoute === 'gallery' ? 'template-state-selected' : '' }}">Gallery</a></li>
                        <li><a href="{{ route('contact-us') }}" class="{{ $currentRoute === 'contact-us' ? 'template-state-selected' : '' }}">Contact</a></li>
                    </ul>
                </div>

            </nav>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('.template-header-top').templateHeader();
                });
            </script>
        </div>

        <!-- Social icons -->
        <div class="template-header-top-icon-list template-component-social-icon-list-1">
        <ul class="template-component-social-icon-list">
                <!-- <li><a href="#" class="template-icon-social-twitter"></a></li> -->
                <li><a href="https://www.facebook.com/Winkdetailing.au/" class="template-icon-social-facebook" target="_blank"></a></li>
                <li><a href="https://www.instagram.com/winkcardetailing/" class="template-icon-social-instagram" target="_blank"></a></li>
                    <!-- <li><a href="#" class="template-icon-social-dribbble"></a></li> -->
                    <!-- <li><a href="#" class="template-icon-meta-cart"></a></li> -->
                    <li><a href="#" class="template-icon-meta-search"></a></li>
                    <li><a href="#" class="template-icon-meta-menu"></a></li>
            </ul>
        </div>

    </div>

    <div class="template-header-bottom">
        <div class="template-main">
            {!! $breadcrumbContent !!}
        </div>
    </div>

</div>