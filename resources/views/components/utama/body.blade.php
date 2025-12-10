@php
    $categories = DB::select('SELECT a.id, a.name, c.title, c.image_middle, c.id as postid FROM categories a LEFT JOIN posts_categories b ON
    a.id=b.categories_id 
    LEFT JOIN posts c ON b.posts_id=c.id
    ORDER BY rand() LIMIT 3');
@endphp

@foreach ($categories as $item)
    <div class="heading heading-border heading-middle-border">
        <h3 class="text-4"><strong
                class="font-weight-bold text-1 px-3 text-light py-2 bg-secondary">{{ $item->name }}</strong>
        </h3>
    </div>
    <div class="row pb-1">

        <div class="col-lg-6 mb-4 pb-1">
            <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                <div class="row">
                    <div class="col">
                        <a href="blog-post.html">
                            <img src="data:image/jpg;base64, {{ base64_encode(Storage::get('gallery/' . $item->image_middle)) }}"
                                class="img-fluid border-radius-0" alt="Why should I buy a smartwatch?">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="thumb-info-caption-text">
                            <div class="d-inline-block text-default text-1 mt-2 float-none">
                                <a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
                                    2020</a>
                            </div>
                            <h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                <a href="blog-post.html"
                                    class="text-decoration-none text-color-dark text-color-hover-primary">{{ $item->title }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <div class="col-lg-6">
            @php
                $ci = $item->id;
                $data_item = DB::select(
                    'SELECT a.id, a.image_middle, a.title FROM posts a,  posts_categories b  WHERE a.id=b.posts_id AND b.categories_id = ? 
                    AND a.id NOT IN (?) LIMIT 3',
                    [$ci, $item->postid],
                );
            @endphp

            @foreach ($data_item as $berita)
                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-4">
                            <a href="blog-post.html">
                                <img src="data:image/jpg;base64, {{ base64_encode(Storage::get('gallery/' . $berita->image_middle)) }}"
                                    class="img-fluid border-radius-0"
                                    alt="Gadgets That Make Your Smartphone Even Smarter">
                            </a>
                        </div>
                        <div class="col-sm-8 ps-sm-0">
                            <div class="thumb-info-caption-text">
                                <div class="d-inline-block text-default text-1 float-none">
                                    <a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
                                        2020</a>
                                </div>
                                <h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                    <a href="blog-post.html"
                                        class="text-decoration-none text-color-dark text-color-hover-primary">{{ $berita->title }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach




        </div>
    </div>
@endforeach
