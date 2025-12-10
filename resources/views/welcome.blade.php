<!DOCTYPE html>
<html lang="en">

<x-utama.header></x-utama.header>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">


        <x-utama.menu></x-utama.menu>
        <div role="main" class="main pt-3 mt-3">
            <div class="container">
                <div class="row pb-1">

                    <x-utama.terbaru></x-utama.terbaru>

                    <x-utama.topthree></x-utama.topthree>
                </div>
                <div class="row pb-1 pt-2">

                    <div class="col-md-9">




                        <x-utama.body></x-utama.body>

                        <div class="text-center py-3 mb-4">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987"
                                target="_blank" class="d-block">
                                <img alt="Porto" class="img-fluid ps-3"
                                    src="{{ asset('frontend/') }}img/blog/blog-ad-3.jpg" />
                            </a>
                        </div>

                        <x-utama.popular></x-utama.popular>

                    </div>

                    <div class="col-md-3">

                        <h3 class="font-weight-bold text-3 pt-1">Featured Posts</h3>

                        <div class="pb-2">

                            <div class="mb-4 pb-2">
                                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html">
                                                <img src="{{ 'frontend/' }}img/blog/default/blog-65.jpg"
                                                    class="img-fluid border-radius-0"
                                                    alt="Main Reasons To Stop Texting And Driving">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="blog-post.html"
                                                        class="text-decoration-none text-color-default">January 12,
                                                        2020</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="blog-post.html"
                                                        class="text-decoration-none text-color-dark text-color-hover-primary">Main
                                                        Reasons To Stop Texting And Driving</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="mb-4 pb-2">
                                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html">
                                                <img src="{{ 'frontend/' }}img/blog/default/blog-66.jpg"
                                                    class="img-fluid border-radius-0"
                                                    alt="Tips to Help You Quickly Prepare your Lunch">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="thumb-info-caption-text">
                                                <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                    <a href="blog-post.html"
                                                        class="text-decoration-none text-color-default">January 12,
                                                        2020</a>
                                                </div>
                                                <h4
                                                    class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                    <a href="blog-post.html"
                                                        class="text-decoration-none text-color-dark text-color-hover-primary">Tips
                                                        to Help You Quickly Prepare your Lunch</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>

                        <aside class="sidebar pb-4">
                            <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
                            <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div>
                            <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
                            <div class="mb-3 pb-1">
                                <a href="#"><span
                                        class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">design</span></a>
                                <a href="#"><span
                                        class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">brands</span></a>
                                <a href="#"><span
                                        class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">video</span></a>
                                <a href="#"><span
                                        class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">business</span></a>
                                <a href="#"><span
                                        class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">travel</span></a>
                            </div>
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987"
                                target="_blank" class="my-4 pt-3 d-block">
                                <img alt="Porto" class="img-fluid"
                                    src="{{ 'frontend/' }}img/blog/blog-ad-1-medium.jpg" />
                            </a>
                            <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
                            <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/"
                                data-small-header="true" data-adapt-container-width="true" data-hide-cover="true"
                                data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote>
                            </div>
                        </aside>

                        <h5 class="font-weight-semi-bold pt-1">Recent Comments</h5>

                        <ul class="list-unstyled mb-4 pb-1 pt-2">

                            <li class="pb-3 text-2">
                                <a href="#" rel="external nofollow" class="font-weight-bold text-dark">John
                                    Doe</a> on <a href="blog-post.html" class="text-dark">Main Reasons To Stop
                                    Texting And Driving</a>
                            </li>

                            <li class="pb-3 text-2">
                                <a href="#" rel="external nofollow" class="font-weight-bold text-dark">John
                                    Doe</a> on <a href="blog-post.html" class="text-dark">Tips to Help You Quickly
                                    Prepare your Lunch</a>
                            </li>

                            <li class="pb-3 text-2">
                                <a href="#" rel="external nofollow" class="font-weight-bold text-dark">John
                                    Doe</a> on <a href="blog-post.html" class="text-dark">Why should I buy a
                                    smartwatch?</a>
                            </li>

                            <li class="pb-3 text-2">
                                <a href="#" rel="external nofollow" class="font-weight-bold text-dark">John
                                    Doe</a> on <a href="blog-post.html" class="text-dark">The best augmented reality
                                    smartglasses</a>
                            </li>

                            <li class="pb-3 text-2">
                                <a href="#" rel="external nofollow" class="font-weight-bold text-dark">John
                                    Doe</a> on <a href="blog-post.html" class="text-dark">12 Healthiest Foods to Eat
                                    for Breakfast</a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>

        </div>

        <footer id="footer">
            <div class="container">
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
                                            src="{{ 'frontend/' }}img/office/our-office-4-square.jpg" alt=""
                                            style="max-width: 70px;">
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
                                            src="{{ 'frontend/' }}img/office/our-office-5-square.jpg" alt=""
                                            style="max-width: 70px;">
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
                <div class="container py-2">
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
