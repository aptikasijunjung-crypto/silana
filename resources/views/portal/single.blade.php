@extends('portal.templatesingle')

@section('kontensingle')
    <div class="row">
        <div class="col">
            <div class="blog-posts single-post">

                <article class="post post-large blog-single-post border-0 m-0 p-0">
                    <div class="post-image ms-0">
                        <a href="blog-post.html">
                            <img src="data:image/png;base64, {{ base64_encode(Storage::get('gallery/' . $data->image_large)) }}"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </a>
                    </div>

                    <div class="post-date ms-0">
                        <span class="day">10</span>
                        <span class="month">Jan</span>
                    </div>

                    <div class="post-content ms-0">

                        <h2 class="font-weight-semi-bold"><a href="blog-post.html">{{ $data->title }}</a></h2>

                        <div class="post-meta">
                            <span><i class="far fa-user"></i> By <a href="#">{{ $data->name }}</a> </span>
                            <span><i class="far fa-folder"></i>
                                @php
                                    $ct = explode(',', $data->categories);
                                    $tampil = null;
                                    foreach ($ct as $i) {
                                        $tampil .= "<a href='#'>" . $i . '</a>, ';
                                    }
                                    echo rtrim($tampil, ', ');
                                @endphp
                            </span>

                        </div>

                        @php
                            echo $data->content;
                        @endphp

                        <div class="post-block mt-5 post-share">
                            <h4 class="mb-3">Share this Post</h4>

                            <!-- Go to www.addtoany.com to customize -->
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_x"></a>
                                <a class="a2a_button_copy_link"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->

                        </div>

                        <div class="post-block mt-4 pt-2 post-author">
                            <h4 class="mb-3">Author</h4>
                            <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                <a href="blog-post.html">
                                    <img src="img/avatars/avatar.jpg" alt="">
                                </a>
                            </div>
                            <p><strong class="name"><a href="#"
                                        class="text-4 pb-2 pt-2 d-block">{{ $data->name }}</a></strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod
                                odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in
                                adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis
                                placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                        </div>




                    </div>
                </article>

            </div>
        </div>
    </div>
@endsection
