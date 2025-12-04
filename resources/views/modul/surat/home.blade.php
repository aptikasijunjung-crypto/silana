@extends('template')

@section('header')
    <x-backend.pdfviewer></x-backend.pdfviewer>
@endsection

@section('konten')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Surat Keluar</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm">Surat Keluar tanpa Template</span>
            </h3>
        </div>
        <div class="card-body pt-5 pb-0 mt-n3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" width="4%">Hapus</th>
                            <th class="text-center">No</th>
                            <th class="text-center" width="6%">Kode</th>
                            <th>Tentang</th>
                            <th class="text-center" width="5%">Draft</th>
                            <th class="text-center" width="6%">Kirim</th>
                            <th class="text-center" width="5%">Hasil</th>
                            <th class="text-center" width="6%">Valid</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $dt)
                            <tr id="baris-{{ $dt->nomor }}">
                                <td class="text-center">
                                    <button type="button" class="btn btn-link modal-hapus-surat" id="{{ $dt->nomor }}">
                                        <i class='icon-xl fas fa-trash-alt text-danger'></i>
                                    </button>
                                </td>
                                <td class="text-center">{{ $item + 1 }}</td>
                                <td class="text-center">{{ $dt->nomor }}</td>
                                <td>{{ $dt->tentang }}</td>
                                <td class="text-center"><button type="button" class="btn btn-link btn-sm lihat-draft"
                                        file="{{ $dt->files }}">
                                        <i class='icon-xl far fa-file-pdf text-warning'></i>
                                    </button></td>
                                <td class="text-center">{{ $dt->created_at }}</td>
                                <td class="text-center">
                                    @if (empty($dt->origin_file))
                                    @else
                                        <button type="button" class="btn btn-link btn-sm lihat-draft"
                                            file="{{ $dt->origin_file }}">
                                            <i class='icon-xl far fa-file-pdf text-success'></i>
                                        </button>
                                    @endif
                                </td>
                                <td class="text-center">{{ $dt->updated_at }}</td>




                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    @php
        echo lgModal();
        echo smModal();
    @endphp
@endsection

@section('jquery')
    <script src="{{ asset('assets/js/pdfjs-viewer.js') }}"></script>
    <script>
        $('button.lihat-draft').click(function() {
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

        $("button.modal-hapus-surat").click(function(e) {
            e.preventDefault();
            id = $(this).attr('id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $('#smModal').modal('show');
            $.post("{{ route('modal.hapus.surat') }}", {
                id: id,
                _token: csrfToken
            }, function(data) {
                $('div.sm-modal').html(data);
            });


        });
    </script>
@endsection
