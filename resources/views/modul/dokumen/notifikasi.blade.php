@extends('template')

@section('header')
    <x-backend.pdfviewer></x-backend.pdfviewer>
@endsection

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Penerbitan Surat Elektronik</h3>

                </div>

                <div class="card-body">
                    <?= alertBody('Penanda tanganan surat ini menggunakan Sertifikat Elektronik yang di terbitkan oleh Balai Besar Sertifikat Elektronik') ?>
                    <?= tabelNotifikasi($data) ?>

                </div>
                <!--end::Form-->
            </div>
        </div>

    </div>
    @if (count($data) > 0)
        <?php echo xlModal(); ?>
    @endif
@endsection

@section('jquery')
    <script src="{{ asset('assets/js/pdfjs-viewer.js') }}"></script>
    <script>
        $('button.modal-tte').click(function() {
            $('#lgModal').modal('show');
            id = $(this).attr('id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('modal.tte') }}", {
                    id: id,
                    _token: csrfToken
                },

                function(data) {
                    $('div.xl-modal').html(data);
                });
        });
    </script>
@endsection
