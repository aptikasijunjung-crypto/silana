@extends('template')

@section('konten')
    @if (session()->has('kesalahan'))
        <code>{{ session('kesalahan') }}</code>
    @endif
    <div class="row">
        <div class="col-md-9">
            <iframe src="data:application/pdf;base64,{{ $data->files }}" width="100%" height="600px" frameborder="0">
                Your browser does not support PDFs. Please download the PDF to view it: <a
                    href="data:application/pdf;base64,{{ $data->files }}">Download PDF</a>
            </iframe>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('signature.surat') }}" method="POST">
                        @csrf
                        <input type="hidden" name="nomor" value="{{ $data->nomor }}">
                        <div class="form-group">
                            <label for="">Tanda Tangan</label>
                            <input type="text" name="passhprase" id="passhprase"
                                class="form-control
                            @error('passhprase')
                                is-invalid
                            @enderror"
                                placeholder="Passhprase">
                            @error('passhprase')
                                <code>{{ $message }}</code>
                            @enderror
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                    <a href="" class="btn btn-light-primary font-weight-bold">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
