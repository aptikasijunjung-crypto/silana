 @php
     $terbaru = DB::select(
         'SELECT id, title, content, image_large, image_middle FROM posts ORDER BY created_at DESC',
     )[0];

 @endphp

 <div class="col-lg-7 mb-4 pb-2">
     <a href="#">
         <article
             class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
             <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                 <img src="data:image/png;base64,{{ base64_encode(Storage::get('gallery/' . $terbaru->image_middle)) }}"
                     class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
                 <div class="thumb-info-title bg-transparent p-4">
                     <div class="thumb-info-type bg-color-dark px-2 mb-1">Photography</div>
                     <div class="thumb-info-inner mt-1">
                         <h2 class="font-weight-bold text-color-light line-height-2 text-5 mb-0">
                             {{ $terbaru->title }}</h2>
                     </div>
                     <div class="thumb-info-show-more-content">
                         <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                             {{ Str::words(strip_tags($terbaru->content), 25, '..') }}
                         </p>
                     </div>
                 </div>
             </div>
         </article>
     </a>
 </div>
