<form id="proses" onsubmit="return false;">
    @csrf
    <input type="hidden" name="layanan_id" id="layanan_id" value="1">
    <input type="hidden" name="nomor" id="nomor" value="{{ rand_string(10) }}">
    <input type="hidden" name="kelurahan_id" id="kelurahan_id" value="{{ $kelurahan_id }}">
    <div class="form-group">
        <label for="">Pejabat Penanda Tangan</label>
        <input type="text" name="pejabat_name" id="pejabat_name" class="form-control"
            placeholder="Pejabat Penanda Tangan">
        <input type="hidden" name="pejabat_id" id="pejabat_id">
        <input type="hidden" name="pejabat_nik" id="pejabat_nik">
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" readonly>
    </div>

    <div id="orangtua">
        <h5>Menerangkan Bahwa</h5>
        <hr>
        <div class="form-group row">
            <label class="col-3 col-form-label">Nama Orang Tua</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_name" id="ortu_name" placeholder="Nama Orang Tua">
                <input type="hidden" name="ortu_id" id="ortu_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">NIK</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_nik" id="ortu_nik" placeholder="NIK">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Tempat Lahir</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_tempat" id="ortu_tempat"
                    placeholder="Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Tanggal</label>
            <div class="col-9">
                <input class="form-control" type="date" name="ortu_tanggal" id="ortu_tanggal" placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Jenis Kelamin</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_sex_name" id="ortu_sex_name"
                    placeholder="Jenis Kelamin">
                <input type="hidden" name="ortu_sex_id" id="ortu_sex_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_kawin_name" id="ortu_kawin_name"
                    placeholder="Status">
                <input type="hidden" name="ortu_kawin_id" id="ortu_kawin_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Pekerjaan</label>
            <div class="col-9">
                <input class="form-control" type="text" name="ortu_pekerjaan_name" id="ortu_pekerjaan_name"
                    placeholder="Pekerjaan Orang Tua">
                <input type="hidden" name="ortu_pekerjaan_id" id="ortu_pekerjaan_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Alamat</label>
            <div class="col-9">
                <textarea name="ortu_alamat" id="ortu_alamat" class="form-control" placeholder="Alamat" readonly></textarea>
                <input type="hidden" name="ortu_pekerjaan_id" id="ortu_pekerjaan_id">
            </div>
        </div>
    </div>
    <div id="anak">
        <h5>Adalah Orang Tua dari</h5>
        <hr>
        <div class="form-group row">
            <label class="col-3 col-form-label">Nama</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_name" id="anak_name" placeholder="Nama Anak">
                <input type="hidden" name="anak_id" id="anak_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">NIK</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_nik" id="anak_nik" placeholder="NIK">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Tempat Lahir</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_tempat" id="anak_tempat"
                    placeholder="Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Tanggal</label>
            <div class="col-9">
                <input class="form-control" type="date" name="anak_tanggal" id="anak_tanggal"
                    placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Jenis Kelamin</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_sex_name" id="anak_sex_name"
                    placeholder="Jenis Kelamin">
                <input type="hidden" name="anak_sex_id" id="anak_sex_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_kawin_name" id="anak_kawin_name"
                    placeholder="Status">
                <input type="hidden" name="anak_kawin_id" id="anak_kawin_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Pekerjaan</label>
            <div class="col-9">
                <input class="form-control" type="text" name="anak_pekerjaan_name" id="anak_pekerjaan_name"
                    placeholder="Pekerjaan">
                <input type="hidden" name="anak_pekerjaan_id" id="anak_pekerjaan_id">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Alamat</label>
            <div class="col-9">
                <textarea name="anak_alamat" id="anak_alamat" class="form-control" placeholder="Alamat" readonly></textarea>
                <input type="hidden" name="anak_pekerjaan_id" id="anak_pekerjaan_id">
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label class="col-3 col-form-label">Kegunaaan</label>
        <div class="col-9">
            @php
                $data_alasan = App\Models\Alasan::all();

            @endphp
            <?= cKombo('alasan_id', 'Pilih Alasan', 'id', 'nama', $data_alasan, '#') ?>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
    </div>
</form>

<script>
    $('input#pejabat_name').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('auto.perangkat') }}",
                dataType: "json",
                type: 'get',
                data: {
                    term: request.term,
                    kelurahan_id: $('input#kelurahan_id').val()
                },
                success: function(data) {
                    response(data);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {
            $("input#pejabat_name").val(ui.item.label);
            $("input#pejabat_id").val(ui.item.value);
            $("input#jabatan").val(ui.item.jabatan);
            $("input#pejabat_nik").val(ui.item.nik);

            return false;

        }
    });


    $('input#ortu_name').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('auto.penduduk') }}",
                dataType: "json",
                type: 'get',
                data: {
                    term: request.term,
                    kelurahan_id: $('input#kelurahan_id').val()

                },
                success: function(data) {
                    response(data);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {
            $("input#ortu_name").val(ui.item.label);
            $("input#ortu_id").val(ui.item.value);
            $("input#ortu_nik").val(ui.item.nik);
            $("input#ortu_tempat").val(ui.item.tempat);
            $("input#ortu_tanggal").val(ui.item.tanggal);
            $("input#ortu_sex_name").val(ui.item.sex_name);
            $("input#ortu_sex_id").val(ui.item.sex_id);
            $("input#ortu_kawin_name").val(ui.item.kawin_name);
            $("input#ortu_kawin_id").val(ui.item.kawin_id);
            $("input#ortu_pekerjaan_name").val(ui.item.pekerjaan_name);
            $("input#ortu_pekerjaan_id").val(ui.item.pekerjaan_id);
            $("textarea#ortu_alamat").val(ui.item.warga_name + " " + ui.item.kelurahan_name + " " + ui.item
                .kecamatan_name);

            return false;

        }
    });



    $('input#anak_name').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('auto.penduduk') }}",
                dataType: "json",
                type: 'get',
                data: {
                    term: request.term,
                    kelurahan_id: $('input#kelurahan_id').val()

                },
                success: function(data) {
                    response(data);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {
            $("input#anak_name").val(ui.item.label);
            $("input#anak_id").val(ui.item.value);
            $("input#anak_nik").val(ui.item.nik);
            $("input#anak_tempat").val(ui.item.tempat);
            $("input#anak_tanggal").val(ui.item.tanggal);
            $("input#anak_sex_name").val(ui.item.sex_name);
            $("input#anak_sex_id").val(ui.item.sex_id);
            $("input#anak_kawin_name").val(ui.item.kawin_name);
            $("input#anak_kawin_id").val(ui.item.kawin_id);
            $("input#anak_pekerjaan_name").val(ui.item.pekerjaan_name);
            $("input#anak_pekerjaan_id").val(ui.item.pekerjaan_id);
            $("textarea#anak_alamat").val(ui.item.warga_name + " " + ui.item.kelurahan_name + " " + ui.item
                .kecamatan_name);

            return false;

        }
    });

    $("form#proses").submit(function() {
        $.post("{{ route('kurang.mampu.store') }}", $(this).serialize(), function(data) {
            alert(data.id);
            $('div#tabel').html(data.tabel);
        }, 'json');

    });
</script>
