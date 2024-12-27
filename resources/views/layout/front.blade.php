<!DOCTYPE html><html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#E9E8F0">
    <!-- preload assets -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/montserrat-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/lato-v16-latin-regular.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/lato-v16-latin-700.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preload" href="js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="js/utilities.min.js" as="script">
    <link rel="preload" href="js/config-theme.js" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- uikit -->
    <script src="js/uikit.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <title>@yield('title')|TradeFx</title>
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    <header>
        <div class="uk-section uk-padding-small in-profit-ticker">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                            <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid="">
                                <li>
                                    <div class="in-icon-wrap small circle up">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                    <div>
                                        XAUUSD <span class="uk-text-success">1478.81</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle down">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        GBPUSD <span class="uk-text-danger">1.3191</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle down">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        EURUSD <span class="uk-text-danger">1.1159</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle up">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                    <div>
                                        USDJPY <span class="uk-text-success">109.59</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle up">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                    <div>
                                        USDCAD <span class="uk-text-success">1.3172</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle up">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                    <div>
                                        USDCHF <span class="uk-text-success">0.9776</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle down">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        AUDUSD <span class="uk-text-danger">0.67064</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="in-icon-wrap small circle up">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                    <div>
                                        GBPJPY <span class="uk-text-success">141.91</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar="">
                    <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                        <a class="uk-navbar-item uk-logo" href="index.html">
                            <img src="images/in-lazy.gif" data-src="front/logo3.png" alt="logo" width="180" height="92" data-uk-img="">
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{ url('/') }}">Home{{-- <span data-uk-navbar-parent-icon=""> --}}</span></a>
                                {{-- <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="homepage2.html">Homepage 2</a></li>
                                        <li><a href="homepage3.html">Homepage 3</a></li>
                                        <li><a href="homepage4.html">Homepage 4</a></li>
                                    </ul>
                                </div> --}}
                            </li>
                            <li><a href="{{ Route('market') }}">Markets</a>
                            </li>
                            <li><a href="{{ Route('about') }}">About{{-- <span data-uk-navbar-parent-icon=""> --}}</span></a>
                                {{-- <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div> --}}
                            </li>
                            <li><a href="{{ Route('contact')}}">Contact</a>
                            </li>
                            {{-- <li><a href="#">Resources<span data-uk-navbar-parent-icon=""></span></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid="">
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="https://getuikit.com/docs/introduction">Documentation<i class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                                <li><a href="help-center.html">Help Center</a></li>
                                                <li><a href="customers.html">Customers</a></li>
                                                <li><a href="roadmap.html">Roadmap</a></li>
                                                <li><a href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="uk-navbar-right uk-width-auto">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <div>
                                <a href="index.html" class="uk-button uk-button-link">Login</a>
                                <a href="{{ Route('register') }}" class="uk-button uk-button-link">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header

        @yield('content')

    <!-- footer begin -->
    <footer>
        <div class="uk-section uk-section-secondary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex uk-margin-small-top" data-uk-grid="">
                    <div>
                        <h4 class="uk-heading-bullet">Overview</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Stock indices</a></li>
                            <li><a href="#">Commodities</a></li>
                            <li><a href="#">Forex</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Company</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="{{ Route('about') }}">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Legal</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy &amp; Policy</a></li>
                            <li><a href="{{ Route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <h4 class="uk-heading-bullet">Support</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Documentation</a></li>
                        </ul>
                    </div>
                    <div class="uk-flex-first uk-flex-last@m">
                        <div class="footer-logo">
                            <img class="uk-margin-bottom uk-display-block" src="images/footer-logo-wXvCAq.svg" alt="footer-logo" width="130" height="36" data-uk-img="">
                        </div>
                        <ul class="uk-list uk-link-text uk-margin-remove-top">
                            <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>info@profit.id</a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Jakarta, Indonesia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top uk-margin-small-bottom" data-uk-grid="">
                    <div class="uk-width-5-6@m uk-margin-bottom">
                        <div class="footer-warning in-margin-top-20@s">
                            <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                            <p class="uk-text-small">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary </p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <p class="copyright-text">© Profit Inc 2020. All rights reserved.</p>
                    </div>
                    <div class="uk-width-1-2@m uk-flex uk-flex-right@m">
                        <!-- social media begin -->
                        <div class="uk-flex social-media-list">
                        <div><a href="https://www.facebook.com/indonez" class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i> Facebook</a></div>
                        <div><a href="https://twitter.com/indonez_tw" class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></div>
                        <div><a href="https://www.instagram.com/indonez_ig" class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></div>
                        <div><a href="#some-link" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i> Youtube</a></div>
                        </div>
                        <!-- social media end -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- to top begin -->
    <a href="#" class="to-top uk-visible@m" data-uk-scroll="">
        Top<i class="fas fa-chevron-up"></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    <script src="js/tp.widget.bootstrap.min.js" defer=""></script>
    <script src="js/utilities.min.js"></script>
    <script src="js/config-theme.js"></script>


</body></html>
