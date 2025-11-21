@extends('template')

@section('konten')
    <div id="box-penduduk">
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Daftar Keterangan Tidak Mampu</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ $data->kelurahan_name }}</span>
                </h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-info font-weight-bolder font-size-sm modal-mampu" id="0"
                        kelurahan_id="{{ $data->kelurahan_id }}">Tambah Surat Keterangan</button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0" id="tabel">

                @php
                    echo tabelLayananKurangMampu($tabel);
                @endphp


            </div>
            <!--end::Body-->
        </div>
    </div>

    @php
        echo lgModal();
        echo smModal();
    @endphp
@endsection

@section('jquery')
    <script>
        $('button.modal-mampu').click(function() {
            $('#lgModal').modal('show');
            id = $(this).attr('id');
            kelurahan_id = $(this).attr('kelurahan_id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('kurang.mampu.modal') }}", {
                id: id,
                _token: csrfToken,
                kelurahan_id: kelurahan_id
            }, function(data) {
                $("div.lg-modal").html(data);

            });
        });

        $('button.modal-delete').click(function() {
            $('#smModal').modal('show');
            id = $(this).attr('id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('kurang.mampu.modal.delete') }}", {
                id: id,
                _token: csrfToken,
            }, function(data) {
                $("div.sm-modal").html(data);

            });
        });

        $(document).on('click', 'button.lihat-draft', function() {
            $('#lgModal').modal('show');
            file = $(this).attr('file');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('surat.lihat.draft') }}", {
                    file: file,
                    _token: csrfToken
                },
                function(data) {
                    $('div.lg-modal').html(data);
                });
        });
    </script>
@endsection
