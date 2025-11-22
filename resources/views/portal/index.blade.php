@extends('portal.template')


@section('kontenfront')
    <section class="section border-0 m-0 pb-3">
        <div class="container container-xl-custom">
            <div class="row pb-1">

                @foreach ($berita6 as $item)
                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="{{ route('post.single', ['id' => $item->slug]) }}">
                            <article>
                                <div
                                    class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="data:image/png;base64, {{ base64_encode(Storage::get('gallery/' . $item->image_default)) }}"
                                            class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Photography
                                            </div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">
                                                    {{ $item->title }}</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    {{ Str::words(strip_tags($item->content), 25, '..') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

    <div class="container container-xl-custom">
        <div class="row py-5">
            <div class="col-md-6 col-lg-4">

                <h3 class="font-weight-bold text-3 mb-0">Popular Posts</h3>

                <ul class="simple-post-list">

                    @foreach ($popular as $pop)
                        <li>
                            <article>
                                <div class="post-image">
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <a href="blog-post.html">
                                            <img src="data:image/png;base64, {{ base64_encode(Storage::get('gallery/' . $pop->image_square)) }}"
                                                class="border-radius-0" width="50" height="50"
                                                alt="Simple Ways to Have a Pretty Face">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html"
                                            class="text-dark">{{ $pop->title }}</a></h4>
                                    <div class="post-meta">
                                        {{ facebook_time_ago($pop->created_at) }}
                                    </div>
                                </div>
                            </article>
                        </li>
                    @endforeach





                </ul>

            </div>
            <div class="col-md-6 col-lg-4">

                <h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Recent Posts</h3>

                <ul class="simple-post-list">
                    @php
                        $limit = 5;

                    @endphp
                    @foreach ($recent as $item)
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                    <a href="blog-post.html">
                                        <img src="data:image/png;base64,{{ base64_encode(Storage::get('gallery/' . $item->image_square)) }}"
                                            class="border-radius-0" width="50" height="50"
                                            alt="Main Reasons To Stop Texting And Driving">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html"
                                        class="text-dark">{{ $item->title }}</a></h4>
                                <div class="post-meta">
                                    {{ facebook_time_ago($item->created_at) }}
                                </div>
                            </div>
                        </li>
                    @endforeach




                </ul>

            </div>
            <div class="col-lg-4">

                <h3 class="font-weight-bold text-3 mt-4 mt-md-0">Featured Posts</h3>

                <div class="owl-carousel owl-theme"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 5000}">

                    @foreach ($ulang as $item)
                        <div>
                            <a href="blog-post.html">
                                <article>
                                    <div
                                        class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                        <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                            <img src="data:image/png;base64, {{ base64_encode(Storage::get('gallery/' . $item->image_large)) }}"
                                                class="img-fluid" alt="Why should I buy a smartwatch?">
                                            <div class="thumb-info-title bg-transparent p-4">
                                                <div class="thumb-info-type bg-color-primary px-2 mb-1">Gadgets
                                                </div>
                                                <div class="thumb-info-inner mt-1">
                                                    <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">
                                                        {{ $item->title }}</h2>
                                                </div>
                                                <div class="thumb-info-show-more-content">
                                                    <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                        {{ Str::words(strip_tags($item->content), 10, '...') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach



                </div>

                <h3 class="font-weight-bold text-3 mt-4 pt-2 mb-2 mt-4 mt-md-0">{{ session('logo')['kelurahan']->sebutan }}
                </h3>

                <div class="post-block post-author pt-2">
                    <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                        <a href="blog-post.html">
                            <img class="border-radius-0"
                                src="data:image/png;base64, {{ base64_encode(Storage::get('photos/' . session('logo')['kelurahan']->photo)) }}"
                                alt="The post author image"
                                style="height: 112px; max-height: 112px; width: auto; max-width: 100%;">
                        </a>
                    </div>
                    <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block text-dark">
                                {{ session('logo')['kelurahan']->kepala }}
                            </a></strong></p>
                    <p>{{ session('logo')['kelurahan']->komitmen }}</p>
                </div>

            </div>
        </div>
    </div>

    <section class="section bg-color-primary border-0 m-0">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel owl-theme nav-dark stage-margin nav-style-1 m-0"
                        data-plugin-options="{'items': 6, 'margin': 5, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">

                        @foreach ($categories as $item)
                            <div class="px-3">
                                <a href="#"
                                    class="btn btn-dark w-100 py-3 rounded-0 text-2 text-uppercase font-weight-bold">{{ $item->name }}</a>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom">

        <div class="row mt-5 pt-3">
            <div class="col-md-9">
                <div class="blog-posts">

                    @foreach ($berita74 as $item)
                        <article class="post post-large">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="data:image/png;base64,{{ base64_encode(Storage::get('gallery/' . $item->image_large)) }}"
                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                        alt="How to Make Friends as a Grown-Up" />
                                </a>
                            </div>

                            <div class="post-date text-1">
                                <span class="day border-radius-0 text-4 text-dark">12</span>
                                <span class="month border-radius-0 text-1 bg-color-dark">Jan</span>
                            </div>

                            <div class="post-content">

                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="blog-post.html"
                                        class="text-color-dark text-color-hover-primary">How
                                        to Make Friends as a
                                        Grown-Up</a></h2>
                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad
                                    litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui,
                                    tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id
                                    sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus
                                    eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus
                                    consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a
                                            href="#">Travel</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12
                                            Comments</a></span>
                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                            href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read
                                            More</a></span>
                                </div>

                            </div>
                        </article>
                    @endforeach









                    <ul class="pagination float-end">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar pb-4" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
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
                    <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank"
                        class="my-4 pt-3 d-block">
                        <img alt="Porto" class="img-fluid"
                            src="{{ asset('frontend/img/blog/blog-ad-1-medium.jpg') }}" />
                    </a>
                    <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
                    <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote>
                    </div>
                </aside>
            </div>
        </div>

    </div>
@endsection
