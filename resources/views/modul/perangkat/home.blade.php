@extends('template')

@section('konten')
    <?= notifikasi('Pengelolaan Data Perangkat dengan baik') ?>
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Perangkat Desa</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm">Desa Kampung Baru</span>
            </h3>
        </div>
        <div class="card-body pt-5 pb-0 mt-n3">
            <p class="text-right">
                <button type="button" class="btn btn-light-primary font-weight-bold mr-2 modal-perangkat" id="0"
                    kelurahan_id="{{ $kelurahan_id }}" token="{{ csrf_token() }}"
                    rute="{{ route('modal.perangkat') }}">Tambah
                    Perangkat</button>
            </p>
            <div class="tabel">
                <?= tabelPerangkat($data, csrf_token(), route('modal.perangkat')) ?>
            </div>

        </div>


    </div>

    <div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>

            </div>
        </div>
    </div>
@endsection

@section('jquery')
    <script>
        $(document).on('click', 'button.modal-perangkat', function(e) {
            $.LoadingOverlay('show');
            id = $(this).attr('id');
            token = $(this).attr('token');
            rute = $(this).attr('rute');
            kelurahan_id = $(this).attr('kelurahan_id');

            $('#myModal').modal('show');
            $.post(rute, {
                id: id,
                _token: token,
                kelurahan_id: kelurahan_id
            }, function(data) {
                $('div.modal-body').html(data);
                $.LoadingOverlay('hide');
            });
        });
    </script>
@endsection
