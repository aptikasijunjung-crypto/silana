<form id="proses" onsubmit="return false;">
    @csrf
    <input type="hidden" name="kode" id="kode" value="{{ $data['id'] }}">
    <input type="hidden" name="warga_id" id="warga_id" value="{{ $data['warga_id'] }}">
    <div class="form-group row">
        <label class="col-2 col-form-label">NIK</label>
        <div class="col-10">
            <input class="form-control" type="text" name="nik" id="nik" placeholder="NIK"
                value="{{ $data['id'] == 0 ? '' : $data['data']->nik }}">
            <span class="form-text text-muted">Nomor Induk Kependudukan</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">NOKK</label>
        <div class="col-10">
            <input class="form-control" type="text" name="nokk" id="nokk" placeholder="NOKK"
                value="{{ $data['id'] == 0 ? '' : $data['data']->nik }}">
            <span class="form-text text-muted">Nomor Kartu Keluarga</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Nama Lengkap</label>
        <div class="col-10">
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Penduduk"
                value="{{ $data['id'] == 0 ? '' : $data['data']->nama }}">
            <span class="form-text text-muted">Nama Lengkap Penduduk</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Tempat Lahir</label>
        <div class="col-10">
            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Tempat Lahir"
                value="{{ $data['id'] == 0 ? '' : $data['data']->tempat }}">
            <span class="form-text text-muted">Tempat Lahir</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Tanggal Lahir</label>
        <div class="col-10">
            <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="Tanggal"
                value="{{ $data['id'] == 0 ? '' : $data['data']->tanggal }}">
            <span class="form-text text-muted">Tanggal Lahir</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Jenis Kelamin</label>
        <div class="col-10">
            @php
                $data_sex = App\Models\Sex::all();
            @endphp
            <?= cKombo('sex_id', '* Pilih Jenis Kelamin', 'id', 'nama', $data_sex, $data['id'] == 0 ? '#' : $data['data']->sex_id) ?>
            <span class="form-text text-muted">Jenis Kelamin</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Agama</label>
        <div class="col-10">
            @php
                $data_agama = App\Models\Agama::all();
            @endphp
            <?= cKombo('agama_id', '* Pilih Agama', 'id', 'nama', $data_agama, $data['id'] == 0 ? '#' : $data['data']->agama_id) ?>
            <span class="form-text text-muted">Pilih Agama</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Pekerjaan</label>
        <div class="col-10">
            @php
                $data_pekerjaan = App\Models\Pekerjaan::all();
            @endphp
            <?= cKombo('pekerjaan_id', '* Pilih Pekerjaan', 'id', 'nama', $data_pekerjaan, $data['id'] == 0 ? '#' : $data['data']->pekerjaan_id) ?>
            <span class="form-text text-muted">Pilih Pekerjaan Penduduk</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Pendidikan</label>
        <div class="col-10">
            @php
                $data_pendidikan = App\Models\Pendidikan::all();
            @endphp
            <?= cKombo('pendidikan_id', '* Pilih Pendidikan', 'id', 'nama', $data_pendidikan, $data['id'] == 0 ? '#' : $data['data']->pendidikan_id) ?>
            <span class="form-text text-muted">Pilih Pendidikan</span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label">Status Perkawinan</label>
        <div class="col-10">
            @php
                $data_kawin = App\Models\Kawin::all();
            @endphp
            <?= cKombo('kawin_id', '* Pilih Status Perkawinan', 'id', 'nama', $data_kawin, $data['id'] == 0 ? '#' : $data['data']->kawin_id) ?>
            <span class="form-text text-muted">Pilih Status Perkawinan</span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label">Handphone</label>
        <div class="col-10">
            <input class="form-control" type="text" name="telp" id="telp" placeholder="Telp"
                value="{{ $data['id'] == 0 ? '' : $data['data']->telp }}">
            <span class="form-text text-muted">Nomor Telp</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Penghasilan</label>
        <div class="col-10">
            <input class="form-control" type="text" name="penghasilan" id="penghasilan" placeholder="Penghasilan"
                value="{{ $data['id'] == 0 ? '' : $data['data']->penghasilan }}">
            <span class="form-text text-muted">Perkiraan Penghasilan</span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label">Kedudukan</label>
        <div class="col-10">
            @php
                $data_kedudukan = App\Models\Kedudukan::all();
            @endphp
            <?= cKombo('kedudukan_id', '* Pilih Kedudukan', 'id', 'nama', $data_kedudukan, $data['id'] == 0 ? '#' : $data['data']->kedudukan_id) ?>
            <span class="form-text text-muted">Kedudukan</span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label">Photo</label>
        <div class="col-10">
            <div class="image-input" id="kt_image_2">
                {{-- <div class="image-input-wrapper" id="showPhoto"
                    style="background-image: url(assets/media/users/100_2.jpg)"></div> --}}
                {{-- <div class="image-input-wrapper" id="showPhoto"
                    style="background-image: url(data:image/png;base64,{{ base64_encode(Storage::get('users/blank.png')) }})">
                </div> --}}
                <div class="image-input-wrapper" id="showPhoto"
                    style="background-image: {{ $data['id'] == 0 ? 'url(data:image/png;base64,' . base64_encode(Storage::get('users/blank.png')) : 'url(data:image/png;base64,' . base64_encode(Storage::get('photos/' . $data['data']->photo)) }}">
                </div>

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
    </div>

    <hr>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
</form>




<script>
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('input#nik, input#nokk').mask('9999999999999999');
    $('form#proses').submit(function(e) {
        e.preventDefault();
        var form = new FormData($(this)[0]);
        $.ajax({
            url: "{{ route('penduduk.store') }}",
            method: "POST",
            dataType: 'json',
            data: form,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.id == 0) {
                    komentar(0, 'error', data.komen);
                } else {
                    komentar(1, 'success', data.komen);
                    $('#lgModal').modal('hide');
                    $('div#tabel').html(data.tabel);
                }
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
