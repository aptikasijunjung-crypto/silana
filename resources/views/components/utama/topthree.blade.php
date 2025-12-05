<div class="col-lg-5">

    @php
        $data = DB::select('SELECT id, title, image_middle, image_default FROM posts LIMIT 1,3');

    @endphp

    @foreach ($data as $item)
        <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
            <div class="row align-items-center pb-1">
                <div class="col-sm-5">
                    <a href="blog-post.html">
                        <img src="data:image/png;base64,{{ base64_encode(Storage::get('gallery/' . $item->image_default)) }}"
                            class="img-fluid border-radius-0" alt="Simple Ways to Have a Pretty Face">
                    </a>
                </div>
                <div class="col-sm-7 ps-sm-1">
                    <div class="thumb-info-caption-text">
                        <div
                            class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                            <a href="blog-post.html" class="text-decoration-none text-color-light">Photography</a>
                        </div>
                        <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                            <a href="blog-post.html"
                                class="text-decoration-none text-color-dark text-color-hover-primary">{{ $item->title }}</a>
                        </h2>
                    </div>
                </div>
            </div>
        </article>
    @endforeach





</div>
