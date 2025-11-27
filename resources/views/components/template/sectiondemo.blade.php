<section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
    <div class="container-fluid position-relative">
        <div class="filter-wrapper py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky
            data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">

            <div class="row">
                <div class="col-lg-8">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"
                        data-appear-animation-duration="750">
                        <ul class="nav nav-pills sort-source sort-source-style-3 mb-0" data-sort-id="portfolio"
                            data-option-key="filter"
                            data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false, 'filterFieldId': 'demoFilter'}">
                            <li class="nav-item active" data-option-value="*"><a
                                    class="nav-link ms-0 custom-nav-link active" href="#demos" data-hash
                                    data-hash-offset="0" data-hash-offset-lg="90">Show All</a>
                            </li>
                            <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">NEW</a></li>
                            <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">Classic</a>
                            </li>
                            <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">Shop</a></li>
                            <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">One Page</a>
                            </li>
                            <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">Business</a>
                            </li>
                            <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">Blog</a></li>
                            <li class="nav-item" data-option-value=".portfolio"><a class="nav-link custom-nav-link"
                                    href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="90">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-4 text-end">
                    <form action="#" class="search-form">
                        <input type="search" placeholder="Search Demo..." required="" id="demoFilter">
                        <button class="btn btn-search" title="search" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4 appear-animation animated fadeInUpShorter appear-animation-visible"
            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;""
            data-sort-id="portfolio">










            @php
                $data = DB::select('select * from kelurahan WHERE is_active IS NOT NULL');
            @endphp

            @foreach ($data as $item)
                <a target="blank" href="{{ route('portal.index', ['id' => $item->slug]) }}">
                    <div
                        class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms
                col-sm-6 col-md-4 col-lg-3 isotope-item portfolio portfolio-item">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $item->kelurahan_name }}</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                rhoncus
                                nulla dui, in dapi.</p>
                        </div>
                    </div>
                </a>
            @endforeach













        </div>
    </div>
</section>
