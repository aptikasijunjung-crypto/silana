<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Porto - Multipurpose Website Template</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('frontend/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

</head>

<body data-plugin-page-transition>
    <div class="body">
        <header id="header"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 173, 'stickySetTop': '-173px', 'stickyChangeLogo': false}">
            <div class="header-body border-0">
                <div class="header-top header-top-default border-bottom-0 bg-color-primary">
                    <div class="container container-xl-custom">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills text-2">
                                            <li class="nav-item d-none d-lg-inline-block">
                                                <span class="ps-0 pe-4 text-light opacity-8">Everything about Lifestyle,
                                                    Travel and Gadgets!</span>
                                            </li>
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link ps-0 pe-4 text-light" href="#">Sign In</a>
                                            </li>
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link ps-0 pe-4 text-light" href="about-us.html">About
                                                    Us</a>
                                            </li>
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link ps-0 pe-4 text-light" href="contact-us.html">Contact
                                                    Us</a>
                                            </li>
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link ps-0 pe-4 text-light"
                                                    href="http://themeforest.net/item/porto-responsive-html5-template/4106987">Buy
                                                    Now</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul
                                        class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/"
                                                target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icons-x"><a href="http://www.x.com/" target="_blank"
                                                title="X"><i class="fab fa-x-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/"
                                                target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container container-xl-custom" style="min-height: 122px;">
                    <div class="header-row py-3">
                        {{-- <x-frontend.logo>{{ session('logo')['kelurahan'] }}</x-frontend.logo> --}}
                        <x-frontend.logo>
                            <x-slot name="banner">
                                <img alt="Porto" class="img-fluid ps-3"
                                    src="{{ session('logo')['kelurahan']->banner }}">
                            </x-slot>
                            <img alt="Porto" width="300" height="70"
                                src="{{ session('logo')['kelurahan']->logo }}">
                        </x-frontend.logo>

                    </div>
                </div>
                <div class="header-nav-bar header-nav-bar-top-border bg-light">
                    <div class="header-container container container-xl-custom">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row justify-content-end justify-content-lg-start">
                                    <div class="header-nav p-0">
                                        <div
                                            class="header-nav header-nav-links header-nav-spaced header-nav-first-item-no-padding justify-content-start">
                                            <div
                                                class="header-nav-main header-nav-main-square header-nav-main-font-lg-upper header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                <x-frontend.menu></x-frontend.menu>
                                            </div>
                                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                                data-bs-target=".header-nav-main nav">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                        </div>
                                        <div class="header-nav-features">
                                            <div class="header-nav-features-search-reveal-container">
                                                <div
                                                    class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                                    <a href="#"
                                                        class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i
                                                            class="fas fa-search header-nav-top-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-features header-nav-features-no-border p-static">
                <div
                    class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                    <div class="container">
                        <div class="row h-100 d-flex">
                            <div class="col h-100 d-flex">
                                <form role="search" class="d-flex h-100 w-100" action="page-search-results.html"
                                    method="get">
                                    <div class="big-search-header input-group">
                                        <input class="form-control text-1" id="headerSearch" name="q"
                                            type="search" value="" placeholder="Type and hit enter...">
                                        <a href="#" class="header-nav-features-search-hide-icon"><i
                                                class="fas fa-times header-nav-top-icon"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            @yield('kontenfront')






        </div>

        <footer id="footer">
            <div class="container container-xl-custom">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <div class="row py-5 my-4">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper
                            scelerisque.</p>
                        <p class="mb-2">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis
                            ptent taciti sociosqu ad litora...</p>
                        <p class="mb-0"><a href="#"
                                class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW
                                    MORE</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <h5 class="text-3 mb-3">RECENT POSTS</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-3 pb-1">
                                <article class="d-flex">
                                    <a href="#">
                                        <img class="me-3 rounded-circle"
                                            src="{{ asset('frontend/img/office/our-office-4-square.jpg') }}"
                                            alt="" style="max-width: 70px;">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            <h6 class="text-3 text-color-light opacity-8 line-height-7 ls-0 mb-1">
                                                Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
                                            <p class="text-2 mb-0">12:53 AM Dec 19th</p>
                                        </a>
                                    </div>
                                </article>
                            </li>
                            <li class="d-flex">
                                <article class="d-flex">
                                    <a href="#">
                                        <img class="me-3 rounded-circle"
                                            src="{{ asset('frontend/img/office/our-office-5-square.jpg') }}"
                                            alt="" style="max-width: 70px;">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            <h6 class="text-3 text-color-light opacity-8 line-height-7 ls-0 mb-1">
                                                Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
                                            <p class="text-2 mb-0">12:53 AM Dec 19th</p>
                                        </a>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                        <h5 class="text-3 mb-3">RECENT COMMENTS</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 pb-1">
                                <a href="#">
                                    <p class="text-3 text-color-light opacity-8 mb-1"><i
                                            class="fas fa-angle-right text-color-primary"></i><strong
                                            class="ms-2">John Doe</strong> commented on <strong
                                            class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                    <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="text-3 text-color-light opacity-8 mb-1"><i
                                            class="fas fa-angle-right text-color-primary"></i><strong
                                            class="ms-2">John Doe</strong> commented on <strong
                                            class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                    <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <h5 class="text-3 mb-3">CATEGORIES</h5>
                        <p>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Gadgets</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Photography</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Lifestyle</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Fashion</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Recipes</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Travel</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Business</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Architecture</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Reviews</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Sports</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Videos</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Technology</span></a>
                            <a href="#"><span
                                    class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Design</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container container-xl-custom py-2">
                    <div class="row py-4">
                        <div
                            class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                            <a href="index.html" class="logo pe-0 pe-lg-3">
                                <img alt="Porto Website Template" src="{{ asset('frontend/img/logo-footer.png') }}"
                                    class="opacity-5" height="32">
                            </a>
                        </div>
                        <div
                            class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>© Copyright 2024. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                            <nav id="sub-menu">
                                <ul>
                                    <li><i class="fas fa-angle-right"></i><a href="page-faq.html"
                                            class="ms-1 text-decoration-none"> FAQ's</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="sitemap.html"
                                            class="ms-1 text-decoration-none"> Sitemap</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="contact-us.html"
                                            class="ms-1 text-decoration-none"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src=""
        data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher"
        aria-label="Style Switcher"><i class="fas fa-cogs"></i>
        <div class="style-switcher-tooltip"><strong>Style Switcher</strong>
            <p>Check out different color options and styles.</p>
        </div>
    </a>

    <!-- Vendor -->
    <script src="{{ asset('frontend/vendor/plugins/js/plugins.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/instafeed/instafeed.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('frontend/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('frontend/js/examples/examples.instagramFeed.js') }}"></script>

</body>

</html>
