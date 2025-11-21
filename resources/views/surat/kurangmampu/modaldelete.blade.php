<form id="proses" onsubmit="return false">
    @php
        echo alertBody('Yakin Hapus Data?');
    @endphp
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <button type="reset" class="btn btn-success mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</form>
