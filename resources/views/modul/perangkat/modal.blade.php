<form id="proses" onsubmit="return false;">
    @csrf
    <input type="hidden" value="{{ $kode }}" name="kode" id="kode">
    <input type="hidden" value="{{ $kelurahan_id }}" name="kelurahan_id" id="kelurahan_id">
    <input type="hidden" value="{{ $kode == 0 ? '' : $data->email }}" name="email_" id="email_">
    <div class="form-group">
        <label>Akses
            <span class="text-danger">*</span></label>
        <?= cKombo('akses_id', '* Pilih Akses', 'akses_id', 'akses_name', $data_akses, $kode == 0 ? '#' : $data->akses_id) ?>
        <span class="form-text text-muted">Akses Perangkat</span>

    </div>
    <div class="form-group">
        <label>NIK
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK"
            value="{{ $kode == 0 ? '' : $data->nik }}">
        <span class="form-text text-muted">Nomor Induk Kependudukan</span>
    </div>
    <div class="form-group">
        <label>Nama
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Perangkat"
            value="{{ $kode == 0 ? '' : $data->name }}">
    </div>
    <div class="form-group">
        <label>Email
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
            value="{{ $kode == 0 ? '' : $data->email }}">
    </div>
    <div class="form-group">
        <label>Password
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label>Jabatan
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan"
            value="{{ $kode == 0 ? '' : $data->jabatan }}">
    </div>
    <div class="form-group">
        <label>Tempat
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat" id="tempat"
            value="{{ $kode == 0 ? '' : $data->tempat }}">
        <span class="form-text text-muted">Tempat Lahir</span>
    </div>
    <div class="form-group">
        <label>Tanggal
            <span class="text-danger">*</span></label>
        <input type="date" class="form-control" placeholder="* Tanggal Lahir" name="tanggal" id="tanggal"
            value="{{ $kode == 0 ? '' : $data->tanggal }}">
        <span class="form-text text-muted">Tempat Lahir</span>
    </div>
    <div class="form-group">
        <label>Telp
            <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="* Telp" name="telp" id="telp"
            value="{{ $kode == 0 ? '' : $data->telp }}">
        <span class="form-text text-muted">Tempat Lahir</span>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Photo</label>
        <div class="col-10">
            <div class="image-input" id="kt_image_2">

                <div class="image-input-wrapper" id="showPhoto"
                    style="background-image: {{ empty($data->photo) ? 'url(data:image/png;base64,' . base64_encode(Storage::get('users/blank.png')) : 'url(data:image/png;base64,' . base64_encode(Storage::get('photos/' . $data->photo)) }}">
                </div>
                {{-- <div class="image-input-wrapper" id="showPhoto"
                    style="background-image: url(data:image/png;base64,{{ base64_encode(Storage::get('users/blank.png')) }}">
                </div> --}}

                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="files" accept=".png, .jpg, .jpeg" id="customFile">
                    <input type="hidden" name="profile_avatar_remove">
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>

        </div>
</form>

<script>
    $('form#proses').submit(function(e) {
        $.LoadingOverlay('show');
        e.preventDefault();
        var form = new FormData($(this)[0]);
        $.ajax({
            url: "{{ route('perangkat.store') }}",
            method: "POST",
            dataType: 'json',
            data: form,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.id == 0) {
                    komentar(0, 'Opps', data.komen);
                } else {
                    komentar(1, "Success", data.komen);
                    $('div.tabel').html(data.tabel);
                    $('#myModal').modal('hide');
                }
                $.LoadingOverlay('hide');
            },
            error: function(er) {}
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#customFile').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showPhoto').attr('style', 'background-image: url(' + e.target.result + ')');
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
