<form id="proses" onsubmit="return false">
    @csrf
    @php
        echo alertBody('Yakin Hapus Data?');
    @endphp
    <input type="hidden" name="id" id="id" value="{{ $id }}">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <button type="submit" class="btn btn-danger mr-2">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </div>
</form>


<script>
    $('form#proses').submit(function(e) {
        e.preventDefault();
        $.LoadingOverlay('show');
        $.post("{{ route('kurang.mampu.proses.delete') }}", $(this).serialize(), function(data) {
            $('tr#baris-' + data.id).fadeOut('slow', function() {
                $(this).remove();
            });
            $('#smModal').modal('hide');
            $.LoadingOverlay('hide');
        }, 'json');
    });
</script>
