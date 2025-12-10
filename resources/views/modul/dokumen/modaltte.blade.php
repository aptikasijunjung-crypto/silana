<div class="row">
    <div class="col-md-6">
       
        
        <div class="pdfjs-viewer" pdf-document="data:application/pdf;base64,{{ $pdf }}" initial-zoom="fit"></div>
    </div>
    <div class="col-md-6">
        <?= alertBody('Tindakan kebijakan yang akan di ambil') ?>
        <form id="proses-tte" onsubmit="return false;">
            @csrf
            <input type="hidden" name="kode" value="{{ $data->TTE }}">
            <input type="hidden" name="id" id="idsetuju" value="{{ $data->id }}">
            <input type="hidden" name="nomor" id="nomor" value="{{ $data->nomor }}">
            <div class="form-group">
                <label for="">Tindakan</label>
                @php
                    $data_terima = App\Models\Terima::all();
                @endphp
                <?= cKombo('terima_id', 'Pilih Tindakan', 'terima_id', 'terima_name', $data_terima, '#') ?>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
            </div>
            @if ($data->TTE == 1)
                <div class="form-group">
                    <label for="">Passhprase</label>
                    <input type="password" class="form-control" name="passhprase" id="passhprase"
                        placeholder="Passhprase">
                </div>
            @endif

            <div class="form-group">
                <button type="submit" class="btn btn-light-primary">Simpan</button>
                <button type="button" class="btn btn-light-danger" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>

<script src="assets/js/pdfjs-viewer.js"></script>
<script>
    $('form#proses-tte').submit(function(e) {
        $.LoadingOverlay('show');
        $.post("{{ route('proses.tte') }}", $(this).serialize(), function(data) {
            if (data.id == 0) {
                komentar(0, "Opps", data.komen);
            } else {
                komentar(1, "Success", data.komen);
                $('div.card-body').html(data.umpan);
                $('h3.card-title').html(data.judul);
                $('#xlModal').modal('hide');

            }
            $.LoadingOverlay('hide');
        }, "json");
    });

    $('select#terima_id').change(function(e) {
        var id = $(this).val();
        csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        nomor = $("input#nomor").val();


        $.post("{{ route('buatqr') }}", {
            id: id,
            _token: csrfToken,
            nomor: nomor
        }, function(data) {
            $("#passhprase").prop("disabled", id == 1 ? false : true);
        });


    });
</script>
