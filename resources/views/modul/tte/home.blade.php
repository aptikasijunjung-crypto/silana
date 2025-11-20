@extends('template')

@section('konten')
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
        <div class="alert-icon">
            <span class="svg-icon svg-icon-primary svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                    viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <path
                            d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                            fill="#000000" opacity="0.3"></path>
                        <path
                            d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                            fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <div class="alert-text">Pengelolaan Data Perangkat dengan baik</div>
    </div>

    <div id="box-penduduk">
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Penandatanganan Layanan</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Layanan</span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0" id="tabel">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No</th>
                                <th>Layanan</th>
                                <th>Masuk</th>
                                <th class="text-center" width="5%">TTE</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr id="baris-{{ $item->id }}">
                                    <td>{{ $item->nomor }}</td>
                                    <td>{{ $item->LAYANAN }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link btn-sm modal-tte"
                                            id="{{ $item->id }}">
                                            <i class="icon-2x text-success flaticon-list"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!--end::Body-->
        </div>
    </div>
    @php
        echo lgModal();
    @endphp
@endsection

@section('jquery')
    <script>
        $('button.modal-tte').click(function(e) {
            $('#lgModal').modal('show');
            id = $(this).attr('id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('modal.tte.layanan') }}", {
                id: id,
                _token: csrfToken
            }, function(data) {
                $('div.lg-modal').html(data);
            });

        });
    </script>
@endsection
