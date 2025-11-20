<div class="row">
    <div class="col-md-8">
        <iframe src="data:application/pdf;base64,{{ base64_encode(Storage::get('bahan/' . $data->bahan)) }}"
            width="100%" height="600px" frameborder="0">
            Your browser does not support PDFs. Please download the PDF to view it: <a
                href="data:application/pdf;base64,{{ base64_encode(Storage::get('bahan/' . $data->bahan)) }}">Download
                PDF</a>
        </iframe>
    </div>
    <div class="col-md-4">

        <form id="proses" onsubmit="return false;">
            @csrf
            <input type="hidden" value="{{ $data->id }}" name="id" id="idx">
            <div class="form-group">
                <label for="">Passhprase</label>
                <input type="password" class="form-control" name="passhprase" id="passhprase" placeholder="Passhprase">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light-primary">TTE</button>
                <button type="button" class="btn btn-light-danger" data-dismiss="modal">Batal</button>
            </div>

        </form>
    </div>

</div>

<script>
    $('form#proses').submit(function(e) {
        $.LoadingOverlay('show');
        $.post("{{ route('proses.tte.layanan') }}", $(this).serialize(), function(data) {
            if (data.id == 0) {
                komentar(0, 'Oppss', data.komen);
            } else {
                komentar(1, 'Success', data.komen);
                $('div.lg-modal').html(data.base);
                $("tr#baris-" + data.idx).fadeOut('slow', function(i) {
                    $(this).remove();
                });
            }
            $.LoadingOverlay('hide');
        }, 'json');
    });
</script>
