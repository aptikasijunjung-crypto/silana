@extends('template')

@section('konten')
    <form action="{{ route('store.surat') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Surat Keluar</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Surat Keluar tanpa Template</span>
                </h3>
            </div>

            <div class="card-body pt-5 pb-0 mt-n3">

                <div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" name="nomor" id="nama"
                        class="form-control @error('nomor')
                        is-invalid
                    @enderror"
                        placeholder="* Nomor">
                    @error('nomor')
                        <code>{{ $message }}</code>
                    @enderror
                    <span class="form-text text-muted">Some help content goes here</span>
                </div>
                <div class="form-group">
                    <label for="">Tentang</label>
                    <input type="text" name="tentang" id="tentang"
                        class="form-control @error('tentang')
                        is-invalid
                    @enderror"
                        placeholder="Tentang Surat" value="{{ old('tentang') }}">
                    @error('tentang')
                        <code>{{ $message }}</code>
                    @enderror
                    <span class="form-text text-muted">Some help content goes here</span>
                </div>
                <div class="form-group">
                    <label>File Browser</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file"
                            class="custom-file-input @error('files')
                            is-invalid
                        @enderror"
                            id="customFile" name="files">
                        <label class="custom-file-label selected" for="customFile">Only PDF File</label>
                        @error('files')
                            <code>{{ $message }}</code>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                <a href="" class="btn btn-light-primary font-weight-bold">Cancel</a>
            </div>
        </div>
    </form>
@endsection
