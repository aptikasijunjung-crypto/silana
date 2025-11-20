<iframe src="data:application/pdf;base64,{{ base64_encode(Storage::get($file)) }}" width="100%" height="600px"
    frameborder="0">
    Your browser does not support PDFs. Please download the PDF to view it: <a
        href="data:application/pdf;base64,{{ base64_encode(Storage::get($file)) }}">Download
        PDF</a>
</iframe>
