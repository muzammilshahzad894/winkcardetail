<!DOCTYPE html>

<html>


<!-- Mirrored from quanticalabs.com/Wink Car Detailing/Template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:17:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <title>Wink Car Detailing</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:700italic,700,400italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/jquery.qtip.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/superfish.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/flexnav.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/DateTimePicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/fancybox/jquery.fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/fancybox/helpers/jquery.fancybox-buttons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/revolution/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/revolution/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/revolution/navigation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/base.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/responsive.css') }}" />
    <!-- toastr css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.min.js') }}"></script>

</head>

<body class="template-page-home">

    @yield('header')

    <!-- Content -->
    <div class="template-content">
        @yield('content')
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#template-booking').booking();
        });
    </script>

    <!-- Footer -->
    <div class="template-footer">

        <div class="template-main">

            <!-- Footer top -->
            <div class="template-footer-top">

                <!-- Layout 25x25x25x25 -->
                <div class="template-layout-25x25x25x25 template-clear-fix">

                    <!-- Left column -->
                    <div class="template-layout-column-left">
                        <h6>About</h6>
                        <p>Wink Car Detailingn Hand Wash is an eco-friendly hand car wash and detailing service based in Melbourne.</p>
                        <img src="media/image/logo.png" alt="" class="template-logo" />
                    </div>

                    <!-- Center left column -->
                    <div class="template-layout-column-center-left">
                        <h6>Services</h6>
                        <ul class="template-list-reset">
                            <li><a href="{{ route('services') }}">Exterior Hand Wash</a></li>
                            <li><a href="{{ route('services') }}">Tower Hand Dry</a></li>
                            <li><a href="{{ route('services') }}">Tire Dressing</a></li>
                            <li><a href="{{ route('services') }}">Wheel Shine</a></li>
                            <li><a href="{{ route('services') }}">Interior Vacuum</a></li>
                            <li><a href="{{ route('services') }}">Sealer Hand Wax</a></li>
                        </ul>
                    </div>

                    <!-- Center right column -->
                    <div class="template-layout-column-center-right">
                        <h6>Company</h6>
                        <ul class="template-list-reset">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('blog-post') }}">Blog</a></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                            <li><a href="{{ route('booking') }}">Book Your Wash</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right">
                        <h6>Newsletter</h6>
                        <form class="template-component-newsletter-form">
                            <div class="template-component-form-field template-state-block">
                                <label for="newsletter-form-email">Your e-mail address *</label>
                                <input type="text" name="newsletter-form-email" id="newsletter-form-email" />
                            </div>
                            <div class="template-margin-top-2 template-state-block">
                                <input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit" />
                            </div>
                        </form>
                    </div>

                </div>

            </div>

            <!-- Footer bottom -->
            <div class="template-footer-bottom">

                <!-- Social icon list -->
                <ul class="template-component-social-icon-list template-component-social-icon-list-2">
                    <li><a href="https://www.facebook.com/Winkdetailing.au/" class="template-icon-social-facebook" target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/winkcardetailing/" class="template-icon-social-instagram" target="_blank"></a></li>
                </ul>

                <!-- Copyright -->
                <div class="template-footer-bottom-copyright">
                    By <a href="{{ route('home') }}" target="_blank">Wink Car Details</a> &copy; 2016 <a href="{{ route('home') }}" target="_blank">Wink Car Detailing Template</a>
                </div>

            </div>

        </div>

    </div>

    <!-- Search box -->
    <div class="template-component-search-form">
        <div></div>
        <form>
            <div>
                <input type="search" name="search" />
                <span class="template-icon-meta-search"></span>
                <input type="submit" name="submit" value="" />
            </div>
        </form>
    </div>

    <!-- Go to top button -->
    <a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

    <!-- Wrapper for date picker -->
    <div id="dtBox"></div>

    <!-- JS files -->
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/superfish.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.blockUI.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.qtip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.actual.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.flexnav.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/sticky.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.fancybox-media.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.fancybox-buttons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.carouFredSel.packed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.responsiveElement.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/DateTimePicker.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

    <!-- Revolution Slider files -->
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/revolution/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- Plugins files -->
    <script type="text/javascript" src="{{ asset('frontend-assets/plugin/booking/jquery.booking.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/plugin/contact-form/jquery.contactForm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/plugin/newsletter-form/jquery.newsletterForm.js') }}"></script>

    <!-- Components files -->
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.tab.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.image.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.helper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.counter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.gallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.goToTop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.moreLess.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.googleMap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.searchForm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/template/jquery.template.testimonial.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/public.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/script/public.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(session('success-toastr'))
    <script>
        toastr.success("{{ session('success-toastr') }}");
    </script>
    @endif

    @if(session('error-toastr'))
    <script>
        toastr.error("{{ session('error-toastr') }}");
    </script>
    @endif

</body>


<!-- Mirrored from quanticalabs.com/Wink Car Detailing/Template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:19:25 GMT -->

</html>