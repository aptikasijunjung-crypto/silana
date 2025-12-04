<a href="{{ route('download.pdf', ['id' => Crypt::encryptString($file)]) }}" target="blank"
    class="btn btn-primary btn-sm mr-3">
    Download
</a>


<div class="mt-3 pdfjs-viewer" pdf-document="data:application/pdf;base64,{{ base64_encode(Storage::get($file)) }}"
    initial-zoom="fit"></div>


<script src="{{ asset('assets/js/pdfjs-viewer.js') }}"></script>
