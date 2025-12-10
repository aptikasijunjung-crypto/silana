<form id="proses" onsubmit="return false;">
    @csrf
    <input type="hidden" value="{{ $id }}" name="nomor" id="nomor">
    <button type="submit" class="btn btn-danger">Hapus</button>
    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
</form>

<script>
    $("form#proses").submit(function(e) {
        e.preventDefault();
        $.post("{{ route('proses.hapus.surat') }}", $(this).serialize(), function(data) {
            $("tr#baris-" + data.id).fadeOut(function() {
                $(this).remove();
            });
            $('#smModal').modal('hide');
            komentar(1, 'Success', 'Data Success di hapus');
        }, "json");
    });
</script>
