<!DOCTYPE html>
<html lang="en">

<x-template.head></x-template.head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="wrapper-pulse">
                <div class="cssload-pulse-loader"></div>
            </div>
        </div>
    </div>

    <div class="body">
        <header id="header" class="header-transparent header-effect-shrink custom-header-1"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none">
                <div class="header-container container-fluid">
                    <div class="header-row p-relative px-0">
                        <div class="header-column px-lg-3">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="index.html"><img alt="Porto" width="120" height="58"
                                            data-sticky-width="82" data-sticky-height="40" data-sticky-top="0"
                                            src="{{ asset('frontend/img/logo-default-slim-dark.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column w-100 ms-2 ms-xl-5 ps-2 pe-lg-3">
                            <div class="header-row justify-content-end justify-content-lg-start">
                                <div class="header-nav header-nav-links header-nav-light-text justify-content-lg-start">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-mobile-dark header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-5 header-nav-main-arrows header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        {{-- menu --}}
                                        <x-template.menu></x-template.menu>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="d-none d-xxl-flex custom-header-1-extra-links">
                                        <ul class="nav me-3 mt-1 ">
                                            <li class="nav-item">
                                                <a class="nav-link text-color-light text-2 font-weight-semibold"
                                                    target="_blank"
                                                    href="https://www.okler.net/open-a-ticket/">Support</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-color-light text-2 font-weight-semibold"
                                                    target="_blank" href="docs/">Documentation</a>
                                            </li>
                                        </ul>


                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            <section
                class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0"
                id="section-concept"
                style="background-image: url({{ asset('frontend/img/landing/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
                <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
                <x-template.container1></x-template.container1>
                <x-template.container2></x-template.container2>

            </section>

            <x-template.sectionintro></x-template.sectionintro>

            <hr>

            <x-template.sectiondemo></x-template.sectiondemo>
            <x-template.sectiongeneration></x-template.sectiongeneration>
            <x-template.sectionreason></x-template.sectionreason>
            <x-template.sectionporto></x-template.sectionporto>
            <x-template.sectionperformance></x-template.sectionperformance>
            <x-template.sectionfocus></x-template.sectionfocus>
            <x-template.sectionlibrary></x-template.sectionlibrary>



            

            

            

            

            

            <section class="section section-funnel position-relative border-0 pt-0 m-0">
                <div class="container pb-5 mb-5">
                    <h2 class="fotn-weight-extra-bold mb-1 text-center">
                        <b class="text-13 d-block line-height-1 font-weight-extra-bold appear-animation"
                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                            data-appear-animation-duration="750">50K+</b>
                        <span class="font-weight-bold text-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="600" data-appear-animation-duration="750">People Already
                            Using Porto</span>
                    </h2>
                    <p class="font-weight-bold text-4 text-center appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">100K+ IN ALL PORTO
                        VERSIONS</p>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="850" data-appear-animation-duration="850">
                        <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">TOP 5 STAR
                            RATING</h5>
                        <p class="text-default text-center mb-4">Real people, real stories. Hear from our community.
                        </p>

                        <div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3"
                            data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">onealbs</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"I have purchased this template four times for different projects
                                    and will soon be purchasing my fifth. This options for this template are limitless
                                    and customer service is amazing!"</p>
                            </div>
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">mrmelton</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"This template is pure joy to work with and customize. Everything is
                                    designed so clearly and it just makes your life easier to design a site. Highly
                                    recommend."</p>
                            </div>
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">daniyal1997</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"This theme continues to blow my mind! I can't believe how many
                                    features and layouts that are included and yet how elegantly it's all executed
                                    underneath."</p>
                            </div>
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">alfvlx</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"The best template i had work on!!!!!"</p>
                            </div>
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">marcoss2009</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"The best theme in Themeforest. I like it because I can customize it
                                    without problems."</p>
                            </div>
                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">moirajanetallen</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"Very impressed with the great customer support."</p>
                            </div>

                            <div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                    <div class="author">
                                        <h4 class="text-5 mb-0">majstro7</h4>
                                        <span class="opacity-7">Themeforest User</span>
                                    </div>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                        <i class="fas fa-star text-color-dark"></i>
                                    </span>
                                </div>
                                <p class="mb-0">"Good code quality ! Very fast and good support ! I recommended it
                                    in 100% !"</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-5"><a
                            class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation"
                            data-appear-animation="fadeIn" data-appear-animation-delay="250"
                            data-appear-animation-duration="600"
                            href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler"
                            target="_blank">BUY PORTO NOW</a></p>
                </div>
                <div class="section-funnel-layer-bottom">
                    <div class="section-funnel-layer bg-light"></div>
                    <div class="section-funnel-layer bg-light"></div>
                </div>
            </section>

            <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
                <div class="container pb-5 mb-5">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                            <h2 class="font-weight-bold text-9 mb-1">Professional Support</h2>
                            <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">ONLINE
                                DOCUMENTATION, VIDEOS AND FORUM</h5>
                            <p class="ls-0 text-default fw-400 mb-5">Any problem while using Porto? We're here to help
                                you.</p>
                            <div
                                class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                                <i
                                    class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                                <p class="mb-0"><b class="text-color-dark">Online Documentation -</b> Contains all
                                    descriptions related to Porto usage and features.</p>
                            </div>
                            <div
                                class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                                <i
                                    class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                                <p class="mb-0 mb-0 opacity-5"><b class="text-color-dark">Video Documentation
                                        (coming soon) -</b> Need visual instructions? Check our video tutorials.</p>
                            </div>
                            <div class="d-flex align-items-center pb-4 mb-4">
                                <i
                                    class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                                <p class="mb-0"><b class="text-color-dark">Support Center -</b> Contact us if you
                                    get any issue while using Porto, reply within 16 hrs.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-2 position-relative">
                            <div class="appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="500">
                                <img class="img-fluid lazyload" src="img/lazy.png"
                                    data-src="img/landing/porto_dots2.png" alt=""
                                    style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
                            </div>
                            <img alt="Porto Support" src="img/lazy.png" data-src="img/landing/support_login.jpg"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="200"
                                style="width: 590px; max-width: none;">
                            <img alt="Porto Documentation" src="img/lazy.png" data-src="img/landing/porto_docs.jpg"
                                class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="700"
                                style="left: -100px; bottom: 50px;">
                        </div>
                    </div>
                </div>
                <div class="section-angled-layer-bottom section-angled-layer-increase-angle"
                    style="padding: 4rem 0; background: #222529;"></div>
            </section>

            <section class="section bg-dark section-dark border-0 m-0">
                <div class="container">
                    <div class="text-center mb-5">
                        <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"
                            data-appear-animation-duration="750">POWERFUL AND COMPLETE</h5>
                        <h2 class="font-weight-bold text-9 mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">Premium Plugins and Features</h2>
                        <p class="custom-text-color-1 color-inherit appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850"
                            data-appear-animation-duration="750">Create your website using premium included plugins
                            and Porto's exclusive features.<br>It’s incredibly easy and fun to build and mantain your
                            website design and content.</p>
                    </div>
                    <div class="row pb-5">
                        <div class="col-12 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="700" data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-plugin-2 mb-3"></i>
                                <h4 class="text-4 mb-2 font-weight-bold">Slider Revolution</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Slider Revolution is truely
                                    #1 popular slider plugin that has 'no competitor'. This plugin is being sold on
                                    codecanyon.net store exclusively. You can get the plugin for free once you purchase
                                    Porto. Porto offers many beautiful slider sample contents that you can choose and
                                    apply on your website. You can alse create new sliders easily.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-1 mt-4"></i>
                                <h4 class="text-4 mb-2">Top Level Support</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">You can expect high technical
                                    reply within 24 hrs, average response time is 14 hrs. Customer satisfication is our
                                    main focus. You won't be alone using Porto.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-2 mt-4"></i>
                                <h4 class="text-4 mb-2">100% Fully Responsive</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Not only working fine on any
                                    screen resolutions, Porto offers very beautiful layouts and avoid any heaviness for
                                    small resolutions.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-3 mt-4"></i>
                                <h4 class="text-4 mb-2">Easy To Customize</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto was created to be very
                                    easy to edit and customize. The source code is organized to help any pro or beginner
                                    developer.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-17 mt-4"></i>
                                <h4 class="text-4 mb-2">Functional Forms</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several
                                    functional contact forms, it's very easy to customize and set your email and fields
                                    in any page.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-5 mt-4"></i>
                                <h4 class="text-4 mb-2">Retina Ready</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works fine with any
                                    retina devices, we've fully tested Porto on all retina resolutions including laptops
                                    and mobile devices.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-6 mt-4"></i>
                                <h4 class="text-4 mb-2">Bootstrap Based</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is based on Bootstrap,
                                    the most popular CSS Framework for developing responsive and mobile-first websites.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-7 mt-4"></i>
                                <h4 class="text-4 mb-2">One and Multi Pages</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto has a bunch of demos
                                    with the possibility to create one and multi pages websites.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-8 mt-4"></i>
                                <h4 class="text-4 mb-2">Headers and Menus</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several
                                    headers and menus options for you to use on your website.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-9 mt-4"></i>
                                <h4 class="text-4 mb-2">eCommerce Templates</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Exclusive layouts and
                                    features makes you to create your online store and sell online.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-10 mt-4"></i>
                                <h4 class="text-4 mb-2">CSS3 Animations</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is always keen to
                                    update latest css 3 technologies, you can see nice and exclusive css3 animation
                                    effects through demos.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-11 mt-4"></i>
                                <h4 class="text-4 mb-2">Unlimited Colors &amp; Skins</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">You can configure any color
                                    you want, for entire site or certain sections using our exclusive style switcher.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-12 mt-4"></i>
                                <h4 class="text-4 mb-2">SEO Friendly</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">SEO Friendly is one of our
                                    top priorities while working on Porto improvements, you can expect high seo
                                    performance while using Porto.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-13 mt-4"></i>
                                <h4 class="text-4 mb-2">Optimized for Speed</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Everything is oriented for
                                    high speed performance based in the best code standards.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-18 mt-4"></i>
                                <h4 class="text-4 mb-2">Ajax Ready + Lazy Load</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works perfectly with
                                    ajax laoding and also lazy load for a better performance.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-15 mt-4"></i>
                                <h4 class="text-4 mb-2">RTL Support</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Fully compatible with Right
                                    to Left languages, always check this feature before our version update.</p>
                            </div>
                        </div>
                        <div class="d-flex col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="800" data-appear-animation-duration="750">
                            <div class="bg-color-dark-100 rounded p-5">
                                <i class="icon-bg icon-feature-19 mt-4"></i>
                                <h4 class="text-4 mb-2">Social Integration</h4>
                                <p class="custom-text-color-1 text-3 color-inherit mb-0">Social media integration is
                                    easy with Porto. You can also configure Twitter and Instagram feeds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="section section-elements m-0 section-no-border bg-bottom-slash position-relative z-index-1">
                <div class="container text-center mt-4">
                    <h2 class="font-weight-bold text-9 mb-2">Porto Elements</h2>
                    <p class="text-4 mb-5">Porto is simply a better choice for your new website design.</p>

                    <div class="row justify-content-center">

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-accordions.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-bars"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-bars"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Accordions</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-toggles.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-indent"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-indent"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Toggles</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-tabs.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-columns"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-columns"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tabs</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-icons.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-check"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-check"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icons</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-icon-boxes.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-check-circle"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-check-circle"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icon
                                                Boxes</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-carousels.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-ellipsis-h"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-ellipsis-h"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Carousels</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-modals.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-expand"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-expand"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Modals</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-lightboxes.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-clone"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-clone"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lightboxes</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-buttons.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-minus"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-minus"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Buttons</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-badges.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-stream"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-stream"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Badges</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-lists.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-list-ul"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-list-ul"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lists</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-cards.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fab fa-buffer"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fab fa-buffer"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cards</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-image-gallery.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-file-image"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-file-image"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image
                                                Gallery</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-image-frames.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-image"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-image"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image
                                                Frames</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-image-hotspots.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-hand-point-up"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-hand-point-up"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image
                                                Hotspots</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-testimonials.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-comments"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-comments"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Testimonials</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-blockquotes.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-quote-left"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-quote-left"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Blockquotes</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-word-rotator.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fab fa-autoprefixer"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fab fa-autoprefixer"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Word
                                                Rotator</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-before-after.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-arrows-alt-h"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-arrows-alt-h"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Before
                                                / After</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-typography.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-font"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-font"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Typography</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-call-to-action.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-external-link-alt"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-external-link-alt"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Call
                                                to Action</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-pricing-tables.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-dollar-sign"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-dollar-sign"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Pricing
                                                Tables</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-tables.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-table"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-table"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tables</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-progressbars.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-chart-bar"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-chart-bar"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Progress
                                                Bars</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-process.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-bullseye"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-bullseye"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Process</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-counters.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-sort-numeric-down"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-sort-numeric-down"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Counters</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-countdowns.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-clock"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-clock"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Countdowns</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-content-rotate.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-retweet"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-retweet"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Countdowns</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-sections.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-square"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-square"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sections</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-parallax.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-images"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-images"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">
                                                Parallax</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-tooltips-popovers.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-comment-alt"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-comment-alt"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tooltips
                                                &amp; Popovers</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-sticky-elements.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-compress"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-compress"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sticky
                                                Elements</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-headings.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-text-height"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-text-height"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Headings</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-dividers.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-align-center"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-align-center"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Dividers</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-animations.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-asterisk"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-asterisk"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Animations</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-particles.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-atom"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-atom"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Particles</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-medias.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-play-circle"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-play-circle"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Medias</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-maps.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-map"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-map"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Maps</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-arrows.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-arrow-alt-circle-right"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-arrow-alt-circle-right"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Arrows</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-star-ratings.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-star"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-star"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Star
                                                Ratings</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-alerts.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-exclamation-triangle"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-exclamation-triangle"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Alerts</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-posts.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-calendar-alt"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-calendar-alt"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Posts</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-forms.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-file-alt"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-file-alt"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Forms</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-360-image-viewer.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-sync-alt"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-sync-alt"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">360º
                                                Image Viewer</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-shape-dividers.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-divide"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-divide"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Shape
                                                Dividers</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-read-more.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-plus-square"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-plus-square"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Read
                                                More</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-cascading-images.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="far fa-images"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="far fa-images"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cascading
                                                Images</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2">
                            <div
                                class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                                <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                                    <a href="elements-random-images.html" class="text-decoration-none">
                                        <span class="box-content px-1 py-4 text-center d-block">
                                            <span class="text-primary text-8 position-relative top-3 mt-3"><i
                                                    class="fas fa-random"></i></span>
                                            <span class="elements-list-shadow-icon text-default"><i
                                                    class="fas fa-random"></i></span>
                                            <span
                                                class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Random
                                                Images</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section section-dark section-angled border-0 lazyload pb-0 m-0"
                style="background-size: 100%; background-position: top;" data-bg-src="img/landing/build_bg.jpg">
                <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-grey"
                    style="padding: 4rem 0;"></div>
                <div class="container text-center my-5 py-5">
                    <h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"
                        data-appear-animation-duration="750">Build your website with Porto</h2>
                    <h4 class="font-weight-bold text-9 mb-4 pb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                        data-appear-animation-duration="750">Purchase now. Only <span
                            class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate highlighted-word-animation-1 highlighted-word-animation-1-light alternative-font-4 font-weight-extra-bold text-4 light appear-animation"
                            data-appear-animation="blurIn" data-appear-animation-delay="800"
                            data-appear-animation-duration="750">$14!</span></h4>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="900" data-appear-animation-duration="750">
                        <h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8">Porto
                            Template has been available on ThemeForest since 2013 and is one of the top sellers with
                            more than 50K+ sales.</h4>
                    </div>
                    <div class="col-12 px-0 pb-2 mb-4">
                        <div class="row flex-column flex-lg-row justify-content-center">
                            <div class="col-auto">
                                <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100"
                                    data-appear-animation-duration="750"><i class="fa fa-check"></i> SUPER HIGH
                                    PERFORMANCE</h5>
                            </div>
                            <div class="col-auto mx-5 my-2 my-lg-0">
                                <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400"
                                    data-appear-animation-duration="750"><i class="fa fa-check"></i> STRICT CODING
                                    STANDARDS</h5>
                            </div>
                            <div class="col-auto">
                                <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600"
                                    data-appear-animation-duration="750"><i class="fa fa-check"></i> FREE LIFETIME
                                    UPDATES</h5>
                            </div>
                        </div>
                    </div>
                    <a href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler"
                        class="btn btn-dark btn-modern btn-rounded px-5 btn-py-3 text-4 appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="1800"
                        data-appear-animation-duration="750" target="_blank">BUY PORTO NOW</a>
                </div>
                <div class="row border border-start-0 border-bottom-0 border-end-0 border-color-light-2">
                    <div class="col-6 col-md-3 text-center d-flex align-items-center justify-content-center py-4">
                        <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                                <i class="icon-bg icon-menu-1"></i>
                                <h4 class="text-4 mb-0">Customer Showcase<small
                                        class="d-block p-relative bottom-4 opacity-6 ls-0">(SAMPLE SITES)</small></h4>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                        <a href="http://www.okler.net/open-a-ticket/" class="text-decoration-none"
                            target="_blank">
                            <div class="icon-box">
                                <i class="icon-bg icon-menu-2"></i>
                                <h4 class="text-4 mb-0">Support Center</h4>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                        <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                                <i class="icon-bg icon-menu-3"></i>
                                <h4 class="text-4 mb-0">Online Documentation</h4>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4 opacity-5">
                        <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                                <i class="icon-bg icon-menu-4"></i>
                                <h4 class="font-weight-500 text-color-light line-height-1 text-4 mt-0 mb-2">Video
                                    Tutorials<br><span class="text-2 d-block pt-1">(coming soon)</span></h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section bg-color-dark-100 border-0 m-0 py-4">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul
                                class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
                                <li class="list-inline-item custom-text-color-1 color-inherit mb-lg-0 text-2 pe-2">
                                    Porto Versions:</li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">ADMIN HTML</a></li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-ecommerce-shop-template/22685562"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">SHOP HTML</a></li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-responsive-wordpress-ecommerce-theme/9207399"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">WORDPRESS</a></li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">MAGENTO</a></li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-ultimate-responsive-shopify-theme/19162959"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">SHOPIFY</a></li>
                                <li class="list-inline-item mb-lg-0"><a
                                        href="https://themeforest.net/item/porto-responsive-drupal-7-theme/5219986"
                                        class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0"
                                        target="_blank">DRUPAL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer"
            class="bg-color-dark-100 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
            <div class="container text-center my-3 py-5">
                <a href="index.html">
                    <img src="img/lazy.png" data-src="img/landing/logo.png" width="102" height="45"
                        class="appear-animation lazyload mb-4" alt="Porto" data-appear-animation="fadeIn"
                        data-appear-animation-delay="300">
                </a>
                <p class="text-4 mb-4">Porto is exclusively available on themeforest.net by <a
                        href="https://themeforest.net/user/okler/" class="text-color-light text-decoration-none"
                        target="_blank">Okler.</a></p>
                <ul class="social-icons social-icons-big social-icons-dark-2">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i
                                class="fab fa-x-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="copyright bg-color-dark-100 py-4">
                <div class="container text-center py-2">
                    <p class="mb-0 text-2">Copyright 2013 - 2024 - Porto - All Rights Reserved</p>
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

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('frontend/js/views/view.landing.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('frontend/js/theme.init.js') }}"></script>

</body>

</html>
