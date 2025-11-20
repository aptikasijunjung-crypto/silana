<div class="header-column justify-content-start">
    <div class="header-row">
        <h1 class="header-logo">
            <a href="index.html">
                {{-- <img alt="Porto" width="100" height="48" src="{{ asset('frontend/img/logo-default-slim.png') }}"> --}}
                {{-- <span class="hide-text">Porto - Demo Blog 1</span> --}}
                {{ $slot }}
            </a>
        </h1>
    </div>
</div>
<div class="header-column justify-content-end w-75">
    <div class="header-row">
        {{-- <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">
            <img alt="Porto" class="img-fluid ps-3" src="{{ asset('frontend/img/blog/blog-ad-2.jpg') }}" />
        </a> --}}
        {{ $banner }}
    </div>
</div>
