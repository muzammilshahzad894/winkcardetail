<!-- Header -->
<div class="template-header template-header-background template-header-background-1">

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

                <!-- Default menu-->
                <div class="template-component-menu-default">
                    <ul class="sf-menu">
                        <li><a href="{{ route('home') }}" class="template-state-selected">Home</a></li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="index4d99.html?page=about-style-1">About Style 1</a></li>
                                <li><a href="indexb9e0.html?page=about-style-2">About Style 2</a></li>
                                <li><a href="index371c.html?page=service-style-1">Services Style 1</a></li>
                                <li><a href="index3550.html?page=service-style-2">Services Style 2</a></li>
                                <li><a href="indexb643.html?page=single-service-right-sidebar">Single Service</a></li>
                                <li><a href="index4d9f.html?page=404">Page 404</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li>
                            <a href="#">Services</a>
                            <ul>
                                <li><a href="index371c.html?page=service-style-1">Services Style 1</a></li>
                                <li><a href="index3550.html?page=service-style-2">Services Style 2</a></li>
                                <li><a href="indexb643.html?page=single-service-right-sidebar">Single Service - Right Sidebar</a></li>
                                <li><a href="index1d42.html?page=single-service-left-sidebar">Single Service - Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="index88dc.html?page=blog-small-image-right-sidebar">Blog Small Image - Right Sidebar</a></li>
                                <li><a href="index764c.html?page=blog-small-image-left-sidebar">Blog Small Image - Left Sidebar</a></li>
                                <li><a href="index662f.html?page=blog-large-image-right-sidebar">Blog Large Image - Right Sidebar</a></li>
                                <li><a href="index33c5.html?page=blog-large-image-left-sidebar">Blog Large Image - Left Sidebar</a></li>
                                <li><a href="indexb8d3.html?page=single-post-right-sidebar">Single Post - Right Sidebar</a></li>
                                <li><a href="index381d.html?page=single-post-left-sidebar">Single Post - Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="indexd590.html?page=gallery">Gallery</a></li>
                        <li>
                            <a href="#">Contact</a>
                            <ul>
                                <li><a href="index2a26.html?page=contact-style-1">Contact Style 1</a></li>
                                <li><a href="index09f0.html?page=contact-style-2">Contact Style 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
            <nav>

                <!-- Mobile menu-->
                <div class="template-component-menu-responsive">
                    <ul class="flexnav">
                        <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                        <li><a href="{{ route('home') }}" class="template-state-selected">Home</a></li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="index4d99.html?page=about-style-1">About Style 1</a></li>
                                <li><a href="indexb9e0.html?page=about-style-2">About Style 2</a></li>
                                <li><a href="index371c.html?page=service-style-1">Services Style 1</a></li>
                                <li><a href="index3550.html?page=service-style-2">Services Style 2</a></li>
                                <li><a href="indexb643.html?page=single-service-right-sidebar">Single Service</a></li>
                                <li><a href="index4d9f.html?page=404">Page 404</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li>
                            <a href="#">Services</a>
                            <ul>
                                <li><a href="index371c.html?page=service-style-1">Services Style 1</a></li>
                                <li><a href="index3550.html?page=service-style-2">Services Style 2</a></li>
                                <li><a href="indexb643.html?page=single-service-right-sidebar">Single Service - Right Sidebar</a></li>
                                <li><a href="index1d42.html?page=single-service-left-sidebar">Single Service - Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="index88dc.html?page=blog-small-image-right-sidebar">Blog Small Image - Right Sidebar</a></li>
                                <li><a href="index764c.html?page=blog-small-image-left-sidebar">Blog Small Image - Left Sidebar</a></li>
                                <li><a href="index662f.html?page=blog-large-image-right-sidebar">Blog Large Image - Right Sidebar</a></li>
                                <li><a href="index33c5.html?page=blog-large-image-left-sidebar">Blog Large Image - Left Sidebar</a></li>
                                <li><a href="indexb8d3.html?page=single-post-right-sidebar">Single Post - Right Sidebar</a></li>
                                <li><a href="index381d.html?page=single-post-left-sidebar">Single Post - Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="indexd590.html?page=gallery">Gallery</a></li>
                        <li>
                            <a href="#">Contact</a>
                            <ul>
                                <li><a href="index2a26.html?page=contact-style-1">Contact Style 1</a></li>
                                <li><a href="index09f0.html?page=contact-style-2">Contact Style 2</a></li>
                            </ul>
                        </li>
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
                <li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
                <li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
                <li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
                <li><a href="indexd852.html?page=book-your-wash" class="template-icon-meta-cart"></a></li>
                <li><a href="#" class="template-icon-meta-search"></a></li>
                <li><a href="#" class="template-icon-meta-menu"></a></li>
            </ul>
        </div>

    </div>

    <div class="template-header-bottom">

        <div class="template-main">

            <div class="template-header-bottom-page-title">
                <h1>Book your wash</h1>
            </div>

            <div class="template-header-bottom-page-breadcrumb">
                <a href="{{ route('home') }}">Home</a><span class="template-icon-meta-arrow-right-12"></span>Book your wash
            </div>

        </div>

    </div>

</div>