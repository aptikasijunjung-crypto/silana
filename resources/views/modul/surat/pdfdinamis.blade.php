@extends('template')

@section('konten')
    <div class="row">
        <div class="col-md-8">
            <iframe src="data:application/pdf;base64,{{ $data }}" width="100%" height="600px" frameborder="0">
                Your browser does not support PDFs. Please download the PDF to view it: <a
                    href="data:application/pdf;base64,{{ $data }}">Download PDF</a>
            </iframe>
        </div>
        <div class="col-md-4">
           
        </div>
    </div>
@endsection
