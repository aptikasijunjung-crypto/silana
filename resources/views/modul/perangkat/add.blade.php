@extends('template')

@section('konten')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Input Data Perangkat</h3>
                </div>

                <form action="{{ route('perangkat.store') }}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Akses
                                <span class="text-danger">*</span></label>
                            <?= cKombo('akses_id', '* Pilih Akses', 'akses_id', 'akses_name', $data_akses, '#') ?>
                            <span class="form-text text-muted">Akses Perangkat</span>
                            @error('akses_id')
                                <code>{{ $message }}</code>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIK
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="* NIK">
                            @error('nik')
                                <code>{{ $message }}</code>
                            @enderror
                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label>Nama
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nama Perangkat">
                        </div>
                        <div class="form-group">
                            <label>Jabatan
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                placeholder="Nama Perangkat">
                        </div>
                        <div class="form-group">
                            <label>Tempat
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir">
                            <span class="form-text text-muted">Tempat Lahir</span>
                        </div>
                        <div class="form-group">
                            <label>Tanggal
                                <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" placeholder="* Tanggal Lahir">
                            <span class="form-text text-muted">Tempat Lahir</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ route('perangkat') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
