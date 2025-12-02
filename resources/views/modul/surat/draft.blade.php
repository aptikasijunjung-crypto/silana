



<div class="pdfjs-viewer" pdf-document="data:application/pdf;base64,{{ base64_encode(Storage::get($file)) }}"
    initial-zoom="fit"></div>

<script src="{{ asset('assets/js/pdfjs-viewer.js') }}"></script>
