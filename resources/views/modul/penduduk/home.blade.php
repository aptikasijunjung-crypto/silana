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
        <div class="alert-text">Use Boostrap cards with
            <code>.card-stretch</code>and
            <code>.card-stretch-{half|third|fourth}</code>classes to have stretch cards in Bootstrap Grid.
        </div>
    </div>

    <div id="box-penduduk">
        <div class="row">
            @foreach ($data as $item => $i)
                <div class="col-xl-3 pointer box-warga" id="{{ $i->id }}">
                    <!--begin::Stats Widget 29-->
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-2x svg-icon-info">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path
                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span
                                class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $i->jumlah_penduduk }}</span>
                            <span class="font-weight-bold text-muted font-size-sm">{{ $i->warga_name }}</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 29-->
                </div>
            @endforeach
        </div>
    </div>

    <?= lgModal() ?>
@endsection

@section('jquery')
    <script src="{{ asset('assets/js/jquery.maskedinput.js') }}"></script>
    <script>
        $("div.box-warga").click(function(e) {
            id = $(this).attr('id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('penduduk.box') }}", {
                id: id,
                _token: csrfToken
            }, function(data) {
                $('div#box-penduduk').html(data);
            });

        });

        $(document).on("click", "button.modal-penduduk", function(e) {
            $('#lgModal').modal('show');
            id = $(this).attr('id');
            warga_id = $(this).attr('warga_id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('penduduk.modal') }}", {
                id: id,
                _token: csrfToken,
                warga_id: warga_id
            }, function(data) {
                $('div.lg-modal').html(data);
            });
        })
    </script>
@endsection
