<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Daftar Penduduk</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ $data->warga_name }}</span>
        </h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-light-success font-weight-bolder font-size-sm modal-penduduk"
                id="0" warga_id="{{ $data->id }}">Tambah
                Penduduk</button>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0" id="tabel">
        <?= tabelPenduduk($tabel) ?>

    </div>
    <!--end::Body-->
</div>
