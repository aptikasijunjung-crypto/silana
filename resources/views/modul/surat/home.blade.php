@extends('template')

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
                            <th class="text-center">NO</th>
                            <th class="text-center">KODE</th>
                            <th>TENTANG</th>
                            <th class="text-center">DRAFT</th>
                            <th class="text-center">DIKIRIM</th>
                            <th class="text-center">HASIL</th>
                            <th>DIVALIDASI</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $dt)
                            <tr>
                                <td class="text-center">{{ $item + 1 }}</td>
                                <td class="text-center">{{ $dt->nomor }}</td>
                                <td>{{ $dt->tentang }}</td>
                                <td class="text-center"><button type="button" class="btn btn-link btn-sm lihat-draft"
                                        file="{{ $dt->files }}">
                                        <i class="icon-2x text-danger flaticon-interface-4"></i>
                                    </button></td>
                                <td class="text-center">{{ $dt->created_at }}</td>
                                <td class="text-center">
                                    @if (empty($dt->origin_file))
                                    @else
                                        <button type="button" class="btn btn-link btn-sm lihat-draft"
                                            file="{{ $dt->origin_file }}">
                                            <i class="icon-2x text-success flaticon-interface-4"></i>
                                        </button>
                                    @endif
                                </td>
                                <td>{{ $dt->updated_at }}</td>




                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    @php
        echo lgModal();
    @endphp
@endsection

@section('jquery')
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
    </script>
@endsection
